<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;
class SinhVienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sinhvien = Http::get('http://127.0.0.1:8000/api/sinhvien')->json();
        return view('product/index',compact('sinhvien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product/create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$sinhvien = Http::post('http://127.0.0.1:8000/POST/api/sinhvien');
        $sinhvien =HTTP::post('http://127.0.0.1:8000/api/addsinhvien', [
            'ten' => $request->ten,
            'lop' => $request->lop,
            
        ]);
        return redirect(route('sinhvien.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sinhvien =  Http::get('http://127.0.0.1:8000/api/sinhvien/'.$id);

        return view('product/edit',compact('sinhvien'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $sinhvien =HTTP::put('http://127.0.0.1:8000/api/update/'.$id, [
            'ten' =>  $request->ten,
            'lop' => $request->lop,
            
        ]);
        return redirect(route('sinhvien.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sinhvien =  Http::delete('http://127.0.0.1:8000/api/delete/'.$id);

        return redirect()->back();
    }
}
