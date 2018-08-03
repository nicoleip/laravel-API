<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakerVehiclesController extends Controller
{
    public function index($id)
    {
        return "Showwing the vehicles of $id";
    }
}
