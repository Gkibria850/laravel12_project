<style type="text/css">
    .alert{
        padding: 15px;
        margin-bottom: 15px;
        border: 1px solid transparent;
        border-radius: 4px;
    }
    .alert h4{
        margin-top: 0;
        color: inherit;
        font-weight: 500;
    }
    .alert.alert-link{
       font-weight: bold;
    }
    .alert > p,
    .alert > ul,
    .alert > ol{
        margin-bottom: 0;
    }
    .alert > p + p{
        margin-top: 10px;
    }
    .alert-dismissable,
    .alert-dismissible {
       padding-right: 35px;
    }
    .alert-dismissible .close,
    .alert-dismissible .close{
    position: relative;
    top: -2px;
    right: -21px;
    color: inherit;
    }
    .alert-success{
        color: #3c763d;
        background-color: #dff0d8;
        border-color: #d6e9c6;
    }
    .alert-success hr{
        border-top-color: #c9e2b8;
    }
    .alert-success .alert-link{
        color: #27a2e1;
    }
    .alert-info{
        color: #31708f;
        background-color: #d9edf7;
        border-color: #bce8f1;
    }
    .alert-warning{
        color: #8a6d3b;
        background-color: #fcf8e3;
        border-color: #faebcc;
    }
    .alert-warning hr{
        border-top-color: #f7e1b5;
    }
    .alert-warning .alert-link{
        color: #66512c;
    }
    .alert-danger{
        color: #a94442;
        background-color: #f2dede;
        border-color: #ebccd1;
    }
    .alert-danger hr{
        border-top-color: #e4b9c0;
    }
    .alert-danger.alert-link{
        color: #843534;
    }
</style>

@if(!empty(session('success')))
<div class=" alert alert-success" role="alert">
{{ session('success') }}
</div>

@endif

@if(!empty(session('error')))
<div class=" alert alert-danger" role="alert">
{{ session('error') }}
</div>

@endif