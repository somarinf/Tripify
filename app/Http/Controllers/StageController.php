<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stage;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Trip;
use App\Models\Notification;
use App\Models\Planner;

class StageController extends Controller
{

    public function index($trip_id)
    {
        $stages = Stage::where('trip_id', $trip_id)->get();
        return view('stages.stages')->with('stages', $stages)->with('trip_id', $trip_id);
    }

    public function store(Request $request, $trip_id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'destination' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'description' => 'nullable|string|max:1000',
    ]);

        $stage = new Stage;
        $stage->trip_id = $trip_id;
        $stage->name = $request->name;
        $stage->destination = $request->destination;
        $stage->total_stage = 0;
        $stage->start_date = $request->start_date;
        $stage->end_date = $request->end_date;
        $stage->description = $request->description;
        $stage->save();

        $trip = Trip::find($trip_id);
        $planners = Planner::where('trip_id', $trip_id)->get();
        foreach ($planners as $planner) {
            Notification::create([
                'user_id' => $planner->user_id,
                'name' => 'Nueva Etapa',
                'description' => 'Se ha creado una nueva etapa: ' . $stage->name. '- Viaje: ' . $trip->name
            ]);
        }
        return redirect()->route('stages.index', $trip_id);
    }

    public function edit($id)
    {
        $stage = Stage::find($id);
        return view('stages.edit')->with('stage', $stage);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'destination' => 'required|string|max:255',
            //'total_stage' => 'required|numeric|min:0',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'description' => 'nullable|string|max:1000',
    ]);

        $stage = Stage::find($id);
        $stage->name = $request->name;
        $stage->destination = $request->destination;
        $stage->start_date = $request->start_date;
        $stage->end_date = $request->end_date;
        $stage->description = $request->description;
        $stage->save();

        $trip = Trip::find($stage->trip_id);
        $planners = Planner::where('trip_id', $stage->trip_id)->get();
        foreach ($planners as $planner) {
            Notification::create([
                'user_id' => auth()->id(),
                'name' => 'Actualización de Etapa',
                'description' => 'Se ha actualizado la etapa: ' . $stage->name. '- Viaje: ' . $trip->name
            ]);
        }
        return redirect()->route('stages.index', $stage->trip_id);
    }

    public function destroy($trip_id, $id)
    {
        $stage = Stage::find($id);
        $planners = Planner::where('trip_id', $trip_id)->get();
        foreach ($planners as $planner) {
            Notification::create([
                'user_id' => $planner->user_id,
                'name' => 'Eliminación de Etapa',
                'description' => 'Se ha eliminado la etapa: ' . $stage->name . '- Viaje: ' . Trip::find($trip_id)->name
            ]);
        }
        $stage->delete();
        return redirect()->route('stages.index', $trip_id);
    }

    public function pdf($trip_id)
    {
        $trip = Trip::find($trip_id);
        $stages = Stage::where('trip_id', $trip_id)->get();
        
        $pdf = PDF::loadView('stages.pdf', compact('stages', 'trip')); // Agregué 'trip' aquí
        return $pdf->download('etapas_viaje.pdf');
    }
}
