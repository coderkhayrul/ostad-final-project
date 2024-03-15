<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use function Ramsey\Uuid\v1;
use Illuminate\Http\Request;

use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $role = $request->role;
        if ($role) {
            $users = User::where('role', $role)->get();
            return view('admin.components.user.index', compact('users'));
        }

        $users = User::all();
        return view('admin.components.user.index', compact('users'));
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
    public function store(Request $reques){}
   
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $profile = $user->profile;
        return view('admin.components.user.edit', compact('user', 'profile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $user = Auth::user();
        if ($user->profile) {
            Auth::user()->update([
                'name' => $request->firstName . ' ' . $request->lastName,
                'mobile' => $request->mobile,
            ]);
            $user->profile->update([
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
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
           $user->delete();

        return response()->json([
            'status' => true,
            'message' => 'user Deleted Successfully',
        ]);
    }
}
