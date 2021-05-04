<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;//USE THU VIEN HTTP

class ThongKeController extends Controller
{
    public static $URL_API_ChuacoNHD="http://localhost:8000/api-nhd/mon-chuaco-nhd";
    public static $URL_API_DacoNHD="http://localhost:8000/api-nhd/mon-daco-nhd";
    public static $URL_API_DenKHXDNHD="http://localhost:8000/api-nhd/mon-denkhxd-nhd";
    //XUAT EXCEL
    public static $URL_Excel_ChuacoNHD="http://localhost:8000/api-nhd/xuatexcel-chuacoNHD";
    public static $URL_Excel_DacoNHD="http://localhost:8000/api-nhd/xuatexcel-dacoNHD";
    public static $URL_Excel_DenKHXD="http://localhost:8000/api-nhd/xuatexcel-denKHXD";

    public function TongHopThongKe()
    {
        $response1 = Http::get(self::$URL_API_ChuacoNHD);   $chuacoNHD = json_decode($response1);
        $response2 = Http::get(self::$URL_API_DacoNHD);     $dacoNHD = json_decode($response2);
        $response3 = Http::get(self::$URL_API_DenKHXDNHD);  $DenKHXDNHD = json_decode($response3);
   // dd($chuacoNHD,$dacoNHD,$DenKHXDNHD);//KIEM TRA TRUOC KHI RA VIEW
        return view('Thongke',compact('chuacoNHD','dacoNHD','DenKHXDNHD'));
    }

    //XUẤT EXCEL
    public function XuatExcelChuaCoNHD() 
    {
        $myFile = storage_path("app/FileDownload/DSMonChuaCoNHD.xlsx"); //KHi tạo mới sẽ rỗng
        copy(self::$URL_Excel_ChuacoNHD, $myFile); //đổ data từ API vào
    	return response()->download($myFile);//->deleteFileAfterSend(true);
    }
    
    public function XuatExcelDaCoNHD() 
    {
        $myFile = storage_path("app/FileDownload/DSMonDaCoNHD.xlsx"); //KHi tạo mới sẽ rỗng
        copy(self::$URL_Excel_DacoNHD, $myFile); //đổ data từ API vào
    	return response()->download($myFile);//->deleteFileAfterSend(true);
    }
    public function XuatExcelDenKHXDNHD()
    {
        $myFile = storage_path("app/FileDownload/DSMonDenKHXDNHD.xlsx"); //KHi tạo mới sẽ rỗng
        copy(self::$URL_Excel_DenKHXD, $myFile); //đổ data từ API vào
    	return response()->download($myFile);//->deleteFileAfterSend(true);
    }
}
