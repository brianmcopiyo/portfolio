<?php

namespace App\Http\Controllers;

use App\Mail\AdminMail;
use App\Mail\JobMail;
use App\Models\Jobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
    public function create(Request $request)
    {
        Jobs::create(['name' => $request->name, 'contact' => $request->email, "message" => $request->message]);

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        if (!preg_match('/^-?\d+(\.\d+)?$/', $request->email)) {
            Mail::to($details['email'])->send(new JobMail($details));
        }

        Mail::to('visionnexus10@gmail.com')->send(new AdminMail($details));
        return redirect()->route('success');

        //return redirect()->route("home", ['#contact-form'])->withErrors(['error' => 'There was an error with your submission.']);
    }
}
