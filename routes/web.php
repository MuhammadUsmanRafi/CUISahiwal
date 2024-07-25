<?php

use App\Http\Controllers\backend\AdminAddBlogController;
use App\Http\Controllers\backend\AdminBlogController;
use App\Http\Controllers\backend\AdminComingSoonEventsController;
use App\Http\Controllers\backend\AdminContactController;
use App\Http\Controllers\backend\AdminEditBlogController;
use App\Http\Controllers\backend\AdminEventsController;
use App\Http\Controllers\backend\AdminFAQsController;
use App\Http\Controllers\backend\AdminFeaturesController;
use App\Http\Controllers\backend\AdminHomeController;
use App\Http\Controllers\backend\AdminLoginController;
use App\Http\Controllers\backend\AdminProfileController;
use App\Http\Controllers\backend\AdminRegisterController;
use App\Http\Controllers\backend\AdminSpeakerController;
use App\Http\Controllers\frontend\AboutUsController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\FAQsController;
use App\Http\Controllers\frontend\GetRegisterController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ScheduleController;
use App\Http\Controllers\frontend\SpeakerController;
use App\Models\backend\AdminProfileModal;
use Illuminate\Support\Facades\Route;


# Frontend Frontend

Route::get('/', [HomeController::class, 'index']);
Route::get('/speakers', [SpeakerController::class, 'index']);
Route::get('/schedule', [ScheduleController::class, 'index']);
Route::get('/blogs', [BlogController::class, 'index']);
Route::get('/blog-detail/{id}', [BlogController::class, 'singleblog']);
Route::get('/contact-us', [ContactController::class, 'index']);
Route::get('/about-us', [AboutUsController::class, 'index']);
Route::get('/faqs', [FAQsController::class, 'index']);
Route::get('/register', [GetRegisterController::class, 'index']);

Route::post('/submitregisterform', [GetRegisterController::class, 'submitregisterform']);
Route::post('/commentpost/{id}', [BlogController::class, 'postComment']);
Route::post('/contact-us', [ContactController::class, 'submitMessage']);

# Backend Routes
Route::get('/admin', [AdminHomeController::class, 'index']);
Route::get('/admin/login', [AdminLoginController::class, 'index']);
Route::get('/admin/logout', [AdminLoginController::class, 'adminLogout']);
Route::get('/admin/profile', [AdminProfileController::class, 'index']);
Route::get('/admin/faqs', [AdminFAQsController::class, 'index']);
Route::get('/admin/blogs', [AdminBlogController::class, 'index']);
Route::get('/admin/add-blogs', [AdminAddBlogController::class, 'index']);
Route::get('/admin/edit-blog/{id}', [AdminEditBlogController::class, 'editblog']);
Route::get('/admin/delete-blog/{id}', [AdminEditBlogController::class, 'deleteblog']);
Route::get('/admin/enable-blog/{id}', [AdminEditBlogController::class, 'enableblog']);
Route::get('/admin/disable-blog/{id}', [AdminEditBlogController::class, 'disableblog']);
Route::get('/admin/speakers', [AdminSpeakerController::class, 'index']);
Route::get('/admin/enable-speaker/{id}', [AdminSpeakerController::class, 'enablespeaker']);
Route::get('/admin/edit-speaker/{id}', [AdminSpeakerController::class, 'editspeaker']);
Route::get('/admin/disable-speaker/{id}', [AdminSpeakerController::class, 'disablespeaker']);
Route::get('/admin/delete-speaker/{id}', [AdminSpeakerController::class, 'deletespeaker']);
Route::post('/admin/edit-speaker/{id}', [AdminSpeakerController::class, 'editsinglespeaker']);
Route::get('/admin/add-speaker', [AdminSpeakerController::class, 'addspeaker']);

Route::post('/admin/add-speaker', [AdminSpeakerController::class, 'addsinglespeaker']);
Route::post('/admin/edit-blog/{id}', [AdminEditBlogController::class, 'editsingleblog']);
Route::post('/admin/add-blogs', [AdminAddBlogController::class, 'postblog']);
Route::post('/admin/login', [AdminLoginController::class, 'onlogin']);

Route::post('/admin/update/{id}', [AdminProfileController::class, 'updateAdminProfile']);
Route::post('/admin/change-credentials/{id}', [AdminLoginController::class, 'changeCredentials'])->name('admin.change-credentials');

Route::get('/admin/contact', [AdminContactController::class, 'index']);
Route::get('/admin/contact/{id}', [AdminContactController::class, 'destroy']);

Route::get('/admin/user-register', [AdminRegisterController::class, 'index']);
Route::get('/admin/user-register/{id}', [AdminRegisterController::class, 'destroy']);


Route::get('/admin/delete-faq/{id}', [AdminFAQsController::class, 'destory']);
Route::get('/admin/faqs', [AdminFAQsController::class, 'index']);
Route::get('/admin/add-faq', [AdminFAQsController::class, 'openAddFaqs']);
Route::get('/admin/edit-faq/{id}', [AdminFAQsController::class, 'editExistingFaq']);
Route::get('/admin/enable-faq/{id}', [AdminFAQsController::class, 'enableFaq']);
Route::get('/admin/disable-faq/{id}', [AdminFAQsController::class, 'disableFaq']);
Route::post('/admin/add-faq', [AdminFAQsController::class, 'addNewFaqs']);
Route::post('/admin/edit-faq/{id}', [AdminFAQsController::class, 'updateFaq']);


Route::get('/admin/events', [AdminComingSoonEventsController::class, 'index']);
Route::get('/admin/add-event', [AdminComingSoonEventsController::class, 'create']);
Route::post('/admin/add-event', [AdminComingSoonEventsController::class, 'store']);
Route::get('/admin/edit-event/{id}', [AdminComingSoonEventsController::class, 'edit']);
Route::post('/admin/edit-event/{id}', [AdminComingSoonEventsController::class, 'update']);
Route::get('/admin/enable-event/{id}', [AdminComingSoonEventsController::class, 'enable']);
Route::get('/admin/disable-event/{id}', [AdminComingSoonEventsController::class, 'disable']);
Route::get('/admin/delete-event/{id}', [AdminComingSoonEventsController::class, 'destroy']);


Route::get('/admin/features', [AdminFeaturesController::class, 'index']);
Route::get('/admin/add-feature', [AdminFeaturesController::class, 'create']);
Route::post('/admin/add-feature', [AdminFeaturesController::class, 'store']);
Route::get('/admin/edit-feature/{id}', [AdminFeaturesController::class, 'edit']);
Route::post('/admin/edit-feature/{id}', [AdminFeaturesController::class, 'update']);
Route::get('/admin/delete-feature/{id}', [AdminFeaturesController::class, 'destroy']);
Route::get('/admin/enable-feature/{id}', [AdminFeaturesController::class, 'enable']);
Route::get('/admin/disable-feature/{id}', [AdminFeaturesController::class, 'disable']);
