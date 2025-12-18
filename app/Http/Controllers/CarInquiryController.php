<?php

namespace App\Http\Controllers;

use App\Models\CarInquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CarInquiryController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string',
            'car_types' => 'required|array|min:1',
            'car_types.*' => 'in:Hatchback,Sedan,SUV',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        CarInquiry::create([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'address' => $request->address,
            'car_types' => $request->car_types,
        ]);

        return back()->with('success', 'Thank you for your inquiry! We will contact you soon.');
    }
}

