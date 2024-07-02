<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\jobs;
use Auth;

class EmployerController extends Controller
{
    public function createJobs()
    {
        return view('employers.create_job');
    }

    public function storeJob(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $jobs = new Jobs();
        $jobs->employer_id = Auth::id();
        $jobs->title = $request->title;
        $jobs->description = $request->description;
        $jobs->save();

        // Notify Admin
        $adminEmail = 'admin@example.com';
        \Mail::to($adminEmail)->send(new \App\Mail\JobApprovalRequest($jobs));

        return redirect()->route('employer.dashboard')->with('status', 'Job created and awaiting approval.');
    }
}
