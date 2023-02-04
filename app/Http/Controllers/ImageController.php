<?php


namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ImageController extends Controller
{

    /*** index ***/
    public function index()
    {
        return view('image');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
        'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    ]);

        $rules =[
            'image' => ['required','image','mimes:jpg,png,jpeg,gif,svg','max:2048'],

        ];

        $messages = [
              'image.required' => 'الصوره مطلوبه',
              'image.image' => 'الملف المرفوع يجب ان يكون صوره',
              'image.max' => 'الملف المرفوع كبير جدا',
              'image.mimes' => 'الصوره المرفقه لا تناسب النوع المطلوب',

        ];

        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){

            return redirect()->back()->withErrors($validator)->withInput();
        }
        if($image = $request->file('image'))
        {
            $path = 'assets/images/';
            $photo = time() . rand(1,20000). uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move($path,$photo);
            $request['image'] = "$photo";
        }

        $data = new Image();
        $data->image = $photo ?? NULL;
        $data->save();

       session()->flash('success', 'Image Upload successfully');
       return redirect()->route('image.index');
}
}
