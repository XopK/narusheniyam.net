<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'number_auto',
        'violation',
        'id_status',
        'id_user',
    ];

    public function get_status(){
        return $this->hasOne(Status::class, 'id_status');
    }

    public function get_user(){
        return $this->hasOne(User::class, 'id_user');
    }
}
