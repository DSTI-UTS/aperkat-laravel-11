<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisbursementPeriod extends Model
{
    use HasFactory;

    protected $fillable = ['period'];

    public function submissions()
    {
        return $this->hasMany(Submission::class);
    }
}
