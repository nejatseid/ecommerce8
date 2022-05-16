<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable =[
    'id',
    'name',
    'unit',
    'price',
    'quality',
    ];
    public function Catagories()
    {
        return $this->belongsTo(Catagory::class);
    }

}
