<?php

namespace App\Http\Middleware;

use App\Models\Planner;
use App\Models\Stage;
use Closure;
use Illuminate\Http\Request;

class StageCheck
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
        // Se obtiene el id de la etapa desde la ruta
        $stage_id = $request->route('stage_id');
        $user_id = auth()->id();


        $stage = Stage::findOrFail($stage_id);

        $isMember = Planner::where('trip_id', $stage->trip_id)
            ->where('user_id', $user_id)
            ->exists();


        if (!$isMember) {
            abort(403, 'No tienes permiso para acceder a esta etapa.');
        }

        return $next($request);
    }
}
