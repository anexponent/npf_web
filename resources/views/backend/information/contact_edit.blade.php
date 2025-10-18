@extends('backend.admin_master')
@section('admin')
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit and Delete PROS Contacts </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            {{-- Alert Message --}}
              @if(session()->has('error'))
                <div class="alert alert-warning">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('error')}}
                </div>
              @endif
            {{-- Alert Message Ends--}}

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="card">
                                                        
                    <div class="card-header">
                    <a href="{{ route('contact.view')}}" class="btn btn-danger float-end">BACK</a>
    
                    </div>
                                                 
                    <form action="{{ route('update.contact',$contact->id)}}" method="post">
                        @csrf


                        <div class="input-group mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Rank</label>
                        <input type="text" name="rank"  class="form-control" required value="{{$contact->rank}}" >
                            </div>
                        
                        
                        <div class="input-group mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Full name</label>
                        <input type="text" name="name" class="form-control" required value="{{$contact->name}}">
                        </div>

                       
                        <div class="input-group mb-3">
                        <label for="designation" class="col-sm-2 col-form-label">Designation</label>
                        <input type="text" name="designation"  class="form-control" required value="{{$contact->designation}}">
                        </div>
                        

                        <div class="input-group mb-3">
                        <label for="input-phone" class="col-sm-2 col-form-label">Phone Number</label>
                        <input type="text" name="phone_number"  class="form-control" required value="{{$contact->phone_number}}">
                        </div>

                       
                        
                            <button type="submit" class="btn btn-primary .btn-sm">Update</button>
                    
                    </form>
                
                    </div>
                   
             </div><!-- /.container-fluid -->
            </section>
            <!-- /.Main content Ends-->
        </div>
@endsection
