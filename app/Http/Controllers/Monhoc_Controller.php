<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;//USE THU VIEN HTTP
class Monhoc_Controller extends Controller
{
    public static $URL="http://localhost:8000/api-nhd/monhoc/";
    public static $URL_ctdt="http://localhost:8000/api-nhd/ctdt/";


    public function index() //GET ALL DATA,DANH SACH
    {
        $response = Http::get(self::$URL);//lay du lieu dang JSON
        $cover_data = json_decode($response);
      //  dd($cover_data);
        return view('monhoc.danhsach',compact('cover_data'));
    }

   
    public function create() //GOI FORM THEM
    {
        $response = Http::get(self::$URL_ctdt);//lay du lieu dang JSON
        $cover_data = json_decode($response);
     //  dd($cover_data);
        return view('monhoc.add',compact('cover_data'));
    }

    public function store(Request $request) //THEM DU LIEU
    {
         // dd($request->all());//KIỂM TRA DỮ LIỆU VỀ TỪ FORM
         Http::post(self::$URL,$request->all());
         return redirect()->route('monhoc.index');//chuyển hướng về Danh Sách 
    }

   
    public function show($id) //HIEN THI THEO ID
    {
        //
    }

    public function edit($id) //GOI FORM SUA
    {
        $getctdt = Http::get(self::$URL_ctdt);//lay du lieu dang JSON
        $bangctdt = json_decode($getctdt);

        $response = Http::get(self::$URL.$id);//Gui ler SERVER de lay du lieu THEO ID
        $cover_data = json_decode($response);   

      //  dd($bangctdt,$cover_data);//KIEM TRA DU LIEU 
        return view('monhoc.edit',compact('cover_data','bangctdt'));
    }

    public function update(Request $request, $id) //SUA DATA
    {
        // dd($request->all());//KIỂM TRA DỮ LIỆU VỀ TỪ FORM
        $response = Http::put(self::$URL.$id, $request->all());
        return redirect()->route('monhoc.index');//chuyển hướng về Danh Sách 
    }

    public function destroy($id)
    {
        Http::delete(self::$URL.$id);//Gui ler SERVER de lay du lieu THEO ID
        return redirect()->route('monhoc.index');//chuyển hướng về Danh Sách 
    }

}
