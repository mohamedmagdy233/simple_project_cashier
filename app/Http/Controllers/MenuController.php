<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Section;
use App\Models\User;
use Illuminate\Http\Request;

class MenuController extends Controller
{
   public function index(){

       return view('products.menu');
   }
   public function Reservation(){

       $books =Book::all();

      return view('book.show_booking',compact('books',));
   }
}
