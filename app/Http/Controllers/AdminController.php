<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use App\Notifications\JobApproved;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class AdminController extends Controller
{
    public function index() {
        $totalPendingJobs = Job::where("status", false)->count();
        $totalEmployers = User::where("role", 'employer')->count();
        return view("admin.admin_dashboard", compact("totalPendingJobs","totalEmployers"));
    }
    public function approve(Job $job) {
        Job::where("id", $job->id)->update(["status"=> true]);

        $job = Job::where("id", $job->id)->first();
        $user = User::find($job->user_id);
        Notification::route('mail', $job->contact_email)->notify(new JobApproved($job, $user));

        return redirect()->back()->with("success","Job Approved!");
    }
    public function pending(){
        $jobs = Job::where("status", false)->get();
        return view("admin.pending_job", compact("jobs"));
    }
    public function show($job){
        $jobs = Job::where('id', $job)->where("status", false)->get();
        return view("admin.pending_job", compact("jobs"));
    }
    public function employer(){
        $employers = User::where("role", "employer")->get();
        return view("admin.employers_list", compact("employers"));
    }
}
