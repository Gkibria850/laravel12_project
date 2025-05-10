@extends('layouts.backend')

@section('content')
<div class="col-md-12 mt-4">
    <div class="card p-4">
        @include('_message')

        <div class="d-flex align-items-center justify-content-between mb-3">
            <h5 class="mb-0">Add Payment</h5>
        </div>

        <form id="itemForm" action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <!-- Student Name -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label>Student Name <span class="text-danger">*</span></label>
                        <select class="form-control" name="students_id" required>
                            <option value="">Select Student Name</option>
                            @foreach ($getStudents as $value)
                                <option value="{{ $value->id }}" {{ old('students_id') == $value->id ? 'selected' : '' }}>{{ $value->name }}</option>
                            @endforeach
                        </select>
                        <div class="text-danger">{{ $errors->first('students_id') }}</div>
                    </div>
                </div>

                <!-- Class Name -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label>Class Name <span class="text-danger">*</span></label>
                        <select class="form-control" name="classes_id" required>
                            <option value="">Select Class Name</option>
                            @foreach ($getClasses as $value)
                                <option value="{{ $value->id }}" {{ old('classes_id') == $value->id ? 'selected' : '' }}>{{ $value->name }}</option>
                            @endforeach
                        </select>
                        <div class="text-danger">{{ $errors->first('classes_id') }}</div>
                    </div>
                </div>

                <!-- Father Name -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label>Father Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="father_name" value="{{ old('father_name') }}" placeholder="Enter Father's Name" required>
                        <div class="text-danger">{{ $errors->first('father_name') }}</div>
                    </div>
                </div>

                <!-- Amount -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label>Amount <span class="text-danger">*</span></label>
                        <input type="number" step="0.01" class="form-control" name="amount" value="{{ old('amount') }}" placeholder="Enter Amount" required>
                        <div class="text-danger">{{ $errors->first('amount') }}</div>
                    </div>
                </div>

                <!-- Notes -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label>Notes</label>
                        <input type="text" class="form-control" name="notes" value="{{ old('notes') }}" placeholder="Enter Notes">
                        <div class="text-danger">{{ $errors->first('notes') }}</div>
                    </div>
                </div>

                <!-- Payment Date -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label>Payment Date <span class="text-danger">*</span></label>
                        <input type="date" class="form-control" name="payment_date" value="{{ old('payment_date') }}" required>
                        <div class="text-danger">{{ $errors->first('payment_date') }}</div>
                    </div>
                </div>

                <!-- Payment Method -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label>Payment Method <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="payment_method" value="{{ old('payment_method') }}" placeholder="Enter Payment Method" required>
                        <div class="text-danger">{{ $errors->first('payment_method') }}</div>
                    </div>
                </div>
                

                <!-- Status -->
             <div class="col-md-6">
                <div class="mb-3">
                    <label class="control-label">Status <span class="required">*</span></label>
                    <select class="form-control" name="status" required>
                        <option value="1" {{ old('status') == 1 ? 'selected' : '' }}>Paid</option>
                        <option value="0" {{ old('status') == 0 ? 'selected' : '' }}>Unpaid</option>
                    </select>
                    <div style="color:red">{{ $errors->first('status') }}</div>
                </div>
            </div>
                
            </div>

            <!-- Footer Buttons -->
            <div class="mt-3">
                <a class="btn btn-secondary" href="{{ url('superadmin/payments/list') }}">Back</a>
                <button type="submit" class="btn btn-primary float-end">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection

