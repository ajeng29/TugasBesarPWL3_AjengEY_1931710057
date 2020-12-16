<?php

namespace App\Http\Controllers;
use App\projek3;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjekController extends Controller
{
	public function projek3(){
		$projek3 =DB::table('projek3s')->get();
		return view('projek3', Compact('projek3'));
	}
}