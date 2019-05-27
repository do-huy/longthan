<div id="huy" class="row">
<div class="col-md-2 col-sm-2">
	<a href="{{URL::Route('master')}}"><img class="imglogo" src="{{asset('images/express.png')}}" alt=""></a>
</div>
<div class="col-md-10 col-sm-10">
  <nav class="navbar navbar-inverse">
  	<div class="container-fluid">
    	<div class="navbar-header">
      		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>                        
      		</button>
    	</div>
    	<div class="collapse navbar-collapse" id="myNavbar">
      		<ul class="nav navbar-nav">
        		<li class="active"><a href="{{URL::Route('master')}}">Trang Chủ</a></li>
        		<li><a href="{{URL::Route('price')}}">Bảng Giá</a></li>
        		<li><a href="{{URL::Route('introduce')}}">Giới Thiệu</a></li>
            {{-- <li><a href="#uudiem">Ưu Điểm</a></li> --}}
      		</ul>
      		<ul class="nav navbar-nav navbar-right">
        		<li><a href="{{URL::Route('reg')}}"><span class="glyphicon glyphicon-user"></span> Đăng Ký</a></li>
        		<li><a href="{{URL::Route('admins')}}"><span class="glyphicon glyphicon-log-in"></span> Đăng Nhập</a></li>
      		</ul>
    	</div>
  	</div>
  </nav>
</div>
</div>