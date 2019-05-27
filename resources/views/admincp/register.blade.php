<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('style/style.css')}}">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="http://www.codermen.com/js/jquery.js"></script>
	<title>VDTexpress Register</title>
</head>
<body id="bodysss">
	<div style="max-width: 550px" class="container">
    <div class="panel panel-default">
      <p id="imgregister"><img id="imglogin" src="{{asset('images/vdtgroup.png')}}" alt=""></p>
      <div id="imgregister" class="panel-heading"><b id="login">Đăng ký làm khách hàng với VDTexpress</b></div>
      
      @if(session('thongbao'))
        <div class="alert alert-success">
            {{ session('thongbao') }}
        </div>
      @endif

      <form action="/insert/register" method="post" accept-charset="utf-8">  
     
      <div class="panel-body">
      <div class="form-group">
        {{ csrf_field() }}
				<label id="login">Tên khách hàng</label>
				<input type="name" name="name" class="form-control" />
			</div>
			<div class="form-group">
				<label id="login">Số điện thoại</label>
				<input type="mobile" name="users_number" class="form-control" />
			</div>
      <div class="form-group">
        <label id="login">Mật khẩu</label>
        <input type="password" name="password" class="form-control" />
      </div>
			<div class="form-group">
				<label id="login">Email</label>
				<input type="email" name="email" class="form-control" />
			</div>
            <div class="form-group">
            	 <label id="login" for="title">Chọn tỉnh thành</label>
                <select id="province" name="province_users_name" class="form-control" style="height: 40px;" >
                <option value="" selected disabled>Chọn tỉnh thành</option>
                  @foreach($province_list as $province)
                  <option value="{{$province->province_id}}">{{$province->province_name}}</option>
                  @endforeach
                  </select>
            </div>
            <div class="form-group">
                <label id="login" for="title">Chọn quận huyện</label>
                <select name="district_users_name" id="district" class="form-control">
                	  <option value="" selected disabled>Chọn quận huyện</option>
                </select>
            </div>
             <div class="form-group">
                <label id="login" for="title">Chọn phường xã</label>
                <select name="ward_users_name" id="ward" class="form-control">
                	  <option value="" selected disabled>Chọn phường xã</option>
                </select>
            </div>
            <div class="form-group">
    		<label id="login" for="exampleFormControlTextarea1">Địa chỉ</label>

    		<textarea name="user_address" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  			</div>

  			<div class="form-group">			
				<input type="submit" name="btn" class="btn btn-primary" value="Tạo khách hàng" />
        <a href="{{URL::Route('admins')}}"><span id="relogin" class=""><i class="fas fa-sign-in-alt"></i> Đăng nhập</span></a>
			</div>
          </form>
      </div>
    </div>
</div>
<script type="text/javascript">

  $(document).ready(function()
  {
      $('#province').on('change', function() {
      	console.log('change');
          var province_listID = $(this).val();
          if(province_listID) {
              $.ajax({
                  url: '/get-state-list/'+province_listID,
                  type: "GET",
                  dataType: "json",
                  success:function(data) {                      
                      $('select[name="district_users_name"]').empty();
                      $.each(data, function(key, data) {
                          $('select[name="district_users_name"]').append('<option value="'+ data['district_id'] +'">'+ data['district_name'] +'</option>');
                      });
                  }
              });
          }else{
              $('select[name="district"]').empty();
          }
      });
  });


$(document).ready(function()
  {
      $('#district').on('change', function() {
        console.log('change');
          var district_listID = $(this).val();
          if(district_listID) {
              $.ajax({
                  url: '/get-ward-list/'+district_listID,
                  type: "GET",
                  dataType: "json",
                  success:function(data) {                      
                      $('select[name="ward_users_name"]').empty();
                      $.each(data, function(key, data) {
                          $('select[name="ward_users_name"]').append('<option value="'+ data['ward_id'] +'">'+ data['ward_name'] +'</option>');
                      });
                  }
              });
          }else{
              $('select[name="ward"]').empty();
          }
      });
  });


</script>

</body>
</html>