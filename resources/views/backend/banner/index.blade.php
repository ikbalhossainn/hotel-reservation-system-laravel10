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
                            <button class="btn btn-info waves-effect waves-light" type="button">Add Banner</button>
                        </a>

                        {{-- here useing successed msg --}}
                    </div><br>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>#SL</th>
                                <th>Banner Image</th>
                                <th>Banner Name</th>
                                <th>Publish Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        {{-- banner_src', 'alt_text', 'publish_status --}}
                        <tbody>
                            @foreach ($banners as $key=>$banner )
                            <td>{{++$key}}</td>
                            <td><img src="{{asset('banner/' .$banner->banner_src)}}" alt="{{$banner->alt_text}}"  width="50px" height="50px"></td>
                            <td>{{$banner->alt_text}}</td>
                            <td>{{$banner->publish_status}}</td>
                            <td>
                                <a class="btn btn-secondary" href="{{route('banner/edit', $banner->id)}}"><i class="bi bi-pencil-square">Edit</i></a>

                                <a class="btn btn-danger" href="{{route('banner/delete', $banner->id)}}" onclick="return confirm('Are you sure to delete')"><i class="bi bi-trash">Delete</i></a>
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