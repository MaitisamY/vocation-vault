<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobListingController extends Controller
{
    public function show(Request $request) {
        return view('listing.show', ['listing' => $request]);
    }
}
