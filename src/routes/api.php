<?php

use Illuminate\Support\Facades\Route;
use Vendor\TasksApi\Controllers\TaskController;

Route::apiResource('tasks', TaskController::class);
