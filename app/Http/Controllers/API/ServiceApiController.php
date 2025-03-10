<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceApiController extends Controller
{
    public function getServices()
    {
        $services = Service::with('parent', 'children')->get();

        return $this->responseWithSuccess('Services fetched successfully', $services);
    }
    public function servicesDetails($id)
    {
        $services = Service::with('parent', 'children')->find($id);

        return $this->responseWithSuccess('Services fetched successfully', $services);
    }
}
