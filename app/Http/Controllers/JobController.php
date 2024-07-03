<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use App\Notifications\JobCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;


class JobController extends Controller
{
    public function store(Request $request) {
        $validated = $request->validate([
            "company_name"=> "required",
            "title"=> "required",
            "description"=>"required",
            "location"=> "required",
            "employment_type"=> "required",
            "experience"=> "required",
            "salary"=> "required",
        ]);
        $user = Auth::user();

        $job = Job::create([
            "user_id" => $user->id,
            "company_name"=>$validated['company_name'],
            "title"=> $validated['title'],
            "description"=> $validated['description'],
            "location"=> $validated['location'],
            "employment_type"=> $validated['employment_type'],
            "experience"=> $validated['experience'],
            "salary"=> $validated['salary'],
            "contact_email"=> $user->email,
            "contact_phone"=> $user->phone,
            "status"=> false,
        ]);
        Notification::route('mail', 'admin@jobboard.com')->notify(new JobCreated($job, $user));
        return redirect()->back()->with("success","Job Created!");
    }
}
