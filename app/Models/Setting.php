<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'key',
        'value',
        'metaTitle',
        'metaDescription',
        'metaKeywords',
        'metaAuthor',
        'metaRobots',
        'metaGoogleSiteVerification',
        'adsCode',
        'logo',
    ];
}
