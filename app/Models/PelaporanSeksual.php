<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PelaporanSeksual extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'pelaporan_seksual';

    protected $guarded = [
        'id'
    ];
}
