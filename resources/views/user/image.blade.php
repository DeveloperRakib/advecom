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
                <form action="{{ route('image.change')}}" method="Post" enctype="multipart/form-data" >
                    @csrf
                    <input type="hidden" name="old_image" value="{{Auth::user()->image}}">
                    <div class="form-group row">
                        <label for="colFormLabelLjjg" class="col-md-2 col-form-label col-form-label-lg">Name</label>
                        <div class="col-md-10">
                           <input type="file" class="form-control form-control-lg" id="colFormLabelLg" placeholder="col-form-labejjl-lg" name="image">

                           
                        </div>

                    </div>
                  

                     <div class="form-group row">
                        <button type="submit" name="upload" class="btn btn-danger">Upload</button>
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










