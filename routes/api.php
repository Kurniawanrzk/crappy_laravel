<?php
use Helper\RouteHelper;
use App\Api\ApiController;


RouteHelper::get("/", ApiController::class, "index");
RouteHelper::post("/", ApiController::class, "sendData");
