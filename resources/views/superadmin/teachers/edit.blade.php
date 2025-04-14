@extends('layouts.backend')
@section('content')
<div class="col-md-12 mt-4">
    <div class="card p-4">
        @include('_message')
        
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h5 class="mb-0">Add Teacher</h5>
        </div>
       
        <form id="itemForm" action="" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
        
            <div class="row">
                <!-- Name -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="name">Name <span class="required">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$getRecord->name }}"  placeholder="Enter Your Name" required>
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
                <!-- Father Name -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="control-label">Father Name <span class="required">*</span></label>
                        <input name="father_name" type="text" value="{{ $getRecord->father_name }}" placeholder="Enter Your Father Name" class="form-control" required />
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
                        <input name="religion" type="text" value="{{ $getRecord->religion }}" placeholder="Enter Your Religion" class="form-control" required />
                        <div style="color:red">{{ $errors->first('religion') }}</div>
                    </div>
                </div>
        


                 <!-- Current Address -->
                 <div class="col-md-6">
                    <div class="mb-3">
                        <label class="control-label">Address <span class="required">*</span></label>
                        <textarea name="current_address" class="form-control" placeholder="Enter Your Current Address" required>{{ $getRecord->current_address  }}</textarea>
                        <div style="color:red">{{$errors->first('current_address')}}</div>
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
             
                <!-- Date of Birth -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="control-label">Date of Birth <span class="required">*</span></label>
                        <input name="date_of_birth" type="date" value="{{ $getRecord->date_of_birth }}" class="form-control" required />
                        <div style="color:red">{{ $errors->first('date_of_birth') }}</div>
                    </div>
                </div>
                 
                 <!-- Admission Date -->
                 <div class="col-md-6">
                    <div class="mb-3">
                        <label class="control-label">date_of_joining<span class="required">*</span></label>
                        <input name="date_of_joining" type="date" value="{{ $getRecord->date_of_joining }}" class="form-control" required />
                        <div style="color:red">{{ $errors->first('date_of_joining') }}</div>
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
            
                  <!-- Phone -->
                  <div class="col-md-6">
                    <div class="mb-3">
                        <label for="phone">Mobile_number <span class="required">*</span></label>
                        <input type="text" class="form-control" id="mobile_number" name="mobile_number" value="{{ $getRecord->mobile_number }}" placeholder="Enter Your Phone" required>
                        <div style="color:red">{{ $errors->first('mobile_number') }}</div>
                    </div>
                </div>
        


        
               
              <!-- Marital Status -->
              <div class="col-md-6">
                <div class="mb-3">
                <label class="control-label">Marital Status <span class="required">*</span></label>
              
                        <input name="marital_status" type="text"  value="{{$getRecord->marital_status }}" class="form-control" required />
                        <div style="color:red">{{ $errors->first('marital_status')}}</div>
                    
                </div>
            </div>

               <!-- Qualification-->
               <div class="col-md-6">
                <div class="mb-3">
                <label class=" control-label">Specialization <span class="required">*</span></label>
               
                    <textarea name="specialization" class="form-control" required>{{ $getRecord->specialization }}</textarea>
                </div>
            </div>
               <!-- Qualification-->
               <div class="col-md-6">
                <div class="mb-3">
                <label class=" control-label">Qualification <span class="required">*</span></label>
                
                    <textarea name="qualification" class="form-control" required>{{ $getRecord->qualification }}</textarea>
                </div>
            </div>
                 <!-- workExprince-->
                 <div class="col-md-6">
                    <div class="mb-3">
                    <label class="control-label">work Exprince <span class="required">*</span></label>
                   
                        <textarea name="work_exprince" class="form-control" required>{{ $getRecord->work_exprince }}</textarea>
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
               
        
                 <!-- Profile Pic -->
                    
                     <div class="col-md-6">
                        <div class="mb-3">
                        <label class="control-label">Profile Pic</label>
                        <input type="file" class="fileinput btn-primary"  name="profile_pic" id="profile_pic" title="Browse file" />
                            @if (!empty($getRecord->getProfile()))
                                <img src="{{ $getRecord->getProfile() }}" alt="Profile Image" class="img-responsive img-thumbnail" width="50" height="50">
                            @endif
                         
                    </div>
                </div>
        
               
        
                <!-- Footer Buttons -->
                <div class="panel-footer">
                    <a class="btn btn-primary" href="{{ url('superadmin/teacher/list') }}">Back</a>
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                </div>
            </div>
        </form>
        
    </div>
</div>
@endsection