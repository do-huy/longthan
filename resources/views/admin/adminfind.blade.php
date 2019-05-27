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
	<div class="col-md-10">
		<p id="vi"> <i class="fas fa-folder-plus"></i> Tạo đơn hàng / Tạo bill</p>
    
    <div class="container">
  <img id="footerimg" src="{{asset('images/footerimg.png')}}" alt="">
  </div>

		<div class="col-md-4">
			<p id="ngadmin">  <i class="fas fa-user-injured"></i>  Người gửi</p>
			<div class="form-group">
				<label id="ngadmin"> Tên người gửi</label>
				<input type="name" name="name" value="{{ Auth::user()->name }}" class="form-control" disabled="" />
			</div>
			<div class="form-group">
				<label id="login">Số điện thoại</label>
				<input type="text" name="text	" value="{{ Auth::user()->users_number }}" class="form-control" disabled />
			</div>
			<div class="form-group">
                <label id="login" for="title">Chọn tỉnh thành</label>
                <select name="district" id="district" class="form-control" disabled="">
                	  <option value="" selected disabled>{{Auth::user()->province_users_name }}</option>
                    
                </select>
            </div>
            <div class="form-group">
                <label id="login" for="title">Chọn quận huyện</label>
                <select name="district" id="district" class="form-control" disabled="">
                	  <option value="" selected disabled>{{Auth::user()->district_users_name }}</option>
                </select>
            </div>
            <div class="form-group">
                <label id="login" for="title">Chọn phường xã</label>
                <select name="district" id="district" class="form-control" disabled="">
                	  <option value="" selected disabled>{{Auth::user()->ward_users_name }}</option>
                </select>
            </div>
             <div class="form-group">
    		<label id="login" for="exampleFormControlTextarea1">Địa chỉ</label>
    		<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled="">{{Auth::user()->user_address }}</textarea>
  			</div>
		</div>
		<div class="col-md-4">
			<p id="login"> <i class="fab fa-servicestack"></i> Dịch vụ</p>
			<div class="radio">
  			<label class="checkbox-inline"><input type="checkbox" value="">Chuyển phát nhanh</label>
			</div>

			<div class="form-group">
				<label id="login">Khối lượng (kg)</label>
				<input type="name" name="name" class="form-control" />
			</div>
        <div class="form-group">
        <label id="login">Tiền cước</label>
        <input type="name" name="name" class="form-control" />
      </div>
			<div class="form-group">
				<label id="login">Tiền COD (vnd)</label>
				<input type="name" name="name" class="form-control" />
			</div>
			<div class="form-group">
				<label id="login">Tiền tạm ứng (vnd)</label>
				<input type="name" name="name" class="form-control" />
			</div>
			<label id="login">Yêu cầu khi phát</label>
			<div class="radio">
  <label><input type="radio" name="optradio" checked>Không xem</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio">Cho xem</label>
</div>
<div class="radio disabled">
  <label><input type="radio" name="optradio" >Cho thử hàng</label>
</div>

<label id="login">Hình thức trả phí</label>
			<p><label class="checkbox-inline"><input type="checkbox" value="">Người gửi</label></p>
<p><label class="checkbox-inline"><input type="checkbox" value="">Người nhận</label></p>
<div class="form-group">
				<label id="login">Tổng cước thanh toán</label>
				<input type="name" name="name" class="form-control" />
			</div>
			<div class="form-group">			
				<input type="submit" name="register" class="btn btn-primary" value="Tạo đơn hàng" />
			</div>


		</div>
		<div class="col-md-4">
			<p id="login"> <i class="fas fa-people-carry"></i> Người nhận</p>
			<div class="form-group">
				<label id="login">Tên người gửi</label>
				<input type="name" name="name" class="form-control" />
			</div>
			<div class="form-group">
				<label id="login">Số điện thoại</label>
				<input type="text" name="text	" class="form-control" />
			</div>
			<div class="form-group">
                <label id="login" for="title">Chọn tỉnh thành</label>
                <select name="district" id="district" class="form-control">
                	  <option value="" selected disabled>Chọn tỉnh thành</option>
                </select>
            </div>
            <div class="form-group">
                <label id="login" for="title">Chọn quận huyện</label>
                <select name="district" id="district" class="form-control">
                	  <option value="" selected disabled>Chọn quận huyện</option>
                </select>
            </div>
            <div class="form-group">
                <label id="login" for="title">Chọn phường xã</label>
                <select name="district" id="district" class="form-control">
                	  <option value="" selected disabled>Chọn phường xã</option>
                </select>
            </div>
             <div class="form-group">
    		<label id="login" for="exampleFormControlTextarea1">Địa chỉ</label>
    		<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  			</div>

  			  <div class="form-group">
    		<label id="login" for="exampleFormControlTextarea1">Ghi chú</label>
    		<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  			</div>

  				
		</div>
	</div>
</div>