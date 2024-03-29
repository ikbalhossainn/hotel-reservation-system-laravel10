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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                            <li class="breadcrumb-item active">Form Elements</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Form Elements</h4>
                </div>
            </div>
        </div>     
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="header-title">Input Types</h4>
                    {{-- here using error --}}
                    <form class="form-horizontal" method="post" action="{{route('roomtype/store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="example-fileinput">Type</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="type" id="example-fileinput">
                            </div>
                        </div>
{{-- type	price	image	max_parson --}}
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="simpleinput">Image</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="simpleinput" name="image" value="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="simpleinput">Max Person</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="simpleinput" name="max_person" value="">
                            </div>
                        </div>



                        <div class="form-group text-right mb-0">
                            <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                                Submit
                            </button>
                            <button type="reset" class="btn btn-light waves-effect">
                                Cancel
                            </button>
                        </div>

                    </form>

                </div> <!-- end card-box -->
            </div><!-- end col -->
        </div>
        <!-- end row -->

        
    </div> <!-- container-fluid -->

</div> <!-- content -->

@endsection