@extends('layouts.backend')
@section('content')
<div class="col-md-12 mt-4">
    <div class="card p-4">
        @include('_message')
        
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h5 class="mb-0">Add Student</h5>
        </div>
       
         <form id="itemForm"  action="" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="row">

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="name">Name<span class="required">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" placeholder="Enter Your Name" required>
                        <div style="color:red">{{ $errors->first('name')}}</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="email">Email<span class="required">*</span></label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email" required>
                        <div style="color:red">{{ $errors->first('email')}}</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="Phone">Phone<span class="required">*</span></label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Your Phone" required>
                        <div style="color:red">{{ $errors->first('phone')}}</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="rollnumber">Roll Number<span class="required">*</span></label>
                        <input type="text" class="form-control" id="roll_number" name="roll_number" placeholder="Enter Your roll_number" required>
                    </div>
                </div>
                <!-- permanent_address -->
                <div class="col-md-6">
                    <div class="mb-3">
                    <label class="control-label">Current Address <span class="required">*</span></label>
                  
                        <textarea name="current_address" class="form-control" placeholder="Enter Your current_address" required>{{old('current_address')}}</textarea>
                    </div>
                </div>
                <!-- permanent_address -->
                <div class="col-md-6">
                    <div class="mb-3">
                    <label class="control-label">Permanent Address <span class="required">*</span></label>
                    
                        <textarea name="permanent_address" class="form-control" placeholder="Enter Your Permanent Address" required>{{old('permanent_address')}}</textarea>
                    </div>
                </div>
                   <!-- Status -->
                   <div class="col-md-6">
                    <div class="mb-3">
                    <label class=" control-label">Status <span class="required">*</span></label>
                  
                        <select class="form-control" name="status" required>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                </div>
                 <!-- Blood Group-->
                 <div class="col-md-6">
                    <div class="mb-3">
                    <label class="control-label">Blood Group<span class="required">*</span></label>
                 
                            <input name="blood_group" type="text"  value="{{old('blood_group')}}" placeholder="Enter Your Blood Group" class="form-control" required />
                            <div style="color:red">{{ $errors->first('blood_group')}}</div>
                      
                    </div>
                </div>
                
                     <!-- Father Name -->
                     <div class="col-md-6">
                        <div class="mb-3">
                        <label class="control-label">Father Name <span class="required">*</span></label>
                      
                                <input name="father_name" type="text"  value="{{old('father_name')}}" placeholder="Enter Your Father Name" class="form-control" required />
                                <div style="color:red">{{ $errors->first('father_name')}}</div>
                            
                        </div>
                    </div>
                    <!-- Mother Name -->
                    <div class="col-md-6">
                        <div class="mb-3">
                        <label class="control-label">Mother Name <span class="required">*</span></label>
                     
                            
                                <input name="mother_name" type="text"  value="{{old('mother_name')}}" placeholder="Enter Your Mother Name" class="form-control" required />
                                <div style="color:red">{{ $errors->first('mother_name')}}</div>
                           
                        </div>
                    </div>
                     <!-- Date of birth-->
                     <div class="col-md-6">
                        <div class="mb-3">
                        <label class="control-label">Date of birth <span class="required">*</span></label>
                        
                                
                                <input name="date_of_birth" type="date"  value="{{old('date_of_birth')}}" class="form-control" required />
                                <div style="color:red">{{ $errors->first('date_of_birth')}}</div>
                           
                        </div>
                    </div>
                    <!-- Gender-->
                    <div class="col-md-6">
                        <div class="mb-3">
                        <label class=" control-label"> Gender <span class="required">*</span></label>
                       
                            <select class="form-control" name="gender" required>
                                <option value="">Select</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    <!-- religion Date-->
                    <div class="col-md-6">
                        <div class="mb-3">
                        <label class=" control-label">Religion <span class="required">*</span></label>
                        
                                
                                <input name="religion" type="text"  value="{{old('religion')}}" placeholder="Enter Your Religion" class="form-control" required />
                                <div style="color:red">{{ $errors->first('religion')}}</div>
                          
                        </div>
                    </div>
                     <!-- Profile Picture -->
                 <div class="col-md-6">
                    <div class="mb-3">
                    <label class="control-label">Profile Pic <span class="required">*</span></label>
                 
                        <input type="file" class="fileinput btn-primary"  name="profile_pic" id="profile_pic" title="Browse file" required />
                    </div>
                </div>
                   <!-- Date of birth-->
                   <div class="col-md-6">
                    <div class="mb-3">
                        <label class="control-label"> Admission Date  <span class="required">*</span></label>
                    
                            <input name="admission_date" type="date"  value="{{old('admission_date')}}" class="form-control" required />
                            <div style="color:red">{{ $errors->first('admission_date')}}</div>
                        </div>
                    </div>
                    <br/>
                                                        


                    <!-- Panel Footer -->
                    <div class="panel-footer">
                        <a class="btn btn-primary" href="{{ url('panel/student') }}">Back</a>
                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    </div>
              



            </div>
            
         </form>
    </div>
</div>
@endsection