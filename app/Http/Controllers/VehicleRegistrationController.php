<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\VehicleRegistration;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class VehicleRegistrationController extends Controller
{
    public function index()
    {
        // Fetch all vehicle registrations from the database
        $registrations = VehicleRegistration::all();

        // Pass the registrations to the view
        return view('admin', ['registrations' => $registrations]);
    }

    public function store(Request $request)
    {
    
        $validator = Validator::make($request->all(), [
            'loginID'=>'required|integer|max:20',
            'license_plate_number' => 'required|string|max:255',
            'make_province' => 'required|string|max:255',
            'make_model' => 'required|string|max:255',
            'year_color' => 'required|string|max:255',
            'campus' => 'required|string|max:255',
            'identification' => 'nullable|string|max:255',
            'role' => 'required|string|max:255',
            'full_name' => 'required|string|max:255',
            'current_address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'postal_code' => 'required|string|max:255',
            'telephone_cell' => 'required|string|max:255',
            'telephone_home' => 'nullable|string|max:255',
            'telephone_office' => 'nullable|string|max:255',
            'registered_owner_name' => 'required|string|max:255',
            'permanent_address' => 'required|string|max:255',
            'owner_city' => 'required|string|max:255',  
            'owner_province' => 'required|string|max:255',
            'reg_OR' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',
            'reg_CR' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',
            'reg_DL' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',   
        ]);
        if (!$request->hasFile('reg_OR')) {
            return redirect()->back()->withErrors(['reg_OR' => 'The OR file is required.']);
        }
        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }
        // $role = $request->input('role');
        // Handle file uploads
        $orPath = $request->file('reg_OR')->store('uploads', 'public');
        $crPath = $request->file('reg_CR')->store('uploads', 'public');
        $dlPath = $request->file('reg_DL')->store('uploads', 'public');

        $role = $request->input('role');

        // Save data
        $VehicleRegistration = VehicleRegistration::create([
            'loginID'=>$request->loginID,
            'license_plate_number' => $request->license_plate_number,
            'make_province' => $request->make_province,
            'make_model' => $request->make_model,
            'year_color' => $request->year_color,
            'campus' => $request->campus,
            'identification' => $request->identification,
            'role' =>$role,
            'full_name' => $request->full_name,
            'current_address' => $request->current_address,
            'city' => $request->city,
            'province' => $request->province,
            'postal_code' => $request->postal_code,
            'telephone_cell' => $request->telephone_cell,
            'telephone_home' => $request->telephone_home,
            'telephone_office' => $request->telephone_office,
            'registered_owner_name' => $request->registered_owner_name,
            'permanent_address' => $request->permanent_address,
            'owner_city' => $request->owner_city,
            'owner_province' => $request->owner_province,
            'OR' => $orPath,
            'CR' => $crPath,
            'DL' => $dlPath,
        ]);

        // Redirect or return response
        return redirect()->back()->with('success', 'Registration successful!');
    }

    public function showImage($id, $type)
    {
    $formSubmission = FormSubmission::findOrFail($id);

    $image = null;
    switch ($type) {
        case 'reg_OR':
            $image = $formSubmission->OR;
            break;
        case 'reg_CR':
            $image = $formSubmission->CR;
            break;
        case 'reg_DL':
            $image = $formSubmission->DL;
            break;
        default:
            abort(404);
    }

    return response($image, 200)
        ->header('Content-Type', 'application/octet-stream');
    }

}
