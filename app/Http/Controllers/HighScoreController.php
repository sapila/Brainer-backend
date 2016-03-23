<?php

namespace Brainer\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Brainer\Http\Requests;
use Response;

class HighScoreController extends Controller
{
  
    public function show($test_id){
	    $answers = DB::table('high_scores')
	                        ->where('brain_tests_id', '=',$test_id)
	                        ->select('username','score')
	                        ->get();


	    return Response::json(array(
	            'error' => false,
	            'products' => $answers,
	            'status_code' => 200
	        ));
    }
}
