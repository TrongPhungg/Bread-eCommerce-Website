<div class="container">
    <div class="page-inner">
      <div class="page-header">
        <h3 class="fw-bold mb-3">Quản lí tài khoản</h3>
        <ul class="breadcrumbs mb-3">
          <li class="nav-home">
            <a href="#">
              <i class="icon-home"></i>
            </a>
          </li>
          <li class="separator">
            <i class="icon-arrow-right"></i>
          </li>
          <li class="nav-item">
            <a href="">Danh sách tài khoản</a>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="card">
            <div class="my-2">
                <a class="btn btn-primary" href="">Thêm ý kiến</a>
            </div>
        <table class="mt-3 table table-hover">
            <tr>
                <td>Tên khách hàng</td>
                <td>Mô tả</td>
                <td>Nghề nghiệp</td>
                <td>Số điểm</td>
                <td></td>
                <td></td>
            </tr>
            @foreach($data as $v)
            <tr>
                <td>
                    @php
                    foreach($dskh as $kh){
                        if($kh->IDKhachhang == $v->IDKhachhang)
                            echo $kh->TenKhachhang;
                    }
                    @endphp
                </td>
                <td>{{$v->Tieude}}</td>
                <td>{{$v->Mota}}</td>
                <td>{{$v->Ngaytao}}</td>
                <td>
                    <form action="{{route('opinion.update',$v->IDYkien)}}" method="POST"
                        style="display: inline;">
                            @csrf
                            <button type="submit" style="background:none; border:none; cursor:pointer;">
                            <a class="far fa-edit fa-2x " style="color:black;"></a>
                            </button>
                    </form>
                </td>
                <td>
                    <form action="" method="POST"
                    style="display: inline;" onsubmit="return confirm('Bạn có chắc chắn muốn xóa sản phẩm  không?');">
                        @csrf
                        @method('delete')
                        <button type="submit" style="background:none; border:none; cursor:pointer;">
                            <a class="fa fa-ban fa-2x" style="color:red;"></a>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
          </table>
          <div>
            {{$data->links()}}
          </div>
        </div>
      </div>
    </div>
  </div>