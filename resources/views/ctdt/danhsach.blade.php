@extends('ViewChinh')
@section('menu2')
  nav-item active
@endsection

@section('Kethuanoidung')
    
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <a href="ctdt/create" class="btn btn-success btn-round" style=" position: relative;left: 15px;">Tạo mới CTĐT</a>

          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Chương Trình Đào Tạo</h4>
              {{-- <p class="card-category"> Here is a subtitle for this table</p> --}}
            </div>
            <div class="card-body">
              <div class="table-responsive">
                  {{-- TABLE --}}
                  <table id="example" class="display" width="100%" data-page-length="25" data-order="[[ 1, &quot;asc&quot; ]]">
                    <thead>
                        <tr>
                            <th>Tên CTĐT</th>
                            <th>Ngày Cập Nhật</th>
                            <th>Ngày Ban Hành</th>
                            <th>Ngành</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cover_data as $cot)
                            <tr>
                               
                                <td>{{ $cot->ten_ctdt }}</td>
                                <td>{{ $cot->ngay_capnhat }}</td>
                                <td>{{ $cot->ngay_banhanh }}</td>
                                <td>{{ $cot->ten_nghanh }}</td>
                                <td>
                                  <a href="{{ route('ctdt.edit',$cot->id_ctdt) }}" class="btn btn-primary btn-fab btn-fab-mini btn-round">   <i class="material-icons">edit</i></a>
                                  <form action="{{ route('ctdt.destroy',$cot->id_ctdt) }}" method="post">                                  
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


