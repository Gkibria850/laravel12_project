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
        <input type="text" name="phone" value="{{Request()->phone}}" class="form-control" placeholder="Enter Your phone"/>

    </div>
    <div class="me-2 mb-2">
        <input type="text" name="roll_number" value="{{Request()->roll_number}}" class="form-control" placeholder="Enter Your roll_number"/>

    </div>
    <div class="me-2 mb-2">
        <input type="text" name="father_name" value="{{Request()->father_name}}" class="form-control" placeholder="Enter Your roll_number"/>

    </div>
    <div class="me-2 mb-2">
        <input type="date" name="date_of_birth" value="{{Request()->date_of_birth}}" class="form-control" placeholder="Enter Your date_of_birth"/>
    </div>
    <div class="me-2 mb-2">
        <button type="submit" class="btn btn-primary">Search</button>
    </div>
    <div class="mb-2">
        <a href="{{url('superadmin/student/list')}}" class="btn btn-warning">Reset</a>

    </div>
    </form>
</div>

<div class="col-md-12 mt-4">
    <div class="card p-4">
        @include('_message')
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h5 class="mb-0">Students List</h5>
            <a href="{{url('superadmin/student/add')}}" class="btn btn-success">
                <i class="fa fa-plus me-1"></i> Add Student
            </a>
        </div>
       
        <div class="table-responsive table-hover">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">class_id</th>
                        <th scope="col">roll_number</th>
                        <th scope="col">address</th>
                        <th scope="col">father_name</th>
                        <th scope="col">gender</th>
                        <th scope="col">Image</th>
                        <th scope="col">date_of_birth</th>
                        <th scope="col">admission_date</th>
                        
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($getRecord as $value)
                        
                    
                    <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->name}}</td>
                        <td>{{$value->email}}</td>
                        <td>{{$value->phone}}</td>
                        <td>{{$value->class_id}}</td>
                        <td>{{$value->roll_number}}</td>
                        <td>{{$value->address}}</td>
                        <td>{{$value->father_name}}</td>
                        <td>{{$value->gender}}</td>
                        <td>
                            @if (!empty($value->getProfile()))
                                <img src="{{ $value->getProfile() }}" alt="Profile Image" class="img-responsive img-thumbnail" width="50" height="50">
                            @else
                                <img src="{{ url('img/no-image.png') }}" alt="No Image Available" class="img-responsive img-thumbnail" width="50" height="50">
                            @endif
                        </td>
                        <td>{{date('d-m-Y', strtotime($value->date_of_birth))}}</td>
                        <td>{{date('d-m-Y', strtotime($value->admission_date))}}</td>
                        
                        <td style="min-width: 120px;">
                            <a href="{{url('superadmin/student/edit/'.$value->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                            <a href="{{url('superadmin/student/delete/'.$value->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete?');"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                   
                </tbody>
            </table>
            {!! $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}
        </div>  
    </div>
</div>

@endsection