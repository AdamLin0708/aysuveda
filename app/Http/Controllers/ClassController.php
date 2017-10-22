<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ClassController extends Controller
{
   public function workshop26(){
        return view('web.class.brainGym.workshop26');
   }

   public function basicBrainGymCertification(){
       return view('web.class.brainGym.basicBrainGymCertification');
   }

   public function basicBrainGymFamilyCertification(){
       return view('web.class.brainGym.basicBrainGymFamilyCertification');
   }

   public function graffiti(){
       return view('web.class.brainGym.graffiti');
   }

   public function advantageFactor(){
       return view('web.class.brainGym.advantageFactor');
   }

   public function touchForHealthCertification(){
       return view('web.class.TFH.touchForHealthCertification');
   }

   public function fiveElements(){
       return view('web.class.TFH.fiveElements');
   }
}
