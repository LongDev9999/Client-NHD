@extends('ViewChinh')
@section('menu5')
  nav-item active
@endsection

@section('Kethuanoidung')

{{-- <form action="" method="post">
   {{-- lay ra mon chua co ngan hang de de them vao NHD --}}
        {{-- @foreach ($cover_data as $cot)
            @if ($cot->check_nhd==0)
                <tr>  <td>{{$cot->tenmon}}</td></tr>
            @endif
        @endforeach
   
</form> --}} 

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Tạo Mới Kế Hoạch Xây Dựng Ngân Hàng Đề</h4>
            <p class="card-category">(Tạo KH XD NHĐ cho môn chưa có NHĐ)</p>
          </div>
          <div class="card-body">
            <form action="{{ route('kh-xaydung-nhd.update',$cover_data->id_kh) }}" method="POST"  enctype="multipart/form-data">
              @csrf   @method('PUT')
                {{-- LẤY RA MÔN HỌC CHƯA CÓ NHĐ(checknhd==0) từ bảng tbl_monhoc =>ĐỂ THÊM VÀO NHĐ TRONG CSDL --}}
                <label class="bmd-label-floating">Môn Học</label>
                <select name="id_monhoc"         class="form-control"> 
                    @foreach ($monhoc as $Monhoc)
                         <option <?php if($Monhoc->id_mon==$cover_data->id_monhoc) echo "selected" ?>  value="{{ $Monhoc->id_mon }}">{{ $Monhoc->tenmon}}</option>
                    @endforeach 
                </select>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Hạn Đăng Ký Ngân Hàng Đề</label>
                    {{-- <input name="ten_nhd" type="text"  class="form-control"> --}}
                  </div>
                </div>
              </div>
        
           
              <div class="row">
                <div class="col-md-4">
                  <p>Từ ngày</p>
                  <div class="form-group">
                 
                    <input name="batdau_dknhd" type="date" class="form-control" value="{{ $cover_data->batdau_dknhd }}">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <p>Đến ngày</p>
                    <input name="han_dknhd" type="date" class="form-control" value="{{ $cover_data->han_dknhd }}">
                  </div>
                </div>
               
              </div>
              
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Người Thực hiện</label>
                    <input name="nguoi_thuchien" type="text" class="form-control" value="{{ $cover_data->nguoi_thuchien }}">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Người nghiệm thu</label>
                    <input name="nguoi_nghiemthu" type="text" class="form-control" value="{{ $cover_data->nguoi_nghiemthu }}">
                  </div>
                </div>
              </div>

            
      
           

              <button type="submit" class="btn btn-primary pull-right">LƯU</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</div>

    
@endsection