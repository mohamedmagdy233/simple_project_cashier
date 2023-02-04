<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable =[

        'book_number',
        'book_Date',
        'product_type',
        'product',
        'section_id'
    ];




    public function section()
    {
        return $this->belongsTo(Section::class,'section_id');
    }


}
