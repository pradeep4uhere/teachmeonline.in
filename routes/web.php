<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () { return view('CommingSoon.commingsoon'); });

Route::get('/home', function(){ return view('HomePage.home'); });

Route::get('/aboutus',function(){ return view('Pages.AboutUs'); })->name('aboutus');
Route::get('/contactus',function(){ return view('Pages.ContactUs'); })->name('contactus');
Route::get('/termsofuse',function(){ return view('Pages.TermsOfUse'); })->name('termsofuse');
Route::get('/privacypolicy',function(){ return view('Pages.PrivacyPolicy'); })->name('privacypolicy');
Route::get('/refundandcancellation',function(){ return view('Pages.RefundAndCancellation'); })->name('refundandcancellation');
Route::get('/{topicname}',[PageController::class, 'TopicPage'])->name('topicname');
