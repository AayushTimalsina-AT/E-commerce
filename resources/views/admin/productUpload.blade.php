@extends('admin.layout.header')
@section('title','Product Upload')
@section('content-section')

    <center>
        <h1> Product Uploads</h1>
    </center>
    <div style="margin-left: 30%;margin-right: 30%; margin-bottom:10px;">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="formGroupExampleInput">Product Name</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="productname"  placeholder="Product Name">
            </div>
            <div class="form-group">
                <label for="">Product Image</label> <br>
                <input type="file" name="Productimage">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Product price</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="price" placeholder="Product Price">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput2" >Category</label>
                <select name="category" id="" class="form-control">
                    <option value="">Select Category</option>

                </select>
            </div>
            <input class="btn btn-primary" type="submit" name="btnSubmit" value="Upload"> </form>
    </div>


@endsection
