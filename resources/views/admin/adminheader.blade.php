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