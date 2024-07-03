<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class JobCreated extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public $job;
    public $user;
    public function __construct($job, $user)
    {
        $this->job = $job;
        $this->user = $user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $url = url('/admin/job/pending/'.$this->job->id);
        return (new MailMessage)
                    ->from($this->user->email, $this->job->company_name)
                    ->greeting('Hello Admin!')
                    ->line('A job has been created.')
                    ->line('Job Title: ' . $this->job->title)
                    ->line('Job Description: ' . $this->job->description)
                    ->line('Job Experience: ' . $this->job->experience)
                    ->line('Job Salary: ' . $this->job->salary)
                    ->action('Approve', $url)
                    ->line('Thank you for approving!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
