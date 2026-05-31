<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripController;
use App\Http\Controllers\StageController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ActivityTypeController;
use App\Http\Controllers\CostInfoController;
use App\Http\Controllers\TripCommentController;
use App\Http\Controllers\StageCommentController;
use App\Http\Controllers\ActivityCommentController;
use App\Http\Controllers\PlannerController;



Route::middleware(['auth'])->group(function () {

    Route::get('/trips', [TripController::class, 'index'])->name('trips.index');
    Route::post('/trips', [TripController::class, 'store'])->name('trips.store');
    Route::get('/trips/pdf', [TripController::class, 'pdf'])->name('trips.pdf');
    Route::middleware('trip.check')->group(function () {
        Route::get('/trips/{trip_id}/comments', [TripCommentController::class, 'index'])->name('trips.comments.index');
        Route::post('/trips/{trip_id}/comments', [TripCommentController::class, 'store'])->name('trips.comments.store');
        Route::get('/trips/{trip_id}', [TripController::class, 'edit'])->name('trips.edit');
        Route::put('/trips/{trip_id}', [TripController::class, 'update'])->name('trips.update');
        Route::delete('/trips/{trip_id}', [TripController::class, 'destroy'])->name('trips.destroy');

        Route::get('/trips/{trip_id}/planners', [PlannerController::class, 'index'])->name('planners.index');
        Route::post('/trips/{trip_id}/planners', [PlannerController::class, 'store'])->name('planners.store');
        Route::delete('/trips/{trip_id}/planners/{planner_id}', [PlannerController::class, 'destroy'])->name('planners.destroy');

        Route::get('/trips/{trip_id}/stages', [StageController::class, 'index'])->name('stages.index');
        Route::post('/trips/{trip_id}/stages', [StageController::class, 'store'])->name('stages.store');
        Route::delete('/trips/{trip_id}/stages/{stage_id}', [StageController::class, 'destroy'])->name('stages.destroy');
        Route::get('/stages/pdf/{trip_id}', [StageController::class, 'pdf'])->name('stages.pdf');
    });
    

    Route::middleware('stage.check')->group(function () {
        Route::get('/stages/{stage_id}', [StageController::class, 'edit'])->name('stages.edit');
        Route::put('/stages/{stage_id}', [StageController::class, 'update'])->name('stages.update');
        
        Route::get('/stages/{stage_id}/activities', [ActivityController::class, 'index'])->name('activities.index');
        Route::post('/stages/{stage_id}/activities', [ActivityController::class, 'store'])->name('activities.store');
        Route::delete('/stages/{stage_id}/activities/{activity_id}', [ActivityController::class, 'destroy'])->name('activities.destroy');
        Route::get('/stages/{stage_id}/comments', [StageCommentController::class, 'index'])->name('stages.comments.index');
        Route::post('/stages/{stage_id}/comments', [StageCommentController::class, 'store'])->name('stages.comments.store');
        Route::get('/activities/pdf/{stage_id}', [ActivityController::class, 'pdf'])->name('activities.pdf');

    });

    
    
    Route::middleware('activity.check')->group(function () {
        Route::get('/activities/{activity_id}/edit', [ActivityController::class, 'edit'])->name('activities.edit');

        Route::put('/activities/{activity_id}', [ActivityController::class, 'update'])->name('activities.update');
        Route::get('/activities/{activity_id}/comments', [ActivityCommentController::class, 'index'])->name('activities.comments.index');
        Route::post('/activities/{activity_id}/comments', [ActivityCommentController::class, 'store'])->name('activities.comments.store');
        Route::get('/activities/{activity_id}/types', [ActivityTypeController::class, 'index'])->name('activitytypes.index');
        Route::get('/activities/{activity_id}/types/{type_id}/edit', [ActivityTypeController::class, 'edit'])->name('activitytypes.edit');
        Route::post('/activities/{activity_id}/types', [ActivityTypeController::class, 'store'])->name('activitytypes.store');
        Route::put('/activities/{activity_id}/types/{type_id}', [ActivityTypeController::class, 'update'])->name('activitytypes.update');
        Route::delete('/activities/{activity_id}/types/{type_id}', [ActivityTypeController::class, 'destroy'])->name('activitytypes.destroy');
        Route::get('/activities/{activity_id}/costinfos', [CostInfoController::class, 'index'])->name('costinfos.index');
        Route::post('/activities/{activity_id}/costinfos', [CostInfoController::class, 'store'])->name('costinfos.store');
        Route::delete('/activities/{activity_id}/costinfos/{costinfo_id}', [CostInfoController::class, 'destroy'])->name('costinfos.destroy');

    });
    

    Route::middleware('user.check')->group(function () {
        Route::get('/users/{user_id}/edit', [UserController::class, 'edit'])->name('users.edit');
        Route::put('/users/{user_id}', [UserController::class, 'update'])->name('users.update');
        Route::delete('/users/{user_id}', [UserController::class, 'destroy'])->name('users.destroy');
    });
    
    

    Route::middleware('cost.check')->group(function () {
        Route::get('/costinfos/{costinfo_id}/edit', [CostInfoController::class, 'edit'])->name('costinfos.edit');
        Route::put('/costinfos/{costinfo_id}', [CostInfoController::class, 'update'])->name('costinfos.update');
    });
    
    Route::middleware('admin')->group(function () {

        Route::get('/users', [UserController::class, 'index'])->name('users.index');
        Route::post('/users', [UserController::class, 'store'])->name('users.store');


        Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');
        Route::post('/roles', [RoleController::class, 'store'])->name('roles.store');
        Route::get('/roles/{role_id}/edit', [RoleController::class, 'edit'])->name('roles.edit');
        Route::put('/roles/{role_id}', [RoleController::class, 'update'])->name('roles.update');
        Route::delete('/roles/{role_id}', [RoleController::class, 'destroy'])->name('roles.destroy');
    });
});

Route::get('/', function () {
    return view('auth.login');
})->name('login');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

