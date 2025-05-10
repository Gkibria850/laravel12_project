@extends('layouts.backend')
@section('content')
<div class="col-md-12 mt-4">
    <div class="card p-4">
        @include('_message')
        
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h5 class="mb-0">Add Class</h5>
        </div>
       
        <form id="itemForm" action="" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
        
            <div class="row">
                <!-- Name -->

                  <!-- Name -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="name">Name <span class="required">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$getRecord->name }}" placeholder="Enter Your Name" required>
                        <div style="color:red">{{ $errors->first('name') }}</div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="name">Subject Name <span class="required">*</span></label>
                       <select class='form-control' name='subjects_id' required>
                        <option value="">Select Subject  Name</option>
                        @foreach ($getSubjects as $value)
                      
                            <option {{($value->id == $getRecord->subjects_id) ? 'selected' : '' }} value="{{$value->id}}">{{$value->name}}</option>
                        @endforeach
                       </select>
                        <div style="color:red">{{ $errors->first('subjects_id') }}</div>
                    </div>
                </div>
        
                <!-- Email -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="email">Teacher Name <span class="required">*</span></label>
                        <select class='form-control' name='teachers_id' required>
                            <option value="">Select Teacher Name</option>
                            @foreach ($getTeachers as $value)
                           
                            <option {{($value->id == $getRecord->teachers_id) ? 'selected' : '' }} value="{{$value->id}}">{{$value->name}}</option>
                            @endforeach
                        </select>
                        <div style="color:red">{{ $errors->first('teachers_id') }}</div>
                    </div>
                </div>
        
                <!-- Phone -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="phone">Start Time <span class="required">*</span></label>
                        <input type="time" class="form-control" id="start_time" name="start_time" value="{{ $getRecord->start_time }}" placeholder="Enter start_time" required>
                        <div style="color:red">{{ $errors->first('start_time') }}</div>
                    </div>
                </div>
        
                <!-- Roll Number -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="roll_number">End Time <span class="required">*</span></label>
                        <input type="time" class="form-control" id="end_time" name="end_time" value="{{ $getRecord->end_time }}" placeholder="Enter Your Roll Number" required>
                        <div style="color:red">{{ $errors->first('end_time') }}</div>
                    </div>
                </div>
        
    
        
              
                <!-- Mother Name -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="control-label">room_number <span class="required">*</span></label>
                        <input name="room_number" type="text" value="{{ $getRecord->room_number }}" placeholder="Enter room_number" class="form-control" required />
                        <div style="color:red">{{ $errors->first('room_number') }}</div>
                    </div>
                </div>
        
                <!-- Footer Buttons -->
                <div class="panel-footer">
                    <a class="btn btn-primary" href="{{ url('superadmin/classes/list') }}">Back</a>
                    <button type="submit" class="btn btn-primary pull-right">Update</button>
                </div>
            </div>
        </form>
        
    </div>
</div>
@endsection