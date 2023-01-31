@extends('admin.layout.header')
@section('title','Category Upload')
@section('content-section')
<h1 style="text-align:center;">Upload Category</h1>
<form method="POST">
    <div style="margin-left: 30%;margin-right: 30%; margin-bottom:10px;">

        <div class="form-group">
            <label for="exampleFormControlInput1">Name</label>
            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Category Name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Status</label>
            <select name="status" class="form-control" id="exampleFormControlSelect1">
                <!-- <option   disabled>Select Status</option> -->
                <option value="0">Inactive</option>
                <option value="1" selected>Active</option>
            </select>
        </div>
        <input class="btn btn-primary" type="submit" name="submit" value="Upload">
    </div>
</form>
@endsection
