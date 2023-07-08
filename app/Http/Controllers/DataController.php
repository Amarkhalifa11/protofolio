<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;
use App\Http\Requests\DataRequest;


class DataController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function all_data()
    {
        $datas = Data::all();
        return view('backend.data.data' , compact('datas'));
    }

    public function edit($id)
    {
        $data = Data::find($id);
        return view('backend.data.edit_data' , compact('data'));

    }

    public function update(DataRequest $request,$id)
    {
        $name          = $request->name;
        $track         = $request->track;
        $age           = $request->age;
        $birthday      = $request->birthday;
        $website       = $request->website;
        $degree        = $request->degree;
        $email         = $request->email;
        $phone         = $request->phone;
        $city          = $request->city;
        $status        = $request->status;
        $description   = $request->description;


        //2 uploade image 
 
        $brand_image = $request->file('image'); 
 
        $name_gen = hexdec(uniqid()); 
        $img_ext = strtolower($brand_image->getClientOriginalExtension()); 
        $img_name = $name_gen . '.' . $img_ext; 
         
        $upload_location = 'frontend\assets\img'; 
        $image = $img_name; 
        $brand_image->move($upload_location,$img_name); 

        
        $data = Data::find($id);
        $data->update([
            'name'        =>$name,
            'track'       =>$track,
            'age'         =>$age,
            'birthday'    =>$birthday,
            'website'     =>$website,
            'degree'      =>$degree,
            'email'       =>$email,
            'phone'       =>$phone,
            'city'        =>$city,
            'status'      =>$status,
            'description' =>$description,
            'image'       =>$image,
        ]);

        $data->save();
        return redirect()->route('dashboard.all_data');
    }

}
