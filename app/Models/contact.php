<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;
    protected $table='contact';
    protected $fillable=[
        'users_id',
        'sujet',
        'message',

    ];
    public function users(){
        return $this->belongsTo(user::class);
    }
    
          
}
