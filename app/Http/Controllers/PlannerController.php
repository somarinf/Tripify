<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planner;
use App\Models\User;
use App\Models\Trip;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;

class PlannerController extends Controller
{
    public function index($trip_id)
    {
        $trip = Trip::findOrFail($trip_id);

        $organizador = Planner::where('trip_id', $trip_id)
                             ->where('user_id', Auth::id())
                             ->where('rol', 'organizador')
                             ->first();
        
        if (!$organizador) {
            return redirect()->route('trips.index')->with('error', 'No tienes permisos para gestionar este viaje');
        }
        
        $planners = Planner::where('trip_id', $trip_id)
                          ->with('user')
                          ->get();
        
        return view('planners.index', compact('trip', 'planners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $trip_id)
    {
        $organizador = Planner::where('trip_id', $trip_id)
                             ->where('user_id', Auth::id())
                             ->where('rol', 'organizador')
                             ->firstOrFail();
        
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'rol' => 'required|in:organizador,participante'
        ]);

        $userToAdd = User::where('email', $request->email)->first();

        $exists = Planner::where('trip_id', $trip_id)
                        ->where('user_id', $userToAdd->id)
                        ->exists();
        
        if ($exists) {
            return back()->with('error', 'El usuario ya está en este viaje');
        }

        Planner::create([
            'trip_id' => $trip_id,
            'user_id' => $userToAdd->id,
            'rol' => $request->rol
        ]);

        // Notificar al usuario agregado
        Notification::create([
            'user_id' => $userToAdd->id,
            'name' => 'Nuevo Viaje Asignado',
            'description' => 'Has sido agregado al viaje: ' . Trip::find($trip_id)->name
        ]);
        
        return redirect()->route('planners.index', $trip_id)
                        ->with('success', 'Usuario agregado al viaje exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($trip_id, $planner_user_id)
    {
        $organizador = Planner::where('trip_id', $trip_id)
                             ->where('user_id', Auth::id())
                             ->where('rol', 'organizador')
                             ->firstOrFail();

        $planner = Planner::where('trip_id', $trip_id)
                         ->where('user_id', $planner_user_id)
                         ->firstOrFail();

        if ($planner_user_id == Auth::id()) {
            return back()->with('error', 'No puedes eliminarte como organizador');
        }
        
        $planner->delete();
        
        return redirect()->route('planners.index', $trip_id)
                        ->with('success', 'Usuario eliminado del viaje exitosamente');
    }
}
