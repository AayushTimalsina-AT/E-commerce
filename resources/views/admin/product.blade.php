@extends('admin.layout.header')
@section('title','Product')
@section('content-section')
<div class= "main">
    <div class= "wrapper">
        <h1>Manage Product</h1>
        </br>
        <a href="{{route('productUpload')}}" class="primarybtn">Add Product</a>
        </br></br>


        <table class="tblfull">
            <tr>
                <th>S.N</th>
                <th>Product Name</th>
                <th>image</th>
                <th>Price</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td><img src="" alt="" width="150px" height="100px" style="  border-radius:10px;" > </td>
                <td></td>
                <td></td>
                <td>
                    <a href="" class="secondarybtn"> Edit </a>
                    <a href="" class="dangerbtn">Delete</a>
                </td>
            </tr>

        </table>

    </div>
</div>
@endsection
