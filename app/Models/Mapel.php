<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;

    protected $table = 'mapels';

    protected $guarded = [''];

    public function guru()
    {
        return $this->hasMany(Guru::class);
    }

    public function agenda()
    {
        return $this->hasMany(Agenda::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
