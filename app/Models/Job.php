<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Job extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        "user_id",
        "company_name",
        "title",
        "description",
        "location",
        "employment_type",
        "experience",
        "salary",
        "contact_email",
        "contact_phone",
        "status",
    ];
}
