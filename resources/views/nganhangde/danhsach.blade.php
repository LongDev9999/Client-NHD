@extends('ViewChinh')
@section('menu4')
  nav-item active
@endsection

@section('Kethuanoidung')
    
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <a href="nganhangde/create" class="btn btn-success btn-round" style=" position: relative;left: 15px;">Xây dựng NHĐ(Add new)</a>
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Ngân hàng đề</h4>
              {{-- <p class="card-category"> Here is a subtitle for this table</p> --}}
            </div>
            <div class="card-body">
              <div class="table-responsive">
                  {{-- TABLE --}}
                  <table id="example" class="display" width="100%" data-page-length="25" data-order="[[ 1, &quot;asc&quot; ]]">
                    <thead>
                       <tr>
                          <th>Tên Môn</th>
                          <th>Hình thức thi</th>
                          <th>SL Câu hỏi</th>
                          <th>Thời Gian thi</th>
                          <th>Người chịu trách nhiệm</th>
                          <th>ĐV Chịu trách nhiệm</th>
                          <th>Ngày cập nhật</th>
                          <th>Tùy chọn</th>
                          

                       </tr>
                    </thead>
                    <tbody>
                        
                        @foreach($cover_data as $cot)
                        <tr>
                          
                            <td>{{$cot->tenmon}}</td>
                            <td>{{$cot->hinh_thucthi}}</td>
                            <td>{{$cot->sl_cauhoi}}</td>
                            <td>{{ $cot->thoigian_thi }}</td>
                            {{-- <td>{{ $cot->nguoi_chiu_trachnhiem }} ==> {{ $cot->donvi_chiu_trachnhiem }}</td> --}}
                            <td>{{ $cot->nguoi_chiu_trachnhiem }}</td>
                            <td>{{ $cot->donvi_chiu_trachnhiem }}</td>
                            <td>{{ $cot->ngay_capnhat }}</td>

                            <td>
                              <a href="{{ route('nganhangde.edit',$cot->id_nhd) }}" class="btn btn-primary btn-fab btn-fab-mini btn-round">   <i class="material-icons">edit</i></a>
                              <form action="{{ route('nganhangde.destroy',$cot->id_nhd) }}" method="post">                                  
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










