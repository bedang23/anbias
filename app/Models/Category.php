<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    public const TYPE_BLOG = 'blog';
    public const TYPE_CASE_STUDY = 'case_study';

    protected $fillable = [
        'name',
        'slug',
        'type',
        'description',
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
