@extends('layouts.fontendApp')

 @section('content')
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Home</a></li>
				<li class='active'>Login</li>
			</ul>
		</div>
		<!-- /.breadcrumb-inner -->
	</div>
	<!-- /.container -->
</div>
<!-- /.breadcrumb -->
<div class="body-content">
	<div class="container">
		
       
        <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card" style="width: 20rem;">
                <img class="card-img-top" height="100%" width="100%" style="border-radius: 50%"   src="{{asset('img')}}/rana.jpg" alt="Card image cap">  
                <a href="#" class="btn btn-primary btn-block ">Go somewhere</a>
                <a href="#" class="btn btn-info btn-block ">Go somewhere</a>
                <a href="#" class="btn btn-primary btn-block ">Go somewhere</a>
                <a href="#" class="btn btn-danger btn-block ">Go somewhere</a>
            
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <h3 class="text-center"><span class="text-danger">Hi...!</span> <strong class="text-warning">{{Auth::user()->name}}</strong> Update Your Profile</h3>
            <div class="card-body">
                <form action="" method="get">
                      <div class="form-group row">
                        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
                        <div class="col-sm-10">
                        <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="col-form-label-lg">
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
        </div>
       



		
	</div>
	<!-- /.container -->
</div>
<!-- /.body-content -->
@endsection