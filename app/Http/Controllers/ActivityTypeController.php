<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActivityType;
use App\Models\Activity;

class ActivityTypeController extends Controller
{
    public function index($activity_id)
    {
        $activitytypes = ActivityType::where('activity_id', $activity_id)->get();
        $stage_id = Activity::find($activity_id)->stage_id; 
        return view('activitytypes.activitytypes')->with('activitytypes', $activitytypes)->with('activity_id', $activity_id)->with('stage_id', $stage_id);
    }

    public function store(Request $request, $activity_id)
    {
        $request->validate([
            'type' => 'required|string|max:255',
    ]);

        $activitytype = new ActivityType;
        $activitytype->activity_id = $activity_id;
        $activitytype->type = $request->type;
        $activitytype->save();
        return redirect()->route('activitytypes.index', $activity_id);
    }

    public function edit($activity_id, $type)
    {
        $activitytype = ActivityType::where('type', $type)
                                ->where('activity_id', $activity_id)
                                ->firstOrFail();
        return view('activitytypes.edit')->with('activitytype', $activitytype);
    }

    public function update(Request $request, $activity_id, $type)
    {
        $request->validate([
            'type' => 'required|string|max:255',
        ]);

        ActivityType::where('type', $type)
            ->where('activity_id', $activity_id)
            ->update(['type' => $request->type]);
        return redirect()->route('activitytypes.index', $activity_id);
    }

    public function destroy($activity_id, $type)
    {
        ActivityType::where('type', $type)
            ->where('activity_id', $activity_id)
            ->delete();
        return redirect()->route('activitytypes.index', $activity_id);
    }
}
