<?php

namespace App\Http\Controllers;

use App\Campuses;
use Illuminate\Http\Request;

use App\Http\Requests;
use View;

class CampusController extends Controller
{
    public function index(){
        $campuses = Campuses::All();
        return View::make('campuses.test')
            ->with('campus', $campuses);
        return $campuses;
    }
    public function show($id)
    {
        // get the campuses
        $campus = Campuses::find($id);
        return response()->json($campus);
    }

}
