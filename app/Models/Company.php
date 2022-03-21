<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function companycategory()
    {
        return $this->belongsTo(CompanyCategory::class);
    }
    public function job()
    {
        return $this->hasMany(Jobs::class);
    }



    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['company-category'] ?? false, function ($query, $companycategory) {
            return $query->whereHas('companycategory', function ($query) use ($companycategory) {
                $query->where('slug', $companycategory);
            });
        });
        $query->when($filters['location'] ?? false, function ($query, $location) {
            return $query->where(function ($query) use ($location) {
                $query->where('location', $location);
            });
        });
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where(function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%');
            });
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
