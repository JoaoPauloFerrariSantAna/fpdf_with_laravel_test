<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\WorkerResponse;
use App\Http\Resources\EnterpriseResource;
use App\Models\Enterprise;
use App\Models\Product;
use App\Models\Worker;

Route::get("/worker/enterprise/getWorker/{enterpriseId}", function(int $enterpriseId) {
	$enterprise = Enterprise::find($enterpriseId);
	return WorkerResponse::collection($enterprise->workers()->get());
});

Route::get("/enterprise/worker/getEnterprise/{workerId}", function(int $workerId) {
	return new EnterpriseResource(Worker::find($workerId)->enterprise);
});

Route::get("/product/sales/getProductSale/{productId}", function(int $productId) {
	return Product::find($productId)->sales;
});
