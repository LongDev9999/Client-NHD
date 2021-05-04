@extends('ViewChinh')
@section('menu4')
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
            <h4 class="card-title">Thêm Mới NHĐ</h4>
            <p class="card-category">(Thêm môn học nào chưa có NHĐ vào NHĐ)</p>
          </div>
          <div class="card-body">
            <form action="{{ route('nganhangde.store') }}" method="POST"  enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Tên Ngân Hàng Đề</label>
                    <input name="ten_nhd" type="text"  class="form-control">
                  </div>
                </div>
              </div>
            
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Hình thức thi</label>
                    <input name="hinh_thucthi" type="text" class="form-control">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">SL câu hỏi</label>
                    <input name="sl_cauhoi" type="number" class="form-control">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Thời Gian Thi(Phút)</label>
                    <input name="thoigian_thi" type="number" class="form-control">
                  </div>
                </div>
              </div>
              
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Người chịu trách nhiệm</label>
                    <input name="nguoi_chiu_trachnhiem" type="text" class="form-control">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Đơn vị chịu trách nhiệm</label>
                    <input name="donvi_chiu_trachnhiem" type="text" class="form-control">
                  </div>
                </div>
              </div>

              {{-- LẤY RA MÔN HỌC CHƯA CÓ NHĐ(checknhd==0) từ bảng tbl_monhoc =>ĐỂ THÊM VÀO NHĐ TRONG CSDL --}}
              <label class="bmd-label-floating">Môn Học</label>
              <select name="id_monhoc"         class="form-control"> 
                  @foreach ($cover_data as $cot)
                      @if ($cot->check_nhd==0) 
                        <option value="{{ $cot->id_mon }}">{{$cot->tenmon}}</option>
                      @endif
                  @endforeach
              </select>
      
           

              <button type="submit" class="btn btn-primary pull-right">Thêm Vào NHĐ</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</div>

    
@endsection