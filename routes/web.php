<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', function(){
    return view('welcome');
});


Route::get('/onboarding/topic', 'OnboardingController@index');
Route::get('/onboarding/createTopic', 'OnboardingController@create');
Route::post('/onboarding/storeTopic', 'OnboardingController@store');
Route::get('/onboarding/topicDetail/{id}', 'OnboardingController@show');
Route::get('/onboarding/editTopic/{id}', 'OnboardingController@edit');
Route::post('/onboarding/updateTopic/{id}', 'OnboardingController@update');
Route::get('/onboarding/downloadTopic/{file}', 'OnboardingController@download');
Route::get('/onboarding/deleteTopic/{id}', 'OnboardingController@destroy');

Route::get('/onboarding/quiz', 'QuizController@index');
Route::get('/onboarding/createQuiz', 'QuizController@create');
Route::post('/onboarding/storeQuiz', 'QuizController@store');
Route::get('/onboarding/quizDetail/{id}', 'QuizController@show');
Route::get('/onboarding/editQuiz/{id}', 'QuizController@edit');
Route::post('/onboarding/updateQuiz/{id}', 'QuizController@update');
Route::get('/onboarding/deleteQuiz/{id}', 'QuizController@destroy');


Route::get('/onboarding/{quiz}/question', 'QuestionController@index');
Route::get('/onboarding/{quiz}/createQuestion', 'QuestionController@create');
Route::post('/onboarding/{quiz}/storeQuestion', 'QuestionController@store');
Route::get('/onboarding/questionDetail/{id}', 'QuestionController@show');
Route::get('/onboarding/editQuestion/{id}', 'QuestionController@edit');
Route::post('/onboarding/updateQuestion/{id}', 'QuestionController@update');
Route::get('/onboarding/deleteQuestion/{id}', 'QuestionController@destroy');

Route::get('/onboarding/{quiz}-{slug}', 'QuizController@startQuiz');

