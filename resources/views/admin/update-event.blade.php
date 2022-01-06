@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">{{$page}}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">{{$page}}</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">{{$page}}</h3>
                  </div>
                  <!-- /.card-header -->
          
                            <!-- form start -->
                  <form role="form" method="POST" action="{{route('admin.event.update', $event->id)}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="card-body">
                    
                     
                      <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="event_name">Event Title</label>
                                <input type="text" name="title" value="{{$event->title}}" class="form-control"  autocomplete="off" required>
                                                                       
                            </div>

                            <div class="form-group">
                                <label for="event_name">Event Date</label>
                                <input type="date" name="date" value="{{$event->date}}" class="form-control"  autocomplete="off" required>
                                                                       
                            </div>
                            <div class="form-group">
                                <label for="desc">Description</label>
                                <textarea name="desc"  class="form-control" id="editor">{{$event->desc}}</textarea>
                                                
                                </div>

                        
                       
                      </div>
                       
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                  </form>
                  
                </div>

            </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection