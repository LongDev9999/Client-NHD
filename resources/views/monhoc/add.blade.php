@extends('ViewChinh') @section('menu3') nav-item active @endsection @section('Kethuanoidung')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Thêm Mới</h4>
                        <p class="card-category">(Điền thông tin vào form bên dưới)</p>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('monhoc.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Tên Môn</label>
                                        <input name="tenmon" type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Mã Môn</label>
                                        <input name="mamon" type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Số tín chỉ</label>
                                        <input name="sotinchi" type="number" class="form-control" />
                                    </div>
                                </div>
                            </div>

                            {{-- LẤY RA MÔN HỌC CHƯA CÓ NHĐ(checknhd==0) từ bảng tbl_monhoc =>ĐỂ THÊM VÀO NHĐ TRONG CSDL --}}
                            <label class="bmd-label-floating">Chương Trình ĐT</label>
                            <select name="id_ctdt" class="form-control">
                                @foreach ($cover_data as $cot)
                                <option value="{{ $cot->id_ctdt }}">{{$cot->ten_ctdt}}</option>
                                @endforeach
                            </select>

                            <button type="submit" class="btn btn-primary pull-right">Thêm Môn học</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
