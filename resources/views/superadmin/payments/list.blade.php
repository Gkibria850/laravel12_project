@extends('layouts.backend')
@section('content')


<div class="container">
  

    <form method="get" action="" id="itemForm" class="d-flex flex-wrap align-items-center">
    <div class="me-2 mb-2">
        <input type="text" name="id" value="{{Request()->id}}" class="form-control" placeholder="Enter Your id"/>

    </div>
    <div class="me-2 mb-2">
        <input type="text" name="students_id" value="{{Request()->students_id}}" class="form-control" placeholder="Enter Students Name"/>

    </div>
   
    <div class="me-2 mb-2">
        <input type="text" name="classes_id" value="{{Request()->classes_id}}" class="form-control" placeholder="Enter Room Number"/>

    </div>
    <div class="me-2 mb-2">
        <input type="date" name="enrollment_date" value="{{Request()->enrollment_date}}" class="form-control" placeholder="Enter Your Name"/>

    </div>
 
    <div class="me-2 mb-2">
        <button type="submit" class="btn btn-primary">Search</button>
    </div>
    <div class="mb-2">
        <a href="{{url('superadmin/payments/list')}}" class="btn btn-warning">Reset</a>

    </div>
    </form>
</div> 

<div class="col-md-12 mt-4">
    <div class="card p-4">
        @include('_message')
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h5 class="mb-0">payments List</h5>
            <a href="{{url('superadmin/payments/add')}}" class="btn btn-success">
                <i class="fa fa-plus me-1"></i> Add Payments
            </a>
        </div>
       
        <div class="table-responsive table-hover">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Students Name</th>
                        <th scope="col">Classs Name</th>
                        <th scope="col">Father name</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Notes</th>
                        <th scope="col">payment_date</th>
                        <th scope="col">payment_method</th>
                        <th scope="col">status</th>
                        <th scope="col">Created_at</th>
                        <th scope="col">Updated_at</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
               <tbody>
                    @forelse ($getRecord as $value)
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->students_name }}</td>
                            <td>{{ $value->classes_name }}</td>
                            <td>{{ $value->father_name }}</td>
                            <td>{{ $value->amount }}</td>
                            <td>{{ date('d-m-Y', strtotime($value->payment_date)) }}</td>
                            <td>{{ $value->payment_method }}</td>
                            <td>
                                @if($value->status == 1)
                                    <span class="badge bg-success">Paid</span>
                                @else
                                    <span class="badge bg-danger">Unpaid</span>
                                @endif
                            </td>
                            <td>{{ date('d-m-Y', strtotime($value->created_at)) }}</td>
                            <td>{{ date('d-m-Y', strtotime($value->updated_at)) }}</td>
                            <td style="min-width: 120px;">
                                <a href="{{ url('superadmin/payments/edit/' . $value->id) }}" class="btn btn-sm btn-primary">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{ url('superadmin/payments/delete/' . $value->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete?');">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="11">No Record Found</td>
                        </tr>
                    @endforelse
                </tbody>

                                    
              
            </table>
            {!! $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}
        </div>  
    </div>
</div>

@endsection