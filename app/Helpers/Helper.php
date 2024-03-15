<?php

use App\Models\Page;
use App\Models\GeneralSetting;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;



if (!function_exists('getRole')) {
    function getRole($role)
    {
        $roles = [
            1 => 'Admin',
            2 => 'Company',
            3 => 'Candidate',
        ];
        return $roles[$role];
    }
}

function success(string $message = 'Success', array $data = [], int $statusCode = 200, bool $success = true): JsonResponse
{
    return response()->json([
        'success' => $success,
        'message' => $message,
        'data' => $data,
    ], $statusCode);
}

function error($message = 'Error', $data = [], $statusCode = 404, $error = true): JsonResponse
{
    return response()->json([
        'error' => $error,
        'message' => $message,
        'data' => $data,
    ], $statusCode);
}

function makeDirectory($location): void
{
    if (!File::isDirectory(public_path() . $location)) {
        File::makeDirectory(public_path() . $location, 0777, true, true);
    }
}

function saveImage($image, $location): string
{
    makeDirectory($location);
    $image_name = random_int(10000000, 99999999) . '.' . $image->getClientOriginalExtension();
    $image->move(public_path($location), $image_name);
    return $location . $image_name;
}

function deleteImage($image): void
{
    if (File::exists(public_path() . $image)) {
        File::delete(public_path() . $image);
    }
}


function roleName($role_id)
{
    $roles = [
        1 => 'Admin',
        2 => 'Company',
        3 => 'Candidate',
    ];
    return $roles[$role_id];
}

function routeMatch($route, $output = "active")
{
    if (Route::currentRouteName() == $route) return $output;
}


function countryList()
{
    return [
        'Bangladesh',
        'Afghanistan',
        'Albania',
        'Algeria',
        'Andorra',
        'Angola',
        'Antigua and Barbuda',
        'Argentina',
        'Armenia',
        'Australia',
        'Austria',
    ];
}

function salaryType()
{
    return [
        'Hourly',
        'Daily',
        'Weekly',
        'Monthly',
        'Yearly',
    ];
}

function currencyList()
{
    return [
        'BDT',
        'USD',
        'EUR',
        'GBP',
        'JPY',
        'CNY',
        'INR',
        'RUB',
        'KRW',
        'TRY',
    ];
}
function setting()
{
    return GeneralSetting::first();
}

function getPage()
{
    return Page::all();
}

// function profileImage()
// {
//     return UserProfile::first();
// }