
    @extends('layouts.backend')
    @section('content')
 
                <div class="col-md-12">
                    <div class="card p-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Add Item</h5>
                            <button type="button" class="btn btn-success" onclick="document.getElementById('itemForm').reset();">
                                <i class="fa fa-plus"></i> New Form
                            </button>
                        </div>
    
                        <form id="itemForm">
                            {{csrf_field()}}
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="role">Role</label>
                                <select class="form-select" id="role" name="role" required>
                                    <option value="">Choose...</option>
                                    <option value="superadmin">Super Admin</option>
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="image">Image</label>
                                <input type="file" class="form-control" id="image" name="image" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
    
                <div class="col-md-12 mt-4">
                    <div class="card p-4">
                        <h5 class="mb-3">Data Table</h5>
                        <div class="table-responsive table-hover">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>John Doe</td>
                                        <td>johndoe@example.com</td>
                                        <td>Admin</td>
                                        <td><img src="https://via.placeholder.com/150" alt="Profile Image"></td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                            <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Jane Doe</td>
                                        <td>janedoe@example.com</td>
                                        <td>User</td>
                                        <td><img src="https://via.placeholder.com/150" alt="Profile Image"></td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                            <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>  
                    </div>
                </div>
           
@endsection




