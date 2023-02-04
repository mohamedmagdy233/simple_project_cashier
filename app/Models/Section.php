<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $fillable =[
        'section_name',
        'section_type'

    ];





    /*** start relations ***/


    public function books()
    {
        return $this->hasMany(Book::class,'section_id');
    }



}
