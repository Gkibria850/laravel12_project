@extends('layouts.backend')
@section('content')
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
                        <td><img src="https://via.placeholder.com/150" alt="Profile Image"></td>
                        <td>{{date('d-m-Y', strtotime($value->date_of_birth))}}</td>
                        <td>{{date('d-m-Y', strtotime($value->admission_date))}}</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                            <a href="{{url('superadmin/user/delete/'.$value->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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