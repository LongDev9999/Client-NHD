@extends('ViewChinh')
@section('menu6')
  nav-item active
@endsection


@section('Kethuanoidung')

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          
          <a href=" {{ route('kh-capnhat-nhd.create') }}" class="btn btn-success btn-round" style=" position: relative;left: 15px;">Tạo Mới Kế Hoạch</a>
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Kế Hoạch Cập Nhật Ngân Hàng Đề</h4>
              <p class="card-category">Thông tin Kế Hoạch</p>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                  {{-- TABLE --}}
                  <table id="example" class="display" width="100%" data-page-length="25" data-order="[[ 1, &quot;asc&quot; ]]">
                    <thead>
                       <tr>
                          <th>Tên Ngân Hàng Đề</th>
                          <th>Thời Gian Cần Cập Nhật</th>
                          <th>Người thực hiện</th>
                          <th>Người nghiệm thu</th>
                         
                          <th>Action</th>
                       </tr>
                    </thead>
                    <tbody>
                        
                        @foreach($cover_data as $cot)
                        <tr>
                          
                            <td>{{$cot->ten_nhd}}</td>
                            <td>{{$cot->batdau_capnhat}} đến {{$cot->han_capnhat}}</td>
                            <td>{{ $cot->nguoi_thuchien }}</td>
                            <td>{{ $cot->nguoi_nghiemthu }}</td>
                         
                                            
                            <td>
                              <a href="{{ route('kh-capnhat-nhd.edit',$cot->id_kh) }}" class="btn btn-primary btn-fab btn-fab-mini btn-round">   <i class="material-icons">edit</i></a>
                              <form action="{{ route('kh-capnhat-nhd.destroy',$cot->id_kh) }}" method="post">                                  
                                  @method('DELETE') @csrf
                                  <button class="btn btn-primary btn-fab btn-fab-mini btn-round">
                                    <i class="material-icons">clear</i>
                                  </button>         
                              </form>
                             
                            </td>
                        
                
                        </tr>
                        @endforeach
                
                      
                    </tbody>
                 </table>
                
              </div>
            </div>
          </div>
        </div>
       
      </div>
    </div>
</div>


@endsection
