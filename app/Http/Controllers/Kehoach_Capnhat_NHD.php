<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;//USE THU VIEN HTTP

class Kehoach_Capnhat_NHD extends Controller
{
    public static $URL="http://localhost:8000/api-nhd/kh-capnhat-nhd/";
    public static $URLnganhangde="http://localhost:8000/api-nhd/nganhangde/";
    public function index() //GET ALL DATA,DANH SACH
    {
        $response = Http::get(self::$URL);  $cover_data = json_decode($response);
        return view('KHCapnhat.danhsach',compact('cover_data'));
    }

   
    public function create() //GOI FORM THEM
    {
        $response = Http::get(self::$URLnganhangde);    $cover_data = json_decode($response);
       // dd($cover_data);
        return view('KHCapnhat.add',compact('cover_data'));
    }

    public function store(Request $request) //THEM DU LIEU
    {
        $data=$request->all();
        $data['loai_kehoach']=1;
       // dd($data);
       $response = Http::post(self::$URL,$data);
          // return $response->status() ;//=201-->THANH CONG
       return redirect()->route('kh-capnhat-nhd.index');//chuyển hướng về Danh Sách //*/
    }

   
    public function show($id) //HIEN THI THEO ID
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();     
        dd($dt);
    }

    public function edit($id) //GOI FORM SUA
    {
        $response = Http::get(self::$URL.$id);      $cover_data = json_decode($response);
        $response2=Http::get(self::$URLnganhangde);     $nhd=json_decode($response2);   
        return view('KHCapnhat.edit',compact('cover_data','nhd'));
    }

    public function update(Request $request, $id) //SUA DATA
    {
      //  $data=$request->all();
       // dd($data);
       
        $response = Http::put(self::$URL.$id, $request->all());
        //  return $response->status() ;//200
        return redirect()->route('kh-capnhat-nhd.index');//chuyển hướng về Danh Sách //*/
    }

    public function destroy($id)
    {
        $response= Http::delete(self::$URL.$id);//Gui ler SERVER de lay du lieu THEO ID
        //  return $response->status() ;//200 la thanh cong
        return redirect()->route('kh-capnhat-nhd.index');//chuyển hướng về Danh Sách 
    }
}

