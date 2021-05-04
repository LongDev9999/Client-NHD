<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;//USE THU VIEN HTTP
use Excel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CTDT_Controller extends Controller
{
    public static $URL="http://localhost:8000/api-nhd/ctdt/";
    public function index() //GET ALL DATA,DANH SACH
    {
        $response = Http::get(self::$URL);//lay du lieu dang JSON
        $cover_data = json_decode($response);
      //  dd($cover_data);
        return view('ctdt.danhsach',compact('cover_data'));
    }

   
    public function create() //GOI FORM THEM
    {
       return view('ctdt.add');
    }

    public function store(Request $request) //THEM DU LIEU
    {
      //   dd($request->all());//KIỂM TRA DỮ LIỆU VỀ TỪ FORM
         $response=   Http::post(self::$URL,$request->all());
       return redirect()->route('ctdt.index');//chuyển hướng về Danh Sách 
    }

   
    public function show($id) //HIEN THI THEO ID
    {
        //
    }

    public function edit($id) //GOI FORM SUA
    {
        $response = Http::get(self::$URL.$id);//Gui ler SERVER de lay du lieu THEO ID
        //  return $response;//KIEM TRA DU LIEU 
        $cover_data = json_decode($response);   
        return view('ctdt.edit',compact('cover_data'));
    }

    public function update(Request $request, $id) //SUA DATA
    {
         // dd($request->all());//KIỂM TRA DỮ LIỆU VỀ TỪ FORM
        $response = Http::put(self::$URL.$id, $request->all());
        return redirect()->route('ctdt.index');//chuyển hướng về Danh Sách 
    }

    public function destroy($id)
    {
        Http::delete(self::$URL.$id);//Gui ler SERVER de lay du lieu THEO ID
        return redirect()->route('ctdt.index');//chuyển hướng về Danh Sách 
    }
}
