@extends('admin.layouts.master')
@section('title', 'create section')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Add Student</strong>
            </div>
            <div class="card-body card-block">
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Code</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="code" placeholder="Code"
                                class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">name</label></label>
                        </div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="name" placeholder="Name"
                                class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">phone</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="phone"
                                placeholder="Phone" class="form-control"><small class="form-text text-muted">This is a help
                                text</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">age</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="age"
                                placeholder="Gender" class="form-control"><small class="form-text text-muted">This is a help
                                text</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Degree</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="degree"
                                placeholder="Degree" class="form-control"><small class="form-text text-muted">This is a help
                                text</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">phone</label></div>
                        <div class="col-12 col-md-9"><input type="file" id="text-input" name="image"
                                placeholder="Phone" class="form-control"><small class="form-text text-muted">This is a help
                                text</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class=" form-control-label">Department</label></div>
                        <div class="col-12 col-md-9">
                            <select name="department" id="select" class="form-control">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm" name="add">
                            <i class="fa fa-dot-circle-o"></i> Add
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i> Reset
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
