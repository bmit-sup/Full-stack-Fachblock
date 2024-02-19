<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoItemController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Bestehende Route für Benutzerauthentifizierung
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
return $request->user();
});

// CRUD-Routen für TodoItem
Route::get('/todo-items', [TodoItemController::class, 'index']);
Route::get('/todo-items/{id}', [TodoItemController::class, 'show']);
Route::post('/todo-items', [TodoItemController::class, 'store']);
Route::put('/todo-items/{id}', [TodoItemController::class, 'update']);
Route::delete('/todo-items/{id}', [TodoItemController::class, 'delete']);
