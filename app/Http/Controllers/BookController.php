<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Section;
use Illuminate\Http\Request;
use function Pest\version;

class BookController extends Controller
{

    public function index()
    {
        $sections =Section::all();
        session()->flash('alert','يرجي العلم بان الطلب سيصل خلال 40 دققيقه ');

        return view('book.book',compact('sections'));
    }

    public function create( Request $request)
    {

    }


    public function store(Request $request)
    {
//        return $request;

        $validated = $request->validate([


            'product_type'=>'required',
            'product'=>'required'

        ],[
            'product_type.required'=>'يرجي ادخال نوع الصنف ' ,
            'product.required'=>'يرجي ادخال اسم الصنف الصنف '


        ]);

        $add= Book::create([

            'book_number'=>$request->book_number,
            'book_Date'=>$request->book_Date,
            'section_id'=>$request->product_type,
            'product'=>$request->product,

        ]);
        session()->flash('Add','تم اضافه الطلب  بنجاح');
         return back();

    }


    public function show(Book $book)
    {
        //
    }


    public function edit(Request $request , $id)
    {

        $id =$request->id;
        $books =Book::where('id',$id)->first();

        $sections = Section::all();
      return view('book.edit_book',compact('books','sections'));
    }


    public function update(Request $request, $id)
    {
        $validated = $request->validate([


            'product_type'=>'required',
            'product'=>'required'

        ],[
            'product_type.required'=>'يرجي ادخال نوع الصنف ' ,
            'product.required'=>'يرجي ادخال اسم الصنف الصنف '


        ]);

        $find =Book::findOrFail($id);
        $find->update([

            'book_number'=>$request->book_number,
            'book_Date'=>$request->book_Date,
            'product_type'=>$request->product_type,
            'product'=>$request->product,

        ]);
        session()->flash('Add','تم اضافه الطلب  بنجاح');
        return back( );


    }



    public function destroy(Request $request ,$id)
    {

      $id = $request->id;
      $delete = Book::find($id);
      $delete->delete();
        session()->flash('delete_book','تم حذف الطلب  بنجاح');
        return back();

    }

    public function printBook($id){

       $find =Book::where('id',$id)->first();
       return view('book.print_book',compact('find'));


    }
}
