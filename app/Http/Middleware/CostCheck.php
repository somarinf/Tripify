<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\ActivityCost;
use App\Models\Planner;
use App\Models\Stage;


class CostCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $costinfo_id = $request->route('costinfo_id');
        $user_id = auth()->id();
        $activity_cost = ActivityCost::where('cost_id', $costinfo_id)->firstOrFail();
        $activity = Activity::findOrFail($activity_cost->activity_id);

        $stage = Stage::findOrFail($activity->stage_id);

        $is_member = Planner::where('trip_id', $stage->trip_id)
            ->where('user_id', $user_id)
            ->exists();
    
        if (!$is_member) {
            abort(403, 'No tienes permiso para acceder a esta información de costos.');
        }
        return $next($request);
    }
}
