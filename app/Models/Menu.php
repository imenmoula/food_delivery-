<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

    use HasFactory;
    protected $table='menus';
    protected $fillable=[
        'nom_plat',
        'description',
        'prix',
        'qty',
        'image',
        'disponible',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(category::class);
    }
    public function orderLine()
    {
        return $this->hasMany(orderLine::class);
    }
   

}
