<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Planner;

class TripCheck
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

        $trip_id = $request->route('trip_id');
        $user_id = auth()->id();

        $is_member = Planner::where('trip_id', $trip_id)
            ->where('user_id', $user_id)
            ->exists();

        if (!$is_member) {
            abort(403, 'No tienes permisos para acceder a este viaje');
        }

        return $next($request);
    }
}
