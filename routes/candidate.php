<?php

use App\Http\Controllers\Candidate\CandidateController;
use Illuminate\Support\Facades\Route;



Route::name('candidate.')->prefix('candidate')->controller(CandidateController::class)->middleware(['auth', 'candidate'])->group(function () {
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/my-profile', 'myProfile')->name('my-profile');
    Route::post('/my-profile', 'myProfileStore')->name('my-profile.store');
    Route::get('/change-password', 'changePasswordPage')->name('change-password-page');
    Route::post('/change-password', 'changePassword')->name('change-password');
    Route::get('/my-resume', 'myResume')->name('my-resume');
    Route::get('/my-resume-preview', 'resumePerview')->name('my-resume.preview');

    Route::get('/manage-jobs', 'manageJobs')->name('manage-jobs');
    Route::get('/logout', 'logout')->name('logout');
    Route::post('/education', 'educationUpdate')->name('education.update');
    Route::post('/experience', 'experienceUpdate')->name('experience.update');
    Route::post('/experience', 'experienceUpdate')->name('experience.update');
    Route::post('/award', 'awardUpdate')->name('award.update');
    Route::post('/cover-letter', 'coverLetterUpdate')->name('coverLetter.update');
    Route::post('/skills', 'skillsUpdate')->name('skills.update');

    Route::get('/my-resume-download', 'getPdf')->name('my-resume.download');
});
