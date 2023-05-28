<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\EDMyJobController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\ApplyFormController;
use App\Http\Controllers\JobSeekerController;
use App\Http\Controllers\EDMessagesController;
use App\Http\Controllers\JobArchiveController;
use App\Http\Controllers\EDMyAccountController;
use App\Http\Controllers\EDMyProfileController;
use App\Http\Controllers\JSDMessagesController;
use App\Http\Controllers\EDChangePlanController;
use App\Http\Controllers\JSDMyAccountController;
use App\Http\Controllers\JSDMyProfileController;
use App\Http\Controllers\EDJobPostFormController;
use App\Http\Controllers\EmployerLoginController;
use App\Http\Controllers\EDSubscriptionController;
use App\Http\Controllers\JobSeekerLoginController;
use App\Http\Controllers\EDJobApplicantsController;
use App\Http\Controllers\EmployerArchiveController;
use App\Http\Controllers\TalentCommunityController;
use App\Http\Controllers\JobSeekerArchiveController;
use App\Http\Controllers\JSDMyApplicationController;
use App\Http\Controllers\EDTalentCommunityController;
use App\Http\Controllers\EmployerRegistrationController;
use App\Http\Controllers\JobSeekerRegistrationController;

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

Route::get('/', [HomeController::class, 'developerlook_index'])->name('home');
Route::get('/about', [AboutController::class, 'developerlook_index'])->name('about');
Route::get('/pricing', [PricingController::class, 'developerlook_index'])->name('pricing');
Route::get('/talent-community', [TalentCommunityController::class, 'developerlook_index'])->name('talent_community');////
Route::get('/employers-registration', [EmployerRegistrationController::class, 'developerlook_index'])->name('employer_registration');
Route::get('/job-seekers-registration', [JobSeekerRegistrationController::class, 'developerlook_index'])->name('job_seeker_registration');
Route::get('/employers-login', [EmployerLoginController::class, 'developerlook_index'])->name('employers_login');
Route::get('/job-seekers-login', [JobSeekerLoginController::class, 'developerlook_index'])->name('job_seekers_login');
Route::get('/employer', [EmployerController::class, 'developerlook_index'])->name('employer');
Route::get('/job-seeker', [JobSeekerController::class, 'developerlook_index'])->name('job_seeker');
Route::get('/job', [JobController::class, 'developerlook_index'])->name('job');
Route::get('/employers', [EmployerArchiveController::class, 'developerlook_index'])->name('employers');
Route::get('/job-seekers', [JobSeekerArchiveController::class, 'developerlook_index'])->name('job_seekers');
Route::get('/jobs', [JobArchiveController::class, 'developerlook_index'])->name('jobs');
Route::get('/apply-form', [ApplyFormController::class, 'developerlook_index'])->name('apply-form');
Route::get('/employer-change-plan', [EDChangePlanController::class, 'developerlook_index'])->name('change-plan');////
Route::get('/job-applicants', [EDJobApplicantsController::class, 'developerlook_index'])->name('job-applicants');
Route::get('/job-post-form', [EDJobPostFormController::class, 'developerlook_index'])->name('job-post-form');
Route::get('/employers-messages', [EDMessagesController::class, 'developerlook_index'])->name('employers-messages');////
Route::get('/employers-my-account', [EDMyAccountController::class, 'developerlook_index'])->name('employers-my-account');
Route::get('/employers-my-job', [EDMyJobController::class, 'developerlook_index'])->name('employers-my-job');////
Route::get('/employers-my-profile', [EDMyProfileController::class, 'developerlook_index'])->name('employers-my-profile');
Route::get('/employers-subscription', [EDSubscriptionController::class, 'developerlook_index'])->name('employers-subscription');
Route::get('/employers-talent-community', [EDTalentCommunityController::class, 'developerlook_index'])->name('employers-talent-community');
Route::get('/job-seeker-message', [JSDMessagesController::class, 'developerlook_index'])->name('job-seeker-message');////
Route::get('/job-seeker-my-account', [JSDMyAccountController::class, 'developerlook_index'])->name('job-seeker-my-account');
Route::get('/job-seeker-my-application', [JSDMyApplicationController::class, 'developerlook_index'])->name('job-seeker-my-application');
Route::get('/job-seeker-my-profile', [JSDMyProfileController::class, 'developerlook_index'])->name('job-seeker-my-profile');///

//home
//about
//pricing
//talent community//
//apply form
//registration
 //employer registration
 //job_seeker registration
//login
 //employer login
 //job_seeker login
//single
 //employer
 //job_seeker
 //job
//archive
 //employer
 //job_seeker
 //job
//dashboard
 //employer
  //change plan
  //job applicants
  //job posts form
  //messages
  //my account
  //my job
  //my profile
  //subscription
  //talent community employers
 //job_seeker
  //my profile
  //my application
  //my account
  //messages