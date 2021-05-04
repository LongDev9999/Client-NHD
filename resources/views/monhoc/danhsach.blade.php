@extends('ViewChinh')
@section('menu3')
  nav-item active
@endsection


@section('Kethuanoidung')
    
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <a href="monhoc/create" class="btn btn-success btn-round" style=" position: relative;left: 15px;">Thêm Môn Học</a>
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Môn Học</h4>
              {{-- <p class="card-category"> Here is a subtitle for this table</p> --}}
            </div>
            <div class="card-body">
              <div class="table-responsive">
                  {{-- TABLE --}}
                  <table id="example" class="display" width="100%" data-page-length="25" data-order="[[ 1, &quot;asc&quot; ]]">
                    <thead>
                       <tr>
                          <th>Tên Môn</th>
                          <th>Mã môn</th>
                          <th>Số Tín Chỉ</th>
                          <th>Tên CTĐT</th>
                          <th>Ngân Hàng Đề </th>
                          <th>Action</th>
                       </tr>
                    </thead>
                    <tbody>
                        
                        @foreach($cover_data as $cot)
                        <tr>
                          
                            <td>{{$cot->tenmon}}</td>
                            <td>{{$cot->mamon}}</td>
                            <td>{{$cot->sotinchi}}</td>
                            <td>{{ $cot->ten_ctdt }}</td>
                            {{-- <td>{{ $cot->check_nhd }}</td> --}}
                            <td>
                                @if ($cot->check_nhd==1)
                                    Đã có NHĐ
                                @else
                                    Chưa có NHĐ
                                @endif
                
                            </td>
                                            
                            <td>
                              <a href="{{ route('monhoc.edit',$cot->id_mon) }}" class="btn btn-primary btn-fab btn-fab-mini btn-round">   <i class="material-icons">edit</i></a>
                              <form action="{{ route('monhoc.destroy',$cot->id_mon) }}" method="post">                                  
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










