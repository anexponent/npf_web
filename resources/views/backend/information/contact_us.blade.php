@extends('backend.admin_master')
@section('admin')
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->

            {{-- Alert Message --}}
              @if(session()->has('error'))
                <div class="alert alert-warning">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('error')}}
                </div>
              @endif
            {{-- Alert Message Ends--}}
                  
     
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
            <div class="container-fluid">
    <form action ="{{route('store.message')}}" method="post" enctype="multi-part/form-data">
  <div class="mb-3">
     @csrf
     <div class="input-group">
     <div class="col-sm-2 col-form-label"></div>
     @error('name')
    <span class="text-danger">{{ $message}}</span>
     @enderror
</div>
    <label for="fornname" class="form-label">Rank</label>
    <input type="text" class="form-control" name="rank" id="rank" aria-describedby="rakHelp" placeholder="Rank" required>
  </div>
  <div class="mb-3">
    <label for="forrank" class="form-label">Full Name</label>
    <input type="text" class="form-control" id="name" name="name"placeholder="Full Name" required value="">
  </div>
  <div class="mb-3">
  <div class="input-group">
     <div class="col-sm-2 col-form-label"></div>
     @error('designation')
    <span class="text-danger">{{ $message}}</span>
     @enderror
</div>
    <label for="fordesination" class="form-label">Designation</label>
    <input type="text" class="form-control" id="rank" name="designation" placeholder="Designation" required value="">
  </div>
   <div class="input-group">
     <div class="col-sm-2 col-form-label"></div>
     @error('phone_number')
    <span class="text-danger">{{ $message}}</span>
     @enderror
</div>
  <div class="mb-3">
    <label for="forphonumber" class="form-label">Phone Number</label>
    <input type="text" class="form-control" id="phone" name="phone_number"  placeholder="Phone Number" required value="">
  </div>
                
  <button type="submit" class="btn btn-primary">Add</button>
</form>

                      
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
@endsection
