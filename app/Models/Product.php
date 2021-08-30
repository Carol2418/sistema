<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table ='Products';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'companies_id'
    ];
}
