<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\onlinePollController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
/*          Admin Section           */

//login
    Route::get('/loginAdmin', [onlinePollController::class,"loginAdmin"] );
//Check Login
Route::post('/chkLogin', [onlinePollController::class, "chkLogin"])->name("validate");

//Route::get("/disp2",[onlinePollController::class,"dispdata"]);

//Admin Home Page
Route::get('/adminHome', [onlinePollController::class, "adminHome"]);
//Add Poll Page 
Route::get('/addPoll', [onlinePollController::class, "addPoll"]);
//Insert Poll Data
Route::post('/insertPoll', [onlinePollController::class, 'insertPoll'])->name("PollAdd");
//show Active Poll Page
Route::get('/displayPoll', [onlinePollController::class, 'displayPoll']);
//Active One Poll
Route::get('/updatePoll/{que}', [onlinePollController::class, 'updatePoll']);
//show poll Result
Route::get('/resultPoll', [onlinePollController::class, 'resultPoll']);

/*      User Section    */

//User Side poll display
Route::get('/', [onlinePollController::class, 'userPoll']);
//Add User Response
Route::post('/votePoll', [onlinePollController::class, 'votePoll'])->name("vote");
//Show Result
Route::get('/viewPoll/{que}/{opt1}/{opt2}/{opt3}/{opt4}', [onlinePollController::class, 'viewPoll'])->name('result');
