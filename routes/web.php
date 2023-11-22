<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\EDMyJobController;
use App\Http\Controllers\PaymentController;
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
use App\Http\Controllers\VerificationController;
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
use App\Http\Controllers\SuperUserController;

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
Route::middleware(['check.employer.session'])->group(function () {
    Route::get('/employers-messages', [EDMessagesController::class, 'developerlook_index'])->name('employers-messages');////
    Route::get('/employers-my-account', [EDMyAccountController::class, 'developerlook_index'])->name('employers-my-account');
    Route::post('/employers-my-account', [EDMyAccountController::class, 'developerlook_account_update_data'])->name('employers_account_data_up');
    Route::get('/employers-my-profile', [EDMyProfileController::class, 'developerlook_index'])->name('employers-my-profile');
    Route::post('/employers-my-profile', [EDMyProfileController::class, 'developerlook_update_data'])->name('employers-data-update');
    Route::get('/employers-my-job', [EDMyJobController::class, 'developerlook_index'])->name('employers-my-job');////
    Route::post('/job-delete', [EDMyJobController::class, 'developerlook_job_delete'])->name('employers-job-delete');
    Route::post('/employers-job-preview',[EDMyJobController::class, 'developerlook_job_preview'])->name('employers-job-preview');
    Route::post('/employers-job-ApplyPermission',[EDMyJobController::class, 'developerlook_job_apply_permission'])->name('employers-job-ApplyPermission');
});
Route::middleware(['check.seeker.session'])->group(function () {
    Route::get('/job-seeker-my-account', [JSDMyAccountController::class, 'developerlook_index'])->name('job-seeker-my-account');
    Route::post('/job-seeker-my-account',[JSDMyAccountController::class, 'developerlook_account_update_data'])->name('job-seeker-account-data-up');
    Route::get('/job-seeker-my-application', [JSDMyApplicationController::class, 'developerlook_index'])->name('job-seeker-my-application');
    Route::post('/job-seeker-my-application', [JSDMyApplicationController::class, 'developerlook_delete_application'])->name('job-seeker-my-application-delete');
    Route::get('/job-seeker-my-profile', [JSDMyProfileController::class, 'developerlook_index'])->name('job-seeker-my-profile');///
    Route::post('/job-seeker-my-profile', [JSDMyProfileController::class, 'developerlook_update_data'])->name('job-seeker-data-update');
});
Route::get('/register/{provider}', [JobSeekerRegistrationController::class, 'redirectToProvider'])->name('register.provider');
Route::get('/register/{provider}/callback', [JobSeekerRegistrationController::class, 'handleProviderCallback'])->name('register.provider.callback');
Route::get('/empregister/{provider}', [EmployerRegistrationController::class, 'redirectToProvider'])->name('empregister.provider');
Route::get('/empregister/{provider}/callback', [EmployerRegistrationController::class, 'handleProviderCallback'])->name('empregister.provider.callback');
Route::get('/verification/{service}/{token}', [VerificationController::class, 'verify'])->name('verification.verify');

Route::get('/stripe/{amount}', [PaymentController::class, 'stripe'])->name('stripe');
Route::post('/stripe', [PaymentController::class, 'stripePost'])->name('stripe.post');

Route::get('/messages', [JSDMessagesController::class, 'developerlook_index'])->name('job-seeker-message');////
Route::get('/message/{param1}/{param2}',[JSDMessagesController::class,'developerlook_index'])->name('message-view');
Route::post('/message',[JSDMessagesController::class,'developerlook_send_msg'])->name('message-sending');
Route::post('/message-delete',[JSDMessagesController::class,'developerlook_delete_msg'])->name('message-delete');
Route::get('/job-applicants', [EDJobApplicantsController::class, 'developerlook_index'])->name('job-applicants');
Route::post('/delete-job-applicant', [EDJobApplicantsController::class, 'developerlook_delete_applicants'])->name('delete-job-applicant');
Route::get('/apply-form-submit', [ApplyFormController::class, 'developerlook_apply_form'])->name('apply-form-post');
Route::post('/apply-form-submit', [ApplyFormController::class, 'developerlook_apply_form_submit'])->name('apply-form-submit');
Route::post('/skills/search', [JSDMyProfileController::class, 'developerlook_search'])->name('skills.search');///
Route::get('/', [HomeController::class, 'developerlook_index'])->name('home');
Route::get('/about', [AboutController::class, 'developerlook_index'])->name('about');
Route::get('/pricing', [PricingController::class, 'developerlook_index'])->name('pricing');
Route::get('/talent-community', [TalentCommunityController::class, 'developerlook_index'])->name('talent_community');////
Route::get('/apply-form', [ApplyFormController::class, 'developerlook_index'])->name('apply-form');
Route::get('/job-seeker', [JobSeekerController::class, 'developerlook_index'])->name('job_seeker');
Route::get('/job', [JobController::class, 'developerlook_index'])->name('job');
Route::get('/job-seekers', [JobSeekerArchiveController::class, 'developerlook_index'])->name('job_seekers');
Route::get('/jobs', [JobArchiveController::class, 'developerlook_index'])->name('jobs');
Route::post('/employer', [EmployerController::class, 'developerlook_index'])->name('employer');
Route::get('/employers', [EmployerArchiveController::class, 'developerlook_index'])->name('employers');
Route::get('/employer-change-plan', [EDChangePlanController::class, 'developerlook_index'])->name('change-plan');////
Route::get('/job-seekers-registration', [JobSeekerRegistrationController::class, 'developerlook_index'])->name('job_seeker_registration');
Route::get('/job-seekers-login', [JobSeekerLoginController::class, 'developerlook_index'])->name('job_seekers_login');
Route::get('/job-seekers-login-verify', [JobSeekerLoginController::class, 'developerlook_index_verify'])->name('job-seekers-login-verify');
Route::get('/job-post-form', [EDJobPostFormController::class, 'developerlook_index'])->name('job-post-form');
Route::post('/job-seekers-login-verify', [JobSeekerLoginController::class, 'developerlook_job_seeker_login_verify'])->name('job_seekers_login_verify');
Route::post('/job-post-form', [EDJobPostFormController::class, 'developerlook_upload_data'])->name('job-post-upload-data');
Route::post('/job-seekers-registration', [JobSeekerRegistrationController::class, 'developerlook_job_seeker_store'])->name('job-seekers-registration');
Route::post('/job-seekers-login', [JobSeekerLoginController::class, 'developerlook_job_seeker_login'])->name('job-seekers-login');
Route::get('/employers-subscription', [EDSubscriptionController::class, 'developerlook_index'])->name('employers-subscription');
Route::get('/employers-talent-community', [EDTalentCommunityController::class, 'developerlook_index'])->name('employers-talent-community');
Route::get('/employers-login', [EmployerLoginController::class, 'developerlook_index'])->name('employers_login');
Route::get('/employers-login-verify', [EmployerLoginController::class, 'developerlook_index_verify'])->name('employers_login_verify');
Route::get('/employers-registration', [EmployerRegistrationController::class, 'developerlook_index'])->name('employer_registration');
Route::post('/employers-login-verify', [EmployerLoginController::class, 'developerlook_employer_login_verify'])->name('employers-login-verify');
Route::post('/employers-registration', [EmployerRegistrationController::class, 'developerlook_employer_store'])->name('employers-registration');
Route::post('/employers-login', [EmployerLoginController::class, 'developerlook_employer_login'])->name('employers-login');
Route::post('/logout',[HomeController::class, 'developerlook_logout'])->name('logout');
// for superuser system route 
Route::get('/super_login', [SuperUserController::class, 'developerlook_index'])->name('super');
Route::post('/super_login', [SuperUserController::class, 'developerlook_login'])->name('super_login');
Route::get('/mailSystem', [SuperUserController::class, 'developerlook_mailSystem'])->name('mailSystem');


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
