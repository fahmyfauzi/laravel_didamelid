<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyCategory extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function company()
    {
        return $this->hasMany(Company::class);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
