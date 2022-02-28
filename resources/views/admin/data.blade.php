@extends('layouts.adminapp')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <div class="content mt-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Form Requests</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    
                                    @foreach ($data as $value)
                                        <div class="col-md-4 col-12">
                                            <div class="dataCard card">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between">
                                                        <h5 class="card-title"><b>Name: </b>{{ $value->name }}</h5>
                                                        <span class="card-subtitle text-muted small">
                                                            {{ $value->created_at->diffForHumans() }}
                                                        </span>
                                                    </div>
                                                    <hr>
                                                    <p class="m-0"><b>Email: </b>{{ $value->email }}</p>
                                                    <hr>
                                                    <p class="m-0">
                                                        <b>Address</b><br>
                                                        {{ $value->address }}
                                                    </p>
                                                    <hr>
                                                    <p class="m-0"><b>Vaccine Name: </b>{{ $value->vaccine->name }}</p>
                                                    <hr>
                                                    <a href="#" class="btn btn-secondary">Download As Pdf</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    {{ $data->links() }}

                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
