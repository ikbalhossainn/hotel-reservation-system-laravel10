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
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>

                        <tbody>

                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- end row -->

        


    </div> <!-- container-fluid -->

</div> <!-- content -->

@endsection