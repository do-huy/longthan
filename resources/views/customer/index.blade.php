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
  <!-- kết thúc Content trái admincp-->

  <!--Phần nội dung admin --> 
  <!--kết thúc Content trái admincp-->

    <!--Phần nội dung admin --> 
<!-- kết thúc trái admincp-->

<!-- nội dung thêm admincp-->
</nav>
	</div>
	<div class="col-md-10">
		<p id="vi"> <i class="fas fa-folder-plus"></i> Tạo đơn lấy hàng</p>
    
    <div class="container">
  <img id="footerimg" src="{{asset('images/footerimg.png')}}" alt="">
  </div>

  			@if(session('addcustomerorder'))
        		<div class="alert alert-success">
            		{{ session('addcustomerorder') }}
        		</div>
      		@endif

		<div class="col-md-6">
			<p id="ngadmin">  <i class="fas fa-user-injured"></i>  Khách hàng</p>

		

			<form action="/customer/order/add" method="post" accept-charset="utf-8">

			<div class="form-group">
				{{ csrf_field() }}
				<label id="ngadmin"> Tên khách hàng</label>
				<input type="name" name="customer_name" value="{{ Auth::user()->name }}" class="form-control"/>
			</div>
      
			       <div class="form-group">
                <label id="login" for="title">Chọn tỉnh thành</label>
                <select name="customer_province" value="text" id="province" class="form-control">
                  @if($province_data)
                  @foreach($province_data as $key => $value)
                	  <option value="{{$value->province_id}}" name="customer_province">{!! $value->province_name !!}</option> 
                  @endforeach
                  @endif
                </select>
            </div>
            <div class="form-group">

                <label id="login" for="title">Chọn quận huyện</label>
                <select name="customer_district" id="district" class="form-control" >
                	  <option value="" selected disabled>{{Auth::user()->district_users_name }}
                	  </option>
                </select>
            </div>
            <div class="form-group">
                <label id="login" for="title">Chọn phường xã</label>
                <select name="customer_ward" id="ward" class="form-control" >
                	  <option value="" selected disabled>{{Auth::user()->ward_users_name }}</option>
                </select>
            </div>
             <div class="form-group">
    		<label id="login" for="exampleFormControlTextarea1">Địa chỉ</label>
    		<textarea name="customer_address" class="form-control" id="exampleFormControlTextarea1" rows="3" >{{Auth::user()->user_address }}</textarea>
  			</div>
		</div>
	
		<div class="col-md-6">
			<p id="login"> <i class="fas fa-mobile"></i> Liên Hệ</p>
			<div class="form-group">
				<label id="login">Tên người liên hệ</label>
				<input type="name" name="customer_name_contact" class="form-control" />
			</div>
			<div class="form-group">
				<label id="login">Số điện thoại</label>
				<input type="text" name="customer_number" value="{{ Auth::user()->users_number }}" class="form-control" />
			</div>
  			 <div class="form-group">
    		<label id="login" for="exampleFormControlTextarea1">Ghi chú</label>
    		<textarea name="customer_note" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  			</div>
  			<div class="form-group">			
				<input type="submit" name="add_customer_order" class="btn btn-primary" value="Tạo đơn hàng" />
			</div>
		</form>

  				
		</div>
	</div>
</div>
 <!-- Kết thúc Phần nội dung admin --> 