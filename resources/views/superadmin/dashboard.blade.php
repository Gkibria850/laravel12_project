@extends('layouts.app')
@section('content')
   <div class="container">
       <div class="wrapper">
        <div class="title"><span>Super Admin Dashboard</span></div>
        <form>
            <div class="row">
                
                  <p> <b> Name: {{$getRecord->name}} </b> </p>
                  <p> <b> Email: {{$getRecord->email}} </b> </p>
                </div>
                <div class="signup-link"> Logout?
                    <a href="{{url('logout')}}">Logout</a>
                </div>
        </form>
    
        </div>
    </div>
@endsection