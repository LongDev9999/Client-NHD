<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;//USE THU VIEN HTTP
use Carbon\Carbon;
class Kehoach_Xaydung_NHD extends Controller
{
    public static $URL="http://localhost:8000/api-nhd/kh-xaydung-nhd/";
    public static $URLmonhoc="http://localhost:8000/api-nhd/monhoc/";
    public function index() //GET ALL DATA,DANH SACH
    {
        $response = Http::get(self::$URL);//lay du lieu dang JSON
        $cover_data = json_decode($response);
     //   dd($cover_data);
        return view('KHXaydung.danhsach',compact('cover_data'));
      
    }

   
    public function create() //GOI FORM THEM
    {
        $response = Http::get(self::$URLmonhoc);    $cover_data = json_decode($response);
        return view('KHXaydung.add',compact('cover_data'));
    }

    public function store(Request $request) //THEM DU LIEU
    {
         // dd($request->all());//KIỂM TRA DỮ LIỆU VỀ TỪ FORM
       $response = Http::post(self::$URL,$request->all());
       //    return $response->status() ;//=201-->THANH CONG
       return redirect()->route('kh-xaydung-nhd.index');//chuyển hướng về Danh Sách 
    }

   
    public function show($id) //HIEN THI THEO ID
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();     
        dd($dt);
    }

    public function edit($id) //GOI FORM SUA
    {
        $response = Http::get(self::$URL.$id);      $cover_data = json_decode($response);
        $response2=Http::get(self::$URLmonhoc);     $monhoc=json_decode($response2);   
        return view('KHXaydung.edit',compact('cover_data','monhoc'));
    }

    public function update(Request $request, $id) //SUA DATA
    {
        $response = Http::put(self::$URL.$id, $request->all());
        //  return $response->status() ;//200
        return redirect()->route('kh-xaydung-nhd.index');//chuyển hướng về Danh Sách 
    }

    public function destroy($id)
    {
        $response= Http::delete(self::$URL.$id);//Gui ler SERVER de lay du lieu THEO ID
        //  return $response->status() ;//200 la thanh cong
        return redirect()->route('kh-xaydung-nhd.index');//chuyển hướng về Danh Sách 
    }
}
