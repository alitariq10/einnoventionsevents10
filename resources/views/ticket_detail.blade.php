@extends('tickets.layouts.app')
@section('content')
@if(Session::has('flash_message_error'))
 <div class="alert alert-sm alert-danger alert-block" role="alert">
     <button type="button" class="close" data-dismiss='alert' aria-label="Close">
         <span aria-hidden="true">&times;</span>
     </button>
     <strong>{!! session('flash_message_error') !!}</strong>
 </div>
@endif
@if(Session::has('flash_message_success'))
<div class="alert alert-sm alert-success alert-block" role="alert">
 <button type="button" class="close" data-dismiss='alert' aria-label="Close">
     <span aria-hidden="true">&times;</span>
 </button>
 <strong>{!! session('flash_message_success') !!}</strong>
</div>
@endif


<section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-2 col-sm-2">

            </div>
            <div class="col-md-8 col-sm-8">
              <!-- jquery validation -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Book Ticket <small></small></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="quickForm" action="{{url('/buy-ticket')}}" method="post" enctype="multipart/form-data">
                    @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">First Name</label>
                      <input type="text" name="firstname" class="form-control" id="name" placeholder="Enter Your First Name" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Last Name</label>
                      <input type="text" name="lastname" class="form-control" id="lname" placeholder="Enter Your Last Name" required>
                    </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" name="email" class="form-control" id="email" placeholder="Enter Your Email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Phone</label>
                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter Phone Number">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Gender</label>
                        
                        <select name="gender" class="form-control" id="gender">
                          <option value="">Select Gender</option>
                          <option value="mr">Mr</option>
                          <option value="mrs">Mrs</option>
                        </select>
                      </div>
                      <div class="form-group">
                      <button type="submit" class="btn btn-primary" style= "background: red;" >Submit</button>
                      </div>
                  </div>
                  <!-- /.card-body -->
                  
                </form>
              </div>
              <!-- /.card -->
              </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-2 col-sm-2">

            </div>
            <!--/.col (right) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>

@endsection
