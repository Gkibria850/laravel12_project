@extends('layouts.backend')

@section('content')
<div class="col-md-12 mt-4">
    <div class="card p-4">
        @include('_message')

        <div class="d-flex align-items-center justify-content-between mb-3">
            <h5 class="mb-0">Edit Enrollments</h5>
        </div>

        <form action="" method="POST">
            @csrf

            <div class="row">
                <!-- Student Name -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label>Student Name <span class="text-danger">*</span></label>
                        <select class="form-control" name="students_id" required>
                            <option value="">Select Student Name</option>
                            @foreach ($getStudents as $value)
                            <option {{($value->id == $getRecord->students_id) ? 'selected' : '' }} value="{{$value->id}}">{{$value->name}}</option>
                                
                            @endforeach
                        </select>
                        <div class="text-danger">{{ $errors->first('students_id') }}</div>
                    </div>
                </div>

                <!-- Class Name -->
               <div class="col-md-6">
                    <div class="mb-3">
                        <label for="classes_id">Class Name <span class="text-danger">*</span></label>
                        <select class="form-control" id="classes_id" name="classes_id" required>
                            <option value="">Select Class Name</option>
                            @foreach ($getClasses as $value)
                                <option {{($value->id == $getRecord->classes_id) ? 'selected' : '' }} value="{{$value->id}}">{{$value->room_number}}</option>
                            @endforeach
                        </select>
                        <div class="text-danger">{{ $errors->first('classes_id') }}</div>
                    </div>
                </div>
                <!-- Enrollment Date -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label>Enrollment Date <span class="text-danger">*</span></label>
                        <input type="date" class="form-control" name="enrollment_date" value="{{ $getRecord->enrollment_date }}" required>
                        <div class="text-danger">{{ $errors->first('enrollment_date') }}</div>
                    </div>
                </div>
            </div>

            <!-- Footer Buttons -->
            <div class="mt-3">
                <a class="btn btn-secondary" href="{{ url('superadmin/enrollments/list') }}">Back</a>
                <button type="submit" class="btn btn-primary float-end">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection