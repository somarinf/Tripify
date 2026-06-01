<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\Planner;
use App\Models\Stage;

class ActivityCheck
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
        $activity_id = $request->route('activity_id');
        $user_id = auth()->id();
        $activity = Activity::findOrFail($activity_id);

        $stage = Stage::findOrFail($activity->stage_id);

        $is_member = Planner::where('trip_id', $stage->trip_id)
            ->where('user_id', $user_id)
            ->exists();
    
        if (!$is_member) {
            abort(403, 'No tienes permiso para acceder a esta actividad.');
        }


        return $next($request);
    }
}
