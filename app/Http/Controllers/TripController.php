<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;
use App\Models\Planner;
use App\Models\Notification;
use Barryvdh\DomPDF\Facade\Pdf;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->id();
        $trip_ids = Planner::where('user_id', $user_id)->pluck('trip_id');
        $trips = Trip::whereIn('id', $trip_ids)->get();
        return view('trips.trips')->with('trips', $trips);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'description' => 'nullable|string|max:1000',
        ]);

        $trip = new Trip;
        
        $trip->name = $request->name;
        $trip->total = 0;
        $trip->start_date = $request->start_date;
        $trip->end_date = $request->end_date;
        $trip->description = $request->description;
        $trip->save();

        $planner = new Planner;
        $planner->user_id = auth()->id();
        $planner->trip_id = $trip->id;
        $planner->rol = 'organizador';
        $planner->save();
        
        return redirect()->route('trips.index');
    }

    public function edit($id)
    {
        $organizador = Planner::where('trip_id', $id)
                             ->where('user_id', auth()->id())
                             ->where('rol', 'organizador')
                             ->first();
        
        if (!$organizador) {
            return redirect()->route('trips.index')->with('error', 'Solo el organizador puede editar este viaje');
        }
        $trip = Trip::find($id);
        return view('trips.edit')->with('trip', $trip);
    }

    public function update(Request $request, $id)
    {
        $organizador = Planner::where('trip_id', $id)
                             ->where('user_id', auth()->id())
                             ->where('rol', 'organizador')
                             ->first();
        
        if (!$organizador) {
            return redirect()->route('trips.index')->with('error', 'Solo el organizador puede actualizar este viaje');
        }
        
        $request->validate([
            'name' => 'required|string|max:255',
            'total' => 'required|numeric|min:0',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'description' => 'nullable|string|max:1000',
        ]);

        $trip = Trip::find($id);
        $trip->name = $request->name;
        $trip->total = $request->total;
        $trip->start_date = $request->start_date;
        $trip->end_date = $request->end_date;
        $trip->description = $request->description;
        $trip->save();
        
    
        $planners = Planner::where('trip_id', $id)->get();
        foreach ($planners as $planner) {
            Notification::create([
                'user_id' => $planner->user_id,
                'name' => 'Actualización de Viaje',
                'description' => 'Se ha actualizado el viaje: ' . $trip->name
            ]);
        }
        return redirect()->route('trips.index');
    }

    public function destroy($id)
    {
        $organizador = Planner::where('trip_id', $id)
                             ->where('user_id', auth()->id())
                             ->where('rol', 'organizador')
                             ->first();
        
        if (!$organizador) {
            return redirect()->route('trips.index')->with('error', 'Solo el organizador puede eliminar este viaje');
        }
        
        $trip = Trip::find($id);

        $planners = Planner::where('trip_id', $trip->id)->get();
        foreach ($planners as $planner) {
            Notification::create([
                'user_id' => $planner->user_id,
                'name' => 'Eliminación de Viaje',
                'description' => 'Se ha eliminado el viaje: ' . $trip->name
            ]);
        }
        $trip->delete();
        return redirect()->route('trips.index');
    }

    public function pdf()
    {
        $user_id = auth()->id();
        $trip_ids = Planner::where('user_id', $user_id)->pluck('trip_id');
        $trips = Trip::whereIn('id', $trip_ids)->get();
        
        $pdf = PDF::loadView('trips.pdf', compact('trips'));
        return $pdf->download('mis_viajes.pdf');
    }
}
