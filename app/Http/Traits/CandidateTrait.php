<?php

namespace App\Http\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

trait CandidateTrait
{
    public function educationUpdate(Request $request)
    {
        $education = Auth::user()->education;
        if ($education) {
            $education->update($request->all());
        } else {
            Auth::user()->education()->create($request->all());
        }
        notyf()->addSuccess('Education Updated Successfully!');
        return back();
    }

    public function experienceUpdate(Request $request)
    {
        $experience = Auth::user()->experience;
        if ($experience) {
            $experience->update($request->all());
        } else {
            Auth::user()->experience()->create($request->all());
        }
        notyf()->addSuccess('Experience Updated Successfully!');
        return back();
    }

    public function awardUpdate(Request $request)
    {
        $award = Auth::user()->award;
        if ($award) {
            $award->update($request->all());
        } else {
            Auth::user()->award()->create($request->all());
        }
        notyf()->addSuccess('Award Updated Successfully!');
        return back();
    }

    public function coverLetterUpdate(Request $request)
    {
        $profile = Auth::user()->profile;
        if ($profile) {
            $profile->update($request->all());
        } else {
            Auth::user()->profile()->create($request->all());
        }
        notyf()->addSuccess('Cover Letter Updated Successfully!');
        return back();
    }

    public function skillsUpdate(Request $request)
    {
        $skills = Auth::user()->skill;
        if ($skills) {
            $skills->update($request->all());
        } else {
            Auth::user()->skill()->create($request->all());
        }
        notyf()->addSuccess('Skills Updated Successfully!');
        return back();
    }
    
}
