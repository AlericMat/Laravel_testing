<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'book';
    protected $fillable = [
        'name','year','publication_place','pages','price',
    ];

    public function isbn() {
        return $this->hasOne('App\Models\Isbn');
    }
    use HasFactory;
}
