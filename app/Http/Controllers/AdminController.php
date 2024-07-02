<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\jobs;

class AdminController extends Controller
{
    public function approveJob($id)
    {
        $job = Jobs::findOrFail($id);
        $job->is_approved = true;
        $job->save();

        return redirect()->route('admin.dashboard')->with('status', 'Job approved.');
    }

    public function dashboard()
    {
        $jobs = Jobs::where('is_approved', false)->get();
        return view('admin.dashboard', compact('jobs'));
    }
}
