@extends('layouts.adminApp')

@section('adminContent')

<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Admin</a>
        <span class="breadcrumb-item active">Profile</span>
      </nav>

      <div class="sl-pagebody">

        <div class="row row-sm">
          <div class="container">
		
       
        <div class="row justify-content-center">
            
         @include('user.sideMenu')

        <div class="col-md-8">
            <div class="card">
                <h3 class="text-center"><span class="text-danger">Hi...!</span> <strong class="text-warning">{{Auth::user()->name}}</strong> Update Your Profile</h3>
            <div class="card-body" >
                <form action="{{ route('profile.update')}}" method="Post">
                    @csrf
                    <div class="form-group row">
                        <label for="colFormLabelLg" class="col-md-2 col-form-label col-form-label-lg">Name</label>
                        <div class="col-md-10">
                           <input type="text" class="form-control form-control-lg" id="colFormLabelLg" placeholder="col-form-label-lg" name="name" value="{{Auth::user()->name}}">

                           @error('name')
                            <span class="text-danger">{{$message}}</span>
                           @enderror
                        </div>

                    </div>
                     <div class="form-group row">
                        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
                        <div class="col-sm-10">
                           <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="col-form-label-lg" name="email" value="{{Auth::user()->email}}" >
                            @error('email')
                            <span class="text-danger">{{$message}}</span>
                           @enderror
                        </div>
                    </div>
                     <div class="form-group row">
                        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Phone</label>
                        <div class="col-sm-10">
                           <input type="number" class="form-control form-control-lg" id="colFormLabelLg" placeholder="col-form-label-lg" name="phone" value="{{Auth::user()->phone}}">
                            @error('phone')
                            <span class="text-danger">{{$message}}</span>
                           @enderror
                        </div>
                    </div>

                     <div class="form-group row">
                        <button type="submit" name="update" class="btn btn-danger">Update</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
        </div>
       



		
	</div>
        </div><!-- row -->

     

      </div><!-- sl-pagebody -->

    </div><!-- sl-mainpanel -->

@endsection

