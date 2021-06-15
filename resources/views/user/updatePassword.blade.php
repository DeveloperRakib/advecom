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
<div class="body-content ">
	<div class="container">
		
       
        <div class="row justify-content-center">
        @include('user.sideMenu')
        <div class="col-md-8">
            <div class="card">
                <h3 class="text-center"><span class="text-danger">Hi...!</span> <strong class="text-warning">{{Auth::user()->name}}</strong> Update Your Profile</h3>
           
                <div class="card-body" >
                
                 <form action="{{ route('change.passowrd')}}" method="Post"  >
                    @csrf
                   
                   
                    

                    <div class="form-group row">
                        <label for="colFormLabelLjjg" class=" col-form-label col-form-label-lg">Current Password</label>
                         <input type="password" class="form-control form-control-lg" id="colFormLabelLg"  name="current_pas">

                             @error('current_pas')
                     <span class="text-danger">{{ $message }}</span>
                    @enderror

                       

                    </div>

                     <div class="form-group row">
                        <label for="colFormLabelLjjg" class="col-form-label   col-form-label-lg">New Password</label>
                         <input type="password" class="form-control form-control-lg" id="colFormLabelLg"  name="new_pas">

                           @error('new_pas')
                     <span class="text-danger">{{ $message }}</span>
                    @enderror

                    </div>

                     <div class="form-group row">
                        <label for="colFormLabelLjjg" class=" col-form-label col-form-label-lg">Confrim Password</label>
                         <input type="password" class="form-control form-control-lg" id="colFormLabelLg"  name="confirm_pas">
                      @error('confirm_pas')
                     <span class="text-danger">{{ $message }}</span>
                    @enderror


                    </div>
                  

                     <div class="form-group row">
                        <button type="submit" name="update_pas" class="btn btn-danger">Update Passord</button>
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










