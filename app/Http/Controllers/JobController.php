<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function create(Request $request)
    {
        Jobs::create(['name' => $request->name, 'contact' => $request->email, "message" => $request->message]);
        return redirect()->route('success');
        //return redirect()->route("home", ['#contact-form'])->withErrors(['error' => 'There was an error with your submission.']);
    }
}
