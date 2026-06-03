<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CostInfo;
use App\Models\ActivityCost;
use App\Models\Activity;
use App\Models\Stage;
use App\Models\Trip;

class CostInfoController extends Controller
{

    public function index($activity_id)
    {
        $cost_id = ActivityCost::where('activity_id', $activity_id)->pluck('cost_id');
        $costinfo = CostInfo::whereIn('id', $cost_id)->get();
        $stage_id = Activity::find($activity_id)->stage_id; 
        return view('costinfos.costinfos')->with('costinfos', $costinfo)->with('activity_id', $activity_id)->with('stage_id', $stage_id);
    }

    public function store(Request $request, $activity_id)
    {
        $costinfo = new CostInfo;
        $costinfo->name = $request->name;
        $costinfo->cost_value = $request->cost_value;
        $costinfo->save();

        $activitycost = new ActivityCost;
        $activitycost->activity_id = $activity_id;
        $activitycost->cost_id = $costinfo->id;
        $activitycost->save();

        $activity = Activity::find($activity_id);
        $stage = Stage::find($activity->stage_id);
        $trip = Trip::find($stage->trip_id);

        $activity->total_activity += $costinfo->cost_value;
        $activity->save();
        $stage->total_stage += $costinfo->cost_value;
        $stage->save();
        $trip->total += $costinfo->cost_value;
        $trip->save();
        

        return redirect()->route('costinfos.index',$activity_id);
    }

    public function edit($id)
    {
        $costinfo = CostInfo::find($id);
        $activity_id = ActivityCost::where('cost_id', $id)->pluck('activity_id')->first();      
        return view('costinfos.edit')->with('costinfo', $costinfo)->with('activity_id', $activity_id);
    }

    public function update(Request $request, $id)
    {
        $costinfo = CostInfo::find($id);
        $activity_id = ActivityCost::where('cost_id', $id)->pluck('activity_id')->first();
        $activity = Activity::find($activity_id);
        $stage = Stage::find($activity->stage_id);
        $trip = Trip::find($stage->trip_id);

        $activity->total_activity -= $costinfo->cost_value;
        $activity->total_activity += $request->cost_value;
        $activity->save();

        $stage->total_stage -= $costinfo->cost_value;
        $stage->total_stage += $request->cost_value;
        $stage->save();

        $trip->total -= $costinfo->cost_value;
        $trip->total += $request->cost_value;
        $trip->save();

        $costinfo->name = $request->name;
        $costinfo->cost_value = $request->cost_value;
        $costinfo->save();

        $activity = Activity::find($activity_id);
        $stage = Stage::find($activity->stage_id);
        $trip = Trip::find($stage->trip_id);


        return redirect()->route('costinfos.index', $activity_id);
    }

    public function destroy($id, $activity_id)
    {
        $costinfo = CostInfo::find($id);

        $activity = Activity::find($activity_id);
        $stage = Stage::find($activity->stage_id);
        $trip = Trip::find($stage->trip_id);
        $activity->total_activity -= $costinfo->cost_value;
        $activity->save();
        $stage->total_stage -= $costinfo->cost_value;
        $stage->save();
        $trip->total -= $costinfo->cost_value;
        $trip->save();
        
        $costinfo->delete();
        return redirect()->route('costinfos.index', $activity_id);
    }
}
