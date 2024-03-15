<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\JobController;

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AwardController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\JobTypeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PositionController;
use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\Admin\SubscribeController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\ApplyController;
use App\Http\Controllers\Auth\SocialLoginController;
use App\Http\Controllers\Frontend\WebsiteController;

Route::name('web.')->controller(WebsiteController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/jobs', 'jobs')->name('jobs');
    Route::get('/jobs/{slug}', 'singleJob')->name('job.single');
    Route::get('/about', 'about')->name('about');
    Route::get('/blogs', 'blogs')->name('blogs');
    Route::get('/blogs/{slug}', 'singleBlog')->name('blog.single');
    Route::get('/all-category', 'allCategory')->name('all-category');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/sign-out', 'signOut')->name('sign-out');
    Route::get('page/{slug}', 'singlePage')->name('page.single');
    Route::post('subscribe', 'subscribe')->name('subscribe');
    Route::post('contact', 'contactStore')->name('contactStore');
    Route::get('category/{id}/jobList', 'jobCategory')->name('jobCategoryList');
    Route::get('apply/{slug}', 'applyStore')->name('applyStore');
    Route::get('/search', 'search')->name('search');

    // Route::get('/all-category', 'allCategory')->name('all-category.show');
    // Route::get('/category/{slug}', 'signOut')->name('sign-out');
});

// ADMIN ROUTE LIST =======================>
Route::name('admin.')->prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::resource('categories', CategoryController::class);
    Route::resource('job-types', JobTypeController::class);
    Route::resource('blogs', BlogController::class);
    Route::resource('position', PositionController::class);
    Route::resource('user', UserController::class);
    Route::resource('skill', SkillController::class);
    Route::resource('education', EducationController::class);
    Route::resource('experience', ExperienceController::class);
    Route::resource('award', AwardController::class);
    Route::resource('pages', PageController::class);
    Route::resource('jobs', JobController::class);
    Route::resource('subscribe', SubscribeController::class);
    Route::resource('contact', ContactController::class);
    Route::resource('applies', ApplyController::class);
    Route::get('applies/status/approve/{id}', [ApplyController::class, 'statusApprove'])->name('applies.approve');
    Route::get('applies/status/rejected/{id}', [ApplyController::class, 'statusRejected'])->name('applies.rejected');




    Route::get('general-setting', [AdminController::class, 'generalSetting'])->name('general-setting');
    Route::patch('general-setting', [AdminController::class, 'generalSettingUpdate'])->name('general-setting.update');
});

Route::get('/google-login-redirect', [SocialLoginController::class, 'googleRedirect'])
    ->name('google.login');

Route::get('/google-login-callback', [SocialLoginController::class, 'googleCallback'])
    ->name('google.login.callback');


require __DIR__ . '/auth.php';
require __DIR__ . '/company.php';
require __DIR__ . '/candidate.php';
