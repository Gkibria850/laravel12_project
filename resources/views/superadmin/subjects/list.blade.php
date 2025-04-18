@extends('layouts.backend')
@section('content')

{{-- 
<div class="container">
  

    <form method="get" action="" id="itemForm" class="d-flex flex-wrap align-items-center">
    <div class="me-2 mb-2">
        <input type="text" name="id" value="{{Request()->id}}" class="form-control" placeholder="Enter Your id"/>

    </div>
    <div class="me-2 mb-2">
        <input type="text" name="name" value="{{Request()->name}}" class="form-control" placeholder="Enter Your Name"/>

    </div>
    <div class="me-2 mb-2">
        <input type="date" name="name" value="{{Request()->created_at}}" class="form-control" placeholder="Enter Your Name"/>

    </div>
    <div class="me-2 mb-2">
        <input type="date" name="name" value="{{Request()->updated_at}}" class="form-control" placeholder="Enter Your Name"/>

    </div>
    
    <div class="me-2 mb-2">
        <button type="submit" class="btn btn-primary">Search</button>
    </div>
    <div class="mb-2">
        <a href="{{url('superadmin/subject/list')}}" class="btn btn-warning">Reset</a>

    </div>
    </form>
</div> --}}

<div class="col-md-12 mt-4">
    <div class="card p-4">
        @include('_message')
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h5 class="mb-0">Subjects List</h5>
            <a href="{{url('superadmin/subject/add')}}" class="btn btn-success">
                <i class="fa fa-plus me-1"></i> Add Subjects
            </a>
        </div>
       
        <div class="table-responsive table-hover">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Created_at</th>
                        <th scope="col">Updated_at</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($getRecord as $value)
                    <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->name}}</td>
                        <td>{{$value->description}}</td>
                        <td>{{date('d-m-Y', strtotime($value->date_of_birth))}}</td>
                        <td>{{date('d-m-Y', strtotime($value->admission_date))}}</td>
                        <td style="min-width: 120px;">
                            <a href="{{url('superadmin/subject/edit/'.$value->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                            <a href="{{url('superadmin/subject/delete/'.$value->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete?');"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="100%">No Record Found</td>
                    </tr>
                    @endforelse
                   
                </tbody>
            </table>
            {!! $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}
        </div>  
    </div>
</div>

@endsection