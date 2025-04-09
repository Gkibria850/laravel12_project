@extends('layouts.backend')
@section('content')
<div class="container">
  

    <form method="get" action="" id="itemForm" class="d-flex flex-wrap align-items-center">
    <div class="me-2 mb-2">
        <input type="text" name="id" value="{{Request()->id}}" class="form-control" placeholder="Enter Your id"/>

    </div>
    <div class="me-2 mb-2">
        <input type="text" name="name" value="{{Request()->name}}" class="form-control" placeholder="Enter Your Name"/>

    </div>
    <div class="me-2 mb-2">
        <input type="email" name="email" value="{{Request()->email}}" class="form-control" placeholder="Enter Your Email"/>

    </div>
    <div class="me-2 mb-2">
        <input type="date" name="created_at" value="{{Request()->created_at}}" class="form-control" placeholder="Enter Your created_at"/>
    </div>
    <div class="me-2 mb-2">
        <button type="submit" class="btn btn-primary">Search</button>
    </div>
    <div class="mb-2">
        <a href="{{url('superadmin/user/list')}}" class="btn btn-warning">Reset</a>

    </div>
    </form>
</div>
<div class="col-md-12 mt-4">
    <div class="card p-4">
        @include('_message')
        <h5 class="mb-3">User List</h5>
        <div class="table-responsive table-hover">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Image</th>
                        <th scope="col">created_at</th>
                        <th scope="col">updated_at</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($getRecord as $value)
                        
                    
                    <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->name}}</td>
                        <td>{{$value->email}}</td>
                        <td><img src="https://via.placeholder.com/150" alt="Profile Image"></td>
                        <td>{{date('d-m-Y', strtotime($value->created_at))}}</td>
                        <td>{{date('d-m-Y', strtotime($value->updated_at))}}</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                            <a href="{{url('superadmin/user/delete/'.$value->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                   
                </tbody>
            </table>
        </div>  
    </div>
</div>

@endsection