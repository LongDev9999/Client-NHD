@extends('ViewChinh')
@section('menu2')
  nav-item active
@endsection

@section('Kethuanoidung')

{{-- 
   +"id_ctdt": 0
    +"ten_ctdt": "DT K83 MMT"
    +"ngay_capnhat": "2021-03-15"
    +"ngay_banhanh": "2020-11-12"
    +"id_nganh": 3
    +"ma_nganh": "CNTT"
    +"ten_nghanh": "CÔNG NGHỆ TT"
 --}} 

 <div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Tạo Mới CTĐT</h4>
            <p class="card-category"></p>
          </div>
          <div class="card-body">
            <form action="{{ route('ctdt.store') }}" method="POST"  enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Tên CTĐT</label>
                    <input name="ten_ctdt" type="text"  class="form-control">
                  </div>
                </div>
              </div>
            
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Ngày ban hành</label>
                    <input name="ngay_banhanh" type="date" class="form-control">
                  </div>
                </div>
                {{-- NGAY CAP NHAT --}}
                
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
      
           

              <button type="submit" class="btn btn-primary pull-right">Tạo Mới CTĐT</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</div>

    
@endsection