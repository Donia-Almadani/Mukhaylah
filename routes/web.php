<?php

use App\Http\Controllers\Home;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MukhaylahStory;
use App\Http\Controllers\MStory;
use App\Http\Controllers\Activity;
use App\Http\Controllers\Stories_CompleteStory;
use App\Http\Controllers\Stories_WriteWithFriend;
use App\Http\Controllers\Stories_PictureGuessing;
use App\Http\Controllers\ShareWithFriend;
use App\Http\Controllers\PictureGuessing;
use App\Http\Controllers\CompleteStory;
use App\Http\Controllers\mukhaylahPOV;
use App\Http\Controllers\Login;
use App\Http\Controllers\Signup;
use App\Http\Controllers\Profile;
use App\Models\User;
use App\Models\Story;
use Illuminate\Auth\AuthManager;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [Home::class, 'home'])->name('home');
Route::get('/activity',  [Activity::class,'activity']);

Route::get('/login',  [Login::class,'login'])->name('login');
Route::post('/login',  [Login::class,'loginPost'])->name('login.post');

Route::get('/signup',  [Signup::class,'signup'])->name('signup');
Route::post('/signup',  [Signup::class,'signupPost'])->name('signup.post');

Route::get('/ViewStory/{id}',  [MStory::class,'viewstory'])->name('ViewStory');
Route::get('/myStories',  [MStory::class,'showUserStories'])->name('myStory');
Route::get('/profile',  [Profile::class,'show']);
Route::get('/stories_CompleteStory',  [Stories_CompleteStory::class,'stories_C']);
Route::get('/stories_PictureGuessing',  [Stories_PictureGuessing::class,'stories_P']);
Route::get('/stories_WriteWithFriend',  [App\Http\Controllers\Controller::class,'index']);

Route::get('/CompleteStory1',  [CompleteStory::class,'completeStory1']);
Route::get('/CompleteStory2',  [CompleteStory::class,'completeStory2']);
Route::get('/CompleteStory3',  [CompleteStory::class,'completeStory3']);

Route::get('/PictureGuessing1',  [PictureGuessing::class,'PictureGuessing1']);
Route::get('/PictureGuessing2',  [PictureGuessing::class,'PictureGuessing2']);
Route::get('/PictureGuessing3',  [PictureGuessing::class,'PictureGuessing3']);

Route::get('/logout',  [Login::class,'logout'])->name('logout');



Route::post('/CompleteStory1/saveStory',  [CompleteStory::class,'savestory1'])->name('savestoryC1.post');
Route::post('/CompleteStory2/saveStory',  [CompleteStory::class,'savestory2'])->name('savestoryC2.post');
Route::post('/CompleteStory3/saveStory',  [CompleteStory::class,'savestory3'])->name('savestoryC3.post');

Route::post('/PictureGuessing1/saveStory',  [PictureGuessing::class,'savestory1'])->name('savestoryP1.post');
Route::post('/PictureGuessing2/saveStory',  [PictureGuessing::class,'savestory2'])->name('savestoryP2.post');
Route::post('/PictureGuessing3/saveStory',  [PictureGuessing::class,'savestory3'])->name('savestoryP3.post');






Route::get('/shareWithFriend',  [ShareWithFriend::class,'shareWithFriend']);

Route::get('/Stories_PictureGuessing',  [PictureGuessing::class,'pictureGuessing']);




Route::post('/shareWithFriend/saveStory',  [MStory::class,'savestory'])->name('savestory.post');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/createRoom',[\App\Http\Controllers\Controller::class,'createRoom']);
    Route::get('/dashboardRoom/{id}',[\App\Http\Controllers\Controller::class,'DashboardRoom']);
    Route::post('/searchRoom',[\App\Http\Controllers\Controller::class,'enterRoom']);
    Route::get('/showStory/{id}/{roomId}',[\App\Http\Controllers\Controller::class,'showStory']);
    Route::post('/room/startGame',[\App\Http\Controllers\Controller::class,'startGame']);
    Route::post('/room/storeOwnerStory',[\App\Http\Controllers\Controller::class,'storeOwnerStory']);
    Route::post('/room/storePartnerStory',[\App\Http\Controllers\Controller::class,'storePartnerStory']);
    Route::get('/dashboard',[\App\Http\Controllers\Controller::class,'index'])->name('dashboard');
    Route::get('/showMyStory/{id}',[\App\Http\Controllers\Controller::class,'showMyStory']);

    Route::get('/dashboard/CreateRoom',[App\Http\Controllers\Controller::class,'createRoom']);
    Route::get('/startStory',[\App\Http\Controllers\Controller::class,'createRoom']);
});


//!
Route::get('/pe', function(){
$user=Story::find(8);
$user->User()->attach(2);
return $user;
});
