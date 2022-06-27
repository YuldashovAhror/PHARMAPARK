<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VacationCategory extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function vacations()
    {
        return $this->hasMany(Vacation::class, 'category_id');
    }
}
