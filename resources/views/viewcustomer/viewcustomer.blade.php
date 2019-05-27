<!-- Header menu admincp -->
<div  class="row">
		<div  style="background-color: #e5e4de;height:80px" class="col-md-4">
			<p><img id="adminimg" src="{{asset('images/vdtgroup.png')}}" alt=""></p>
		</div>
		<div  style="background-color: #e5e4de;height:80px" class="col-md-8">
		@if(isset(Auth::user()->email))
			<div class="adminpppp">
			 <li class="dropdown"> 
				<strong> <i class="fas fa-user-cog"> <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="vi"></i> {{ Auth::user()->name }} </strong><span class="caret"></span></a>
				<br />
				<ul class="dropdown-menu">
				<a class="adminpppp" href="{{ url('/Admincp/logout') }}"><li><a id="vii" href="{{ url('/Admincp/logout') }}">logout</a></li></a>
			</ul>
			</div>
			</li>
		@endif
		</div>
</div>
<!-- Kết thúc Header menu admincp -->

<!-- Content trái admincp-->
<div class="row">
	<div style="background-color: #e5e4de;height: 500px;" class="col-md-2">	
      <form style="margin-top: 10px;" action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
     <nav class="navbar navbar-inversee">
  <div class="container-fluidd">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul style="width: 100%;" class="nav navbar-nav">
        
         <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="{{URL::Route('customer_order')}}" id="vi"><i class="fas fa-boxes"></i><span href=""> Tạo đơn hàng lấy</span><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a id="vi" href="{{URL::Route('customer_order')}}">Tạo đơn hàng</a></li>
            <li><a id="vi" href="{{URL::Route('view_order')}}">Danh sách đơn hàng</a></li>
            {{-- <li><a id="vi" href="#">Page 1-2</a></li>
            <li><a id="vi" href="#">Page 1-3</a></li> --}}
          </ul>
        </li>

         <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="{{URL::Route('customer_order')}}" id="vi"><i class="fas fa-boxes"></i><span href=""> Tạo đơn hàng Giao</span><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a id="vi" href="{{URL::Route('success')}}">Tạo đơn hàng giao</a></li>
            <li><a id="vi" href="#">Danh sách đơn hàng</a></li>
            {{-- <li><a id="vi" href="#">Page 1-2</a></li>
            <li><a id="vi" href="#">Page 1-3</a></li> --}}
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="vi"><i class="fas fa-boxes"></i> Kho Hàng Ex <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a id="vi" href="#">Tổng hợp đơn hàng</a></li>
            {{-- <li><a id="vi" href="#">Page 1-2</a></li>
            <li><a id="vi" href="#">Page 1-3</a></li> --}}
          </ul>
        </li>
        <li><a href="#" id="vi"><i class="fas fa-user-cog"></i> T.T Khách Hàng</a></li>
     {{--    <li><a href="#" id="vi">Page 3</a></li> --}}
      </ul>
     
    </div>
  </div>
</nav>
	</div>
  <!-- kết thúc trái admincp-->


<!-- nội dung thêm admincp-->
	<div class="col-md-10">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2 id="vi">Danh sách đơn hàng <a href="" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Create New </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                        <thead>
                            <tr id="vi">
                                <th>id</th>
                                <th>Khách hàng</th>
                                {{-- <th>Trạng thái</th> --}}
                                <th>Nơi nhận hàng</th>
                                <th>Người liên hệ</th>
                                <th>Số điện thoại</th>
                                <th>T.gian y/c</th>
                                <th>Ghi chú</th>
                                <th>Quản lí</th>

                            </tr>
                        </thead>
                        <tbody>
                          @foreach($customer_order as $data)
                            <tr id="vi">
                                <td>{{ $data->customer_id }}</td>
                                <td>{{ $data->customer_name }}</td>
                               {{--  <td>{{ $data->customer_district }}</td> --}}
                                <td>{{ $data->customer_district }}</td>
                                <td>{{ $data->customer_name_contact }}</td>
                                <td>{{ $data->customer_number }}</td>
                                <td>{{ $data->customer_time }}</td>
                                <td>{{ $data->customer_note }}</td>
                                <td>
                                    <a href="" class="btn btn-info btn-xs"><i class="far fa-edit" title="Edit"></i> </a>
                                    <a href="" class="btn btn-danger btn-xs"><i class="far fa-trash-alt" title="Delete"></i> </a>

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
 <!-- Kết thúc Phần nội dung admin --> 