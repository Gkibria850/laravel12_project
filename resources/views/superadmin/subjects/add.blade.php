@extends('layouts.backend')
@section('content')
<div class="col-md-12 mt-4">
    <div class="card p-4">
        @include('_message')
        
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h5 class="mb-0">Add SUbject</h5>
        </div>
       
        <form id="itemForm" action="" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
        
            <div class="row">
                <!-- Name -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="name">Name <span class="required">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Enter Your Name" required>
                        <div style="color:red">{{ $errors->first('name') }}</div>
                    </div>
                </div>
        
                
        
                <!-- Name -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="name">Description<span class="required">*</span></label>
                        <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}" placeholder="Enter Your Description" required>
                        <div style="color:red">{{ $errors->first('description') }}</div>
                    </div>
                </div>
        
                
        
        
                <!-- Status -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="control-label">Status <span class="required">*</span></label>
                        <select class="form-control" name="status" required>
                            <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Inactive</option>
                        </select>
                        <div style="color:red">{{ $errors->first('status') }}</div>
                    </div>
                </div>
        

        
                <!-- Footer Buttons -->
                <div class="panel-footer">
                    <a class="btn btn-primary" href="{{ url('superadmin/subject/list') }}">Back</a>
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                </div>
            </div>
        </form>
        
    </div>
</div>
@endsection