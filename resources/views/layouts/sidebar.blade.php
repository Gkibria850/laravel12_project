<div class="sidebar">
    <h4>Super Admin MGK CODING</h4>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a href="{{url('superadmin/dashboard')}}" class="nav-link  @if(Request::segment(2) == 'dashboard') active @endif ">
                <i class="fa fa-user"></i> Dashboard   
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('superadmin/user/list')}}" class="nav-link @if(Request::segment(2) == 'user') active @endif">
                <i class="fa fa-list"></i> List User
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('superadmin/student/list')}}" class="nav-link @if(Request::segment(2) == 'student') active @endif">
                <i class="fa fa-book-reader"></i> Students
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('superadmin/teacher/list')}}" class="nav-link @if(Request::segment(2) == 'teacher') active @endif">
                <i class="fa fa-graduation-cap"></i> Teachers
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('superadmin/subject/list')}}" class="nav-link @if(Request::segment(2) == 'subject') active @endif">
                <i class="fa fa-user-graduate"></i> Subjects
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('superadmin/classes/list')}}" class="nav-link @if(Request::segment(2) == 'classes') active @endif">
                <i class="fa fa-theater-masks"></i>Classes
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('superadmin/enrollments/list')}}" class="nav-link @if(Request::segment(2) == 'enrollments') active @endif">
                <i class="fa fa-award"></i> Enrollments
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('superadmin/payments/list')}}" class="nav-link @if(Request::segment(2) == 'payments') active @endif">
                <i class="fa fa-school"></i> Payments
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('superadmin/attendances/list')}}" class="nav-link @if(Request::segment(2) == 'attendances') active @endif">
                <i class="fa fa-laptop-code"></i> Attendances
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