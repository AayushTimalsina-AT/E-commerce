@extends('admin.layout.header')
@section('title','Admin Home')
@section('content-section')
    <div class= "main">
        <div class= "wrapper">
            <h1>Manage Category</h1>
            </br>
            <a href="{{route('categoryUpload')}}" class="primarybtn">Add category</a>
            </br></br>


            <table class="tblfull">
                <tr>
                    <th>S.N</th>
                    <th>Category Name</th>
                    <!-- <th>slug</th> -->
                    <th>status</th>
                    <th>Actions</th>
                </tr>

            </table>

        </div>
    </div>
@endsection
