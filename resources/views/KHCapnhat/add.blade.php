@extends('ViewChinh')
@section('menu6')
  nav-item active
@endsection

@section('Kethuanoidung')


<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Tạo Mới Kế Hoạch Cập Nhật Ngân Hàng Đề</h4>
            <p class="card-category">(Thông Tin Cập Nhật Ngân Hàng Đề)</p>
          </div>
          <div class="card-body">
            <form action="{{ route('kh-capnhat-nhd.store') }}" method="POST"  enctype="multipart/form-data">
              @csrf
                <label class="bmd-label-floating">Tên Ngân Hàng Đề</label>
                <select name="id_nhd"         class="form-control"> 
                    @foreach ($cover_data as $cot)
                          <option value="{{ $cot->id_nhd }}">{{$cot->ten_nhd}}</option>
                    @endforeach
                </select>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Hạn Cập Nhật Ngân Hàng Đề</label>
                    {{-- <input name="ten_nhd" type="text"  class="form-control"> --}}
                  </div>
                </div>
              </div>
        
           
              <div class="row">
                <div class="col-md-4">
                  <p>Từ ngày</p>
                  <div class="form-group">
                 
                    <input name="batdau_capnhat" type="date" class="form-control">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <p>Đến ngày</p>
                    <input name="han_capnhat" type="date" class="form-control">
                  </div>
                </div>
               
              </div>
              
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Người Thực hiện</label>
                    <input name="nguoi_thuchien" type="text" class="form-control">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Người nghiệm thu</label>
                    <input name="nguoi_nghiemthu" type="text" class="form-control">
                  </div>
                </div>
              </div>

            
      
           

              <button type="submit" class="btn btn-primary pull-right">Tạo Kế Hoạch</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</div>

    
@endsection