<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"  />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" ></script>
    <title> {{ !empty($meta_title) ? $meta_title : ''}}  | MGK CODING</title>
    <style type="text/css">

             body {
                margin: 0;
                font-family: Arial, Helvetica, sans-serif;
                display: flex;
                min-height: 100vh;
                background: #f8f9fa;
                box-sizing: border-box;
            }

            .sidebar {
                width: 250px;
                height: 100vh;
                background: #16a085;
                color: #fff;
                padding-top: 20px;
                position: fixed;
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                text-align: left;
                transition: all 0.3s ease-in-out;
            }

            .sidebar h4 {
                text-align: center;
                padding-bottom: 20px;
                width: 100%;
            }

            .sidebar ul {
                list-style-type: none;
                padding: 0;
                width: 100%;
            }

            .sidebar ul li {
                width: 100%;
            }

            .sidebar ul li a {
                color: #fff;
                display: block;
                text-decoration: none;
                padding: 15px;
                transition: background 0.3s ease-in-out;
                width: 100%;
            }

            .sidebar ul li a:hover,
            .sidebar a.active {
                background: #1abc9c;
                color: #fff;
            }

            .content {
                margin-left: 250px;
                padding: 20px;
                width: calc(100% - 250px);
            }

            .navbar {
                background: #1abc9c;
                color: #fff;
                padding: 15px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                border-radius: 10px;
                transition: background 0.3s ease-in-out;
            }

            .navbar a {
                color: #fff;
                text-decoration: none;
                transition: color 0.3s ease-in-out;
            }

            .card {
                border-radius: 10px;
                padding: 20px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                margin-bottom: 20px;
            }

            .btn-primary {
                background: #1abc9c;
                color: #fff;
                border: none;
                padding: 10px 20px;
                border-radius: 5px;
                cursor: pointer;
                transition: background 0.3s ease-in-out;
            }

            .btn-primary:hover {
                background: #16a085;
            }

            .table thead {
                background: #16a085;
                color: #fff;
                text-align: left;
                padding: 12px;
                font-weight: bold;
            }

            .table td {
                padding: 12px;
                border-bottom: 1px solid #ddd;
            }

            .table img {
                width: 50px;
                height: 50px;
                object-fit: cover;
            }

    </style>
    <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function(){
        let links = document.querySelectorAll(".sidebar a");
        links.forEach(link=>{
            link.addEventListener('click', function(){
                links.forEach(link=> link.classList.remove('active'));
               this.classList.add('active');
            });
        });
    });
    </script>
</head>
<body>
    <div class="sidebar">
        <h4>Super Admin MGK CODING</h4>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="#" class="nav-link active">
                    <i class="fa fa-user"></i> Dashboard   
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fa fa-user"></i> Profile 
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fa fa-list"></i> List User 
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('logout')}}" class="nav-link">
                    <i class="fa fa-sign-out-alt"></i> Logout  
                </a>
            </li>
        </ul>
    </div>
    
    <div class="content">
        <nav class="navbar">
            <span>Super Admin</span>
            <a href="#">
                <i class="fa fa-user"></i> Profile 
            </a> 
        </nav>
    
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="card p-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Add Item</h5>
                            <button type="button" class="btn btn-success" onclick="document.getElementById('itemForm').reset();">
                                <i class="fa fa-plus"></i> New Form
                            </button>
                        </div>
    
                        <form id="itemForm">
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
            </div>
        </div>
    </div>
    

</body>
</html>






