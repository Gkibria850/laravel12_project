@extends('layouts.backend')
@section('content')
<div class="col-md-12 mt-4">
    <div class="card p-4">
        @include('_message')
        
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h5 class="mb-0">Edit/Update Student</h5>
        </div>
       
        <form id="itemForm" action="" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
        
            <div class="row">
                <!-- Name -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="name">Name <span class="required">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$getRecord->name }}" placeholder="Enter Your Name" required>
                        <div style="color:red">{{ $errors->first('name') }}</div>
                    </div>
                </div>
        
                <!-- Email -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="email">Email <span class="required">*</span></label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $getRecord->email }}" placeholder="Enter Your Email" required>
                        <div style="color:red">{{ $errors->first('email') }}</div>
                    </div>
                </div>
        
                <!-- Phone -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="phone">Phone <span class="required">*</span></label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{ $getRecord->phone }}" placeholder="Enter Your Phone" required>
                        <div style="color:red">{{ $errors->first('phone') }}</div>
                    </div>
                </div>
        
                <!-- Roll Number -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="roll_number">Roll Number <span class="required">*</span></label>
                        <input type="text" class="form-control" id="roll_number" name="roll_number" value="{{ $getRecord->roll_number }}" placeholder="Enter Your Roll Number" required>
                        <div style="color:red">{{ $errors->first('roll_number') }}</div>
                    </div>
                </div>
        
                <!-- Current Address -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="control-label">Address <span class="required">*</span></label>
                        <textarea name="address" class="form-control" placeholder="Enter Your Current Address" required>{{ $getRecord->address }}</textarea>
                        <div style="color:red">{{ $errors->first('address') }}</div>
                    </div>
                </div>
        
                <!-- Permanent Address -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="control-label">Permanent Address <span class="required">*</span></label>
                        <textarea name="permanent_address" class="form-control" placeholder="Enter Your Permanent Address" required>{{ $getRecord->permanent_address }}</textarea>
                        <div style="color:red">{{ $errors->first('permanent_address') }}</div>
                    </div>
                </div>
        
                <!-- Status -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="control-label">Status <span class="required">*</span></label>
                        <select class="form-control" name="status" required>
                            <option {{($getRecord->status == 1) ? 'selected' : ''}} value="1">Active</option>
                            <option value="0" {{($getRecord->status == 0) ? 'selected' : ''}} value="1">Inactive</option>
                        </select>
                        <div style="color:red">{{ $errors->first('status') }}</div>
                    </div>
                </div>
        
                <!-- Blood Group -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="control-label">Blood Group <span class="required">*</span></label>
                        <input name="blood_group" type="text" value="{{ $getRecord->blood_group }}" placeholder="Enter Your Blood Group" class="form-control" required />
                        <div style="color:red">{{ $errors->first('blood_group') }}</div>
                    </div>
                </div>
        
                <!-- Father Name -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="control-label">Father Name <span class="required">*</span></label>
                        <input name="father_name" type="text" value="{{$getRecord->father_name }}" placeholder="Enter Your Father Name" class="form-control" required />
                        <div style="color:red">{{ $errors->first('father_name') }}</div>
                    </div>
                </div>
        
                <!-- Mother Name -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="control-label">Mother Name <span class="required">*</span></label>
                        <input name="mother_name" type="text" value="{{ $getRecord->mother_name }}" placeholder="Enter Your Mother Name" class="form-control" required />
                        <div style="color:red">{{ $errors->first('mother_name') }}</div>
                    </div>
                </div>
        
                <!-- Date of Birth -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="control-label">Date of Birth <span class="required">*</span></label>
                        <input name="date_of_birth" type="date" value="{{ $getRecord->date_of_birth }}" class="form-control" required />
                        <div style="color:red">{{ $errors->first('date_of_birth') }}</div>
                    </div>
                </div>
        
                <!-- Gender -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="control-label">Gender <span class="required">*</span></label>
                        <select class="form-control" name="gender" required>
                           
                            <option value="Male" {{($getRecord->gender == 'Male') ? 'selected' : ''}} >Male</option>
                            <option value="Female" {{($getRecord->gender == 'Female') ? 'selected' : ''}}>Female</option>
                        </select>
                        <div style="color:red">{{ $errors->first('gender') }}</div>
                    </div>
                </div>
        
                <!-- Religion -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="control-label">Religion <span class="required">*</span></label>
                        <input name="religion" type="text" value="{{$getRecord->religion }}" placeholder="Enter Your Religion" class="form-control" required />
                        <div style="color:red">{{ $errors->first('religion') }}</div>
                    </div>
                </div>
        
                <!-- Profile Pic -->
                     <!-- Profile Picture -->
                     <div class="col-md-6">
                        <div class="mb-3">
                        <label class="control-label">Profile Pic</label>
                        <input type="file" class="fileinput btn-primary"  name="profile_pic" id="profile_pic" title="Browse file" />
                            @if (!empty($getRecord->getProfile()))
                                <img src="{{ $getRecord->getProfile() }}" alt="Profile Image" class="img-responsive img-thumbnail" width="50" height="50">
                            @endif
                         
                    </div>
                </div>
        
                <!-- Admission Date -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="control-label">Admission Date <span class="required">*</span></label>
                        <input name="admission_date" type="date" value="{{ $getRecord->admission_date }}" class="form-control" />
                        <div style="color:red">{{ $errors->first('admission_date') }}</div>
                    </div>
                </div>
        
                <!-- Footer Buttons -->
                <div class="panel-footer">
                    <a class="btn btn-primary" href="{{ url('superadmin/student/list') }}">Back</a>
                    <button type="submit" class="btn btn-primary pull-right">Update</button>
                </div>
            </div>
        </form>
        
    </div>
</div>
@endsection