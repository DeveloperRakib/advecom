<div class="col-md-4">
	<div class="card" style="width: 20rem;">
		<img class="card-img-top" height="100%" width="100%" style="border-radius: 50%"   src="{{asset(Auth::user()->image)}}" alt="Card image cap">
			<a href="#" class="btn btn-primary btn-block ">Home</a>
			<a href="{{route('user.image')}}" class="btn btn-info btn-block ">Image Update</a>
			<a href="{{ route('update.passowrd') }}" class="btn btn-primary btn-block ">Update Password</a>
			<a class="btn btn-primary btn-block " href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
				<i class="icon ion-power"></i> Logout
			</a>
			<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                            </form>
		</div>
	</div>