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
@include('layouts.sidebar');

@yield('content')

@include('layouts.footer');

</body>
</html>