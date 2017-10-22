<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{

    public function ceo(){
        return view('web.team.ceo');
    }

    public function educationDirector(){
        return view('web.team.educationDirector');
    }
}
