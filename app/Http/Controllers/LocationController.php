<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class LocationController extends Controller
{
    public function index(Request $request)
    {
        $location = geoip(request()->ip());
        
        dd($location['currency']);
    }
}
