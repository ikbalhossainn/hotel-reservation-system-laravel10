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
                    <form class="form-horizontal">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="simpleinput">Text</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="simpleinput" value="Some text value...">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="example-email">Email</label>
                            <div class="col-sm-10">
                                <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="example-password">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="example-password" value="password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"  for="example-placeholder">Placeholder</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="example-placeholder" placeholder="placeholder">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="example-textarea">Text area</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="example-textarea" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Readonly</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" readonly="" value="Readonly value">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Disabled</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" disabled="" value="Disabled value">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="example-static">Static control</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext"  id="example-static" value="email@example.com">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="example-helping">Helping text</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="example-helping" placeholder="Helping text">
                                <span class="help-block"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Input Select</label>
                            <div class="col-sm-10">
                                <select class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                                <h6>Multiple select</h6>
                                <select multiple class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="example-fileinput">Default file input</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="example-fileinput">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="example-date">Date</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="date" id="example-date" name="date">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="example-month">Month</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="month" id="example-month" name="month">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="example-time">Time</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="time" id="example-time" name="time">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="example-week">Week</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="week" id="example-week" name="week">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="example-number">Number</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" id="example-number" name="number">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">URL</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="url" name="url">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Search</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="search" name="search">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tel</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="tel" name="tel">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="example-color">Color</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="color" id="example-color" name="color" value="#188ae2">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <label class="col-sm-2 col-form-label" for="example-range">Range</label>
                            <div class="col-sm-10">
                                <input class="custom-range" type="range" id="example-range" name="range" min="0" max="10">
                            </div>
                        </div>

                    </form>

                </div> <!-- end card-box -->
            </div><!-- end col -->
        </div>
        <!-- end row -->




    
        
    </div> <!-- container-fluid -->

</div> <!-- content -->

@endsection