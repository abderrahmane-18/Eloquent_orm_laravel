<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class comment extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=['body'];
    public function scopeComments($query)
    {
        return $query->where('body','jjjj');
    }
}
