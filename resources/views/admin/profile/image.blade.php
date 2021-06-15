@extends('layouts.adminApp')

@section('adminContent')

<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Admin</a>
        <span class="breadcrumb-item active">image</span>
      </nav>

      <div class="sl-pagebody">

        <div class="row row-sm">
            <div class="body-content ">
	<div class="container">
		
       
        <div class="row justify-content-center">
        @include('admin.profile.sideMenu')
        <div class="col-md-8">
            <div class="card">
                <h3 class="text-center"><span class="text-danger">Hi...!</span> <strong class="text-warning">{{Auth::user()->name}}</strong> Update Your Profile</h3>
           
                <div class="card-body" >
                <form action="#" method="Post" enctype="multipart/form-data" >
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
        </div><!-- row -->

     

      </div><!-- sl-pagebody -->

    </div><!-- sl-mainpanel -->

@endsection

