<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/braintests', function () {
    $questions = DB::table('brain_tests')->select('id','title')->get();

    return Response::json(array(
            'error' => false,
            'products' => $questions,
            'status_code' => 200
        ));
    return view('test');
});

Route::get('/questions/{test_id}', function ($test_id) {

    $questions = DB::table('brain_questions')
                        ->where('brain_tests_id','=',$test_id)
                        ->select('id','question')
                        ->get();

   // return $questions;
    return Response::json(array(
            'error' => false,
            'products' => $questions,
            'status_code' => 200
        ));

});

Route::get('/answers/{id}', function ($id) {
    $answers = DB::table('answers')
                        ->where('answers.brain_questions_id', '=',$id)
                        ->select('text','correct')
                        ->get();

	return Response::json(array(
            'error' => false,
            'products' => $answers,
            'status_code' => 200
        ));
   
});

// Route::get('/highscores/{test_id}', function ($test_id) {
//     $answers = DB::table('high_scores')
//                         ->where('brain_tests_id', '=',$test_id)
//                         ->select('username','score')
//                         ->get();

//     return Response::json(array(
//             'error' => false,
//             'products' => $answers,
//             'status_code' => 200
//         ));
// Route::resource('highscores', 'HighScoresController');

// });
Route::resource('highscores', 'HighScoreController');


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
