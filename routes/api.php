<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\WorkerResponse;
use App\Models\Enterprise;

Route::get("/getWorkersFrom/{id}", function(int $id) {
	return WorkerResponse::collection(Enterprise::find($id)->workers);
});
