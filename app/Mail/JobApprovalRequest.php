<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\models\jobs;

class JobApprovalRequest extends Mailable
{
    use Queueable, SerializesModels;

    public $jobs;

    public function __construct(Jobs $jobs)
    {
        $this->jobs = $jobs;
    }

    public function build()
    {
        return $this->view('emails.job_approval_request')
                    ->subject('New Job Approval Request')
                    ->with([
                        'jobTitle' => $this->jobs->title,
                        'jobDescription' => $this->jobs->description,
                    ]);
    }
}
