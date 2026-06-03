<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\Stage;
use App\Models\Trip;
use App\Models\Planner;
use App\Models\Notification;
use Barryvdh\DomPDF\Facade\Pdf;

class ActivityController extends Controller
{

    public function index($stage_id)
    {
        $activities = Activity::where('stage_id', $stage_id)->get();
        $trip_id = Stage::find($stage_id)->trip_id; // Assuming you want to get the trip_id from the stage
        return view('activities.activities')->with('activities', $activities)->with('stage_id', $stage_id)->with('trip_id', $trip_id);
    }

    public function store(Request $request, $stage_id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'description' => 'nullable|string|max:1000',
    ]);

        $stage = Stage::find($stage_id);
        $trip = Trip::find($stage->trip_id);

        $activity = new Activity;
        $activity->stage_id = $stage_id;
        $activity->name = $request->name;
        $activity->total_activity = 0;
        $activity->start_date = $request->start_date;
        $activity->end_date = $request->end_date;
        $activity->description = $request->description;
        $activity->save();

        $planners = Planner::where('trip_id', $stage->trip_id)->get();
        foreach ($planners as $planner) {
            Notification::create([
                'user_id' => $planner->user_id,
                'name' => 'Nueva Actividad' ,
                'description' => 'Se ha creado una nueva actividad: ' . $activity->name . '- Viaje: ' . $trip->name
            ]);
        }
        return redirect()->route('activities.index', $stage_id);
    }

    public function edit($id)
    {
        $activity = Activity::find($id);
        return view('activities.edit')->with('activity', $activity);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'total_activity' => 'required|numeric|min:0',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'description' => 'nullable|string|max:1000',
        ]);



        $activity = Activity::find($id);
        $stage = Stage::find($activity->stage_id);
        $trip = Trip::find($stage->trip_id);

        $activity->name = $request->name;
        $activity->start_date = $request->start_date;
        $activity->end_date = $request->end_date;
        $activity->description = $request->description;
        $activity->save();

        $planners = Planner::where('trip_id', $stage->trip_id)->get();
        foreach ($planners as $planner) {
            Notification::create([
                'user_id' => $planner->user_id,
                'name' => 'Actualización de Actividad',
                'description' => 'Se ha actualizado la actividad: ' . $activity->name . '- Viaje: ' . $trip->name
            ]);
        }
        return redirect()->route('activities.index', $activity->stage_id);
    }

    public function destroy($stage_id, $id)
    {
        $activity = Activity::find($id);
        $stage = Stage::find($stage_id);
        $trip = Trip::find($stage->trip_id);

        $planners = Planner::where('trip_id', $stage->trip_id)->get();
        foreach ($planners as $planner) {
            Notification::create([
                'user_id' => $planner->user_id,
                'name' => 'Eliminación de Actividad',
                'description' => 'Se ha eliminado la actividad: ' . $activity->name . '- Viaje: ' . $trip->name
            ]);
        }

        $activity->delete();
        return redirect()->route('activities.index', $stage_id);
    }

    public function pdf($stage_id)
    {
        $activities = Activity::where('stage_id', $stage_id)->get();
        $stage = Stage::find($stage_id);
        
        $pdf = PDF::loadView('activities.pdf', compact('activities', 'stage'));
        return $pdf->download('actividades_viaje.pdf');
    }
}
