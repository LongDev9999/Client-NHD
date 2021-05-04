@extends('ViewChinh')
@section('menu3')
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
            <p class="card-category">(Sửa Thông tin Môn học)</p>
          </div>
          <div class="card-body">
            <form action="{{ route('monhoc.update',$cover_data->id_mon) }}" method="POST">
              @csrf @method("PUT")
              <div class="row">
                  <div class="col-md-12">
                      <div class="form-group">
                          <label class="bmd-label-floating">Tên Môn</label>
                          <input name="tenmon" type="text" class="form-control" value="{{ $cover_data->tenmon }}">
                      </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-4">
                      <div class="form-group">
                          <label class="bmd-label-floating">Mã Môn</label>
                          <input name="mamon" type="text" class="form-control" value="{{ $cover_data->mamon }}">
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="form-group">
                          <label class="bmd-label-floating">Số tín chỉ</label>
                          <input name="sotinchi" type="number" class="form-control" value="{{ $cover_data->sotinchi }}">
                      </div>
                  </div>
              </div>

              <label class="bmd-label-floating">Chương trình ĐT</label>
              <select name="id_ctdt"  class="form-control">
                @foreach ($bangctdt as $ctdt)
                     <option <?php if($ctdt->id_ctdt==$cover_data->id_ctdt) echo "selected" ?>  value="{{ $ctdt->id_ctdt }}">{{ $ctdt->ten_ctdt}}</option>
                 @endforeach
                
              </select>

              <button type="submit" class="btn btn-primary pull-right">Cập nhật</button>
              <div class="clearfix"></div>
          </form>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</div>

    
@endsection


