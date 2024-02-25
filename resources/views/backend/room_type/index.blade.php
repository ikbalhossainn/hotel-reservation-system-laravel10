@extends('backend.layouts.app')

@section('content')
         
<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">
        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Greeva</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                            <li class="breadcrumb-item active">Data Tables</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Data Tables</h4>
                </div>
            </div>
        </div>     
        <!-- end page title -->
        
        


        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="header-title">Buttons example</h4>
                    <div class="input-group-append">
                        <a href="">
                            <button class="btn btn-info waves-effect waves-light" type="button">Add Room Type</button>
                        </a>

                        {{-- here useing successed msg --}}
                    </div><br>

                    <table id="" class="table table-striped table-bordered dt-responsive nowrap">
                        {{-- table id="datatable-buttons" hide <th>Action</th> --}}

                        <thead>
                            <tr>
                                <th>#SL</th>
                                <th>Type</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Max Person</th>
                                <th>Action</th>
                            </tr>
                            {{-- type	price	image	max_parson --}}
                        </thead>

                        <tbody>
                            @foreach($roomtypes as $key=>$roomtype)

                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$roomtype->type}}</td>
                            <td>Edinburgh</td>
                            <td>{{$roomtype->max_person}}</td>
                            <td>
                                <a href="{{route}}">Edit</a>

                                <a href="#">Delete</a>
                            </td>
                            
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- end row -->

        


    </div> <!-- container-fluid -->

</div> <!-- content -->

@endsection