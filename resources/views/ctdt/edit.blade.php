@extends('ViewChinh')
@section('menu2')
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
            <h4 class="card-title">Cập nhật</h4>
            <p class="card-category">(Cập nhật NHĐ)</p>
          </div>
          <div class="card-body">
            <form action="{{ route('ctdt.update',$cover_data->id_ctdt) }}" method="POST"  enctype="multipart/form-data">
              @csrf @method("PUT")
             
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Tên CTĐT</label>
                    <input name="ten_ctdt" type="text"  class="form-control" value="{{ $cover_data->ten_ctdt }}">
                  </div>
                </div>
              </div>
            
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Ngày ban hành</label>
                    <input name="ngay_banhanh" type="date" class="form-control" value="{{ $cover_data->ngay_banhanh }}">
                  </div>
                </div>

                {{-- NGAY CAP NHAT --}}
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Ngày Cập Nhật</label>
                    <input name="ngay_capnhat" type="date" class="form-control" value="{{ $cover_data->ngay_capnhat }}">
                  </div>
                </div>
                
              </div>
              
            

              {{-- LẤY RA MÔN HỌC CHƯA CÓ NHĐ(checknhd==0) từ bảng tbl_monhoc =>ĐỂ THÊM VÀO NHĐ TRONG CSDL --}}
              <label class="bmd-label-floating">Ngành</label>
              <select name="id_nganh"         class="form-control"> 

                  <option value="1">Công Nghệ Thông Tin</option>
                  <option value="2">Kỹ thuật phần mềm</option>
                  <option value="3">Mạng MT & TT</option>
                  <option value="4">An Toàn Thông Tin</option>
                  <option value="5">Khoa Học Máy Tính</option>
              </select>


              <button type="submit" class="btn btn-primary pull-right">Lưu</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</div>

    
@endsection