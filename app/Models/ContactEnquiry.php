<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactEnquiry extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'email',
        'website_url',
        'company_name',
        'tech_stack',
        'primary_goal',
        'budget_range',
        'timeline',
        'message',
        'preferred_contact',
        'ip_address',
        'user_agent',
    ];
}
