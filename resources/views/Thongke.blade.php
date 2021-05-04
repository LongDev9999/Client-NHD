@extends('ViewChinh')
@section('menu1')
  nav-item active
@endsection

@section('Kethuanoidung')
<div class="content">
  <div class="container-fluid">
    <a href="xuatexcel-chuacoNHD" class="btn btn-success btn-round" >Xuất Excel DS Môn Chưa Có NHĐ </a>
    <a href="xuatexcel-dacoNHD" class="btn btn-success btn-round" >Xuất Excel DS Môn Đã Có NHĐ </a>
    <a href="xuatexcel-denKHXD" class="btn btn-success btn-round" >Xuất Excel DS Môn Đến KH Xây Dựng NHĐ </a>
   
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-tabs card-header-primary">
            <div class="nav-tabs-navigation">
              <div class="nav-tabs-wrapper">
                <span class="nav-tabs-title">Thống Kê:</span>
                <ul class="nav nav-tabs" data-tabs="tabs">
                  <li class="nav-item">
                    <a class="nav-link active" href="#profile" data-toggle="tab">
                      <i class="material-icons">list_alt</i> DS Môn chưa có NHĐ
                      <div class="ripple-container"></div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#messages" data-toggle="tab">
                      <i class="material-icons">list_alt</i> DS Môn Đã có NHĐ
                      <div class="ripple-container"></div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#settings" data-toggle="tab">
                      <i class="material-icons">list_alt</i> DS Môn Đến KH XD NHĐ
                      <div class="ripple-container"></div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="tab-content">
              <div class="tab-pane active" id="profile">
                <table class="table table-hover">
                  <thead class="text-warning">
                    <th>STT</th>
                    <th>Tên Môn</th>
                    <th>Mã Môn</th>
                    <th>Số tín chỉ</th>
                    <th>Chương Trình Đào Tạo</th>
                  </thead>
                  <tbody>
                    @php $stt=1;    @endphp
                    @foreach ($chuacoNHD as $data)
                        
                      <tr>
                        <td>{{ $stt++ }}</td>
                        <td>{{ $data->tenmon }}</td>
                        <td>{{ $data->mamon }}</td>
                        <td>{{ $data->sotinchi }}</td>
                        <td>{{ $data->ten_ctdt }}</td>
                      </tr>

                    @endforeach
                  </tbody>
                </table>
              </div>

              <div class="tab-pane" id="messages">
                <table class="table table-hover">
                  <thead class="text-warning">
                    <th>STT</th>
                    <th>Tên Môn</th>
                    <th>Mã Môn</th>
                    <th>Số tín chỉ</th>
                    <th>Hình Thức Thi</th>
                    <th>Số Câu Hỏi</th>
                    <th>Thời Gian Thi</th>
                    <th>Người Chịu Trách Nhiệm</th>
                    <th>Đơn Vị Chịu Trách Nhiệm</th>
                  </thead>
                  <tbody>
                    @php $stt=1;    @endphp
                    @foreach ($dacoNHD as $data)
                        
                      <tr>
                        <td>{{ $stt++ }}</td>
                        <td>{{ $data->tenmon }}</td>
                        <td>{{ $data->mamon }}</td>
                        <td>{{ $data->sotinchi }}</td>
                        <td>{{ $data->hinh_thucthi }}</td>
                        <td>{{ $data->sl_cauhoi }}</td>
                        <td>{{ $data->thoigian_thi }}</td>
                        <td>{{ $data->nguoi_chiu_trachnhiem }}</td>
                        <td>{{ $data->donvi_chiu_trachnhiem }}</td>

                      </tr>

                    @endforeach
                  </tbody>
                </table>
              </div>

              <div class="tab-pane" id="settings">
                <table class="table table-hover">
                  <thead class="text-warning">
                    <th>STT</th>
                    <th>Tên Môn</th>
                    <th>Mã Môn</th>
                    <th>Số tín chỉ</th>
                    <th>Thời Hạn Đăng Ký NHĐ</th>
                  </thead>
                  <tbody>
                    @php $stt=1;    @endphp
                    @foreach ($DenKHXDNHD as $data)
                        
                      <tr>
                        <td>{{ $stt++ }}</td>
                        <td>{{ $data->tenmon }}</td>
                        <td>{{ $data->mamon }}</td>
                        <td>{{ $data->sotinchi }}</td>
                        <td>{{ date('d/m/Y',strtotime($data->batdau_dknhd)) }} Đến {{ date('d/m/Y', strtotime($data->han_dknhd)) }}</td>
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
</div>
@endsection


