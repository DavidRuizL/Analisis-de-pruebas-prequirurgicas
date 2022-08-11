<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Control extends Model
{
    use HasFactory;
    protected $table = "controles";

    protected $fillable = ['tp1', 'ptt1', 'at1', 'tt1', 'fb1', 'tp2','ptt2','at2', 'tt2',
        'fb2', 'tp3', 'ptt3', 'at3', 'tt3', 'fb3',];
}
