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
            <h4 class="card-title">Cập nhật</h4>
            <p class="card-category">(Cập nhật NHĐ)</p>
          </div>
          <div class="card-body">
            <form action="{{ route('nganhangde.update',$cover_data->id_nhd) }}" method="POST"  enctype="multipart/form-data">
              @csrf @method("PUT")
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Tên Ngân Hàng Đề</label>
                    <input name="ten_nhd" type="text"  class="form-control" value="{{ $cover_data->ten_nhd }}">
                  </div>
                </div>
              </div>
            
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Hình thức thi</label>
                    <input name="hinh_thucthi" type="text" class="form-control" value="{{ $cover_data->hinh_thucthi }}">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">SL câu hỏi</label>
                    <input name="sl_cauhoi" type="number" class="form-control" value="{{ $cover_data->sl_cauhoi }}">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Thời Gian Thi(Phút)</label>
                    <input name="thoigian_thi" type="number" class="form-control" value="{{ $cover_data->thoigian_thi }}">
                  </div>
                </div>
              </div>
              
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Người chịu trách nhiệm</label>
                    <input name="nguoi_chiu_trachnhiem" type="text" class="form-control" value="{{ $cover_data->nguoi_chiu_trachnhiem }}">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Đơn vị chịu trách nhiệm</label>
                    <input name="donvi_chiu_trachnhiem" type="text" class="form-control" value="{{ $cover_data->donvi_chiu_trachnhiem }}">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Ngày cập nhật</label>
                    <input name="ngay_capnhat" type="date" class="form-control" value="{{ $cover_data->donvi_chiu_trachnhiem }}">
                  </div>
                </div>
              </div>


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