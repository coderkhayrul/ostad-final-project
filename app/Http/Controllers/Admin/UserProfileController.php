<?php

namespace App\Http\Controllers\Admin;

use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserProfileStoreRequest;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $usersProfiles = UserProfile::all();
        return view('admin.components.userProfile.index',compact('usersProfiles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        
        //     'firstName' => 'required',
        //     'lastName' => 'required',
        //     'companyName' => 'required',
        //     'dateOfFounded' => 'required',
        //     'mobile' => 'required|numeric|unique:users,mobile,' . Auth::id(),
        //     'gender' => 'required',
        //     'country' => 'required',
        //     'salary' => 'required',
        //     'address' => 'required',
        // ]);
      $user = Auth::user();
        if ($user->profile && $user->profile->id == $id) {
            Auth::user()->update([
                'name' => $request->firstName . ' ' . $request->lastName,
                'mobile' => $request->mobile,
            ]);
           $update = $user->profile->update([
                'companyName' => $request->companyName,
                'firstName' => $request->firstName,
                'lastName' => $request->lastName,
                'title' => $request->title,
                'dateOfFounded' => Carbon::parse($request->dateOfFounded)->format('m-d-Y'),
                'gender' => $request->gender,
                'country' => $request->country,
                'salary' => $request->salary,
                'address' => $request->address,
                'socialFacebook' => $request->socialFacebook,
                'socialTwitter' => $request->socialTwitter,
                'socialLinkedin' => $request->socialLinkedin,
                'details' => $request->details,
            ]);
            
        } else {
            Auth::user()->update([
                'name' => $request->firstName . ' ' . $request->lastName,
                'mobile' => $request->mobile,
            ]);
            Auth::user()->profile()->create([
                'companyName' => $request->companyName,
                'firstName' => $request->firstName,
                'lastName' => $request->lastName,
                'title' => $request->title,
                'dateOfFounded' => Carbon::parse($request->dateOfFounded)->format('m-d-Y'),
                'gender' => $request->gender,
                'country' => $request->country,
                'salary' => $request->salary,
                'address' => $request->address,
                'socialFacebook' => $request->socialFacebook,
                'socialTwitter' => $request->socialTwitter,
                'socialLinkedin' => $request->socialLinkedin,
                'details' => $request->details,
            ]);
        }
        notyf()->addSuccess('Profile has been updated successfully.');
        return redirect()->back();
        
       
        // dd($userP);
        // $notification = [
        //     'message' => 'User Profile Created Successfully',
        //     'alert-type' => 'success',
        // ];

        // return redirect()->route('admin.userProfile.index')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(UserProfile $userProfile)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserProfile $userProfile)
    {
        // UserProfile::validate($userProfile, [
        //     'firstName' => 'required',
        //     'lastName' => 'required',
        //     'companyName' => 'required',
        //     'dateOfFounded' => 'required',
        //     'mobile' => 'required|numeric|unique:users,mobile,' . Auth::id(),
        //     'gender' => 'required',
        //     'country' => 'required',
        //     'salary' => 'required',
        //     'address' => 'required',
        // ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserProfile $userProfile)
    {
        
        // if (Auth::user()->profile) {
        //     Auth::user()->update([
        //         'name' => $userProfile->firstName . ' ' . $userProfile->lastName,
        //         'mobile' => $userProfile->mobile,
        //     ]);
        //     Auth::user()->profile->update([
        //         'companyName' => $request->companyName,
        //         'firstName' => $request->firstName,
        //         'lastName' => $request->lastName,
        //         'title' => $request->title,
        //         'dateOfFounded' => Carbon::parse($request->dateOfFounded)->format('m-d-Y'),
        //         'gender' => $request->gender,
        //         'country' => $request->country,
        //         'salary' => $request->salary,
        //         'address' => $request->address,
        //         'socialFacebook' => $request->socialFacebook,
        //         'socialTwitter' => $request->socialTwitter,
        //         'socialLinkedin' => $request->socialLinkedin,
        //         'details' => $request->details,
        //     ]);
        // } else {
        //     Auth::user()->update([
        //         'name' => $request->firstName . ' ' . $request->lastName,
        //         'mobile' => $request->mobile,
        //     ]);
        //     Auth::user()->profile()->create([
        //         'companyName' => $request->companyName,
        //         'firstName' => $request->firstName,
        //         'lastName' => $request->lastName,
        //         'title' => $request->title,
        //         'dateOfFounded' => Carbon::parse($request->dateOfFounded)->format('m-d-Y'),
        //         'gender' => $request->gender,
        //         'country' => $request->country,
        //         'salary' => $request->salary,
        //         'address' => $request->address,
        //         'socialFacebook' => $request->socialFacebook,
        //         'socialTwitter' => $request->socialTwitter,
        //         'socialLinkedin' => $request->socialLinkedin,
        //         'details' => $request->details,
        //     ]);
        // }
        // notyf()->addSuccess('Profile has been updated successfully.');
        // return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserProfile $userProfile)
    {
        $userProfile->delete();

        return response()->json([
            'status' => true,
            'message' => 'UserProfile Type Deleted Successfully',
        ]);
    }
}
