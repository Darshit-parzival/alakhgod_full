<?php

namespace App\Http\Controllers;

use App\Models\AlakhgodInterestedBuyers;
use Illuminate\Http\Request;

class AlakhgodInterestedBuyersController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'fullName' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address1' => 'nullable',
            'address2' => 'nullable',
            'address3' => 'nullable',
            'pincode' => 'nullable',
            'country' => 'nullable',
            'state' => 'nullable',
        ]);

        AlakhgodInterestedBuyers::create([
            'full_name' => $validated['fullName'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'address1' => $validated['address1'] ?? null,
            'address2' => $validated['address2'] ?? null,
            'address3' => $validated['address3'] ?? null,
            'pincode' => $validated['pincode'] ?? null,
            'country' => $validated['country'] ?? null,
            'state' => $validated['state'] ?? null,
        ]);

        return redirect()->back()->with('success', 'Order submitted successfully!');
    }
}
