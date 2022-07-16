<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\Pelapor as Authenticatable;

class SexualHarassment extends Authenticatable
{
    use HasFactory, SoftDeletes;

    protected $table = 'sexual_harassment_reports';

    protected $guarded = [
        'id'
    ];
}
