<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Author extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'designation',
        'years_experience',
        'bio',
        'meta_title',
        'meta_description',
    ];

    public function blogs(): HasMany
    {
        return $this->hasMany(Blog::class);
    }

    public function caseStudies(): HasMany
    {
        return $this->hasMany(CaseStudy::class);
    }
}
