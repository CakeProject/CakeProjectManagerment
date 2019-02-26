@extends('layouts.master')

<style type="text/css">
    .avatar{
        border-radius: 100%;
        max-width: 100px;
    }
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (count($errors) > 0)
                @foreach ($errors->all() as $error)
                    <div class="alert alter-danger">{{$error}}</div>
                @endforeach
            @endif

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="panel panel-default">
                <div class="panel-heading">Home</div>
                <div class="panel-body">
                    <div class="col-md-4">
                        <img src="{{ url('img/avatar.png') }}" class="avatar" alt="">
                    </div>
                    <div class="col-md-8">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
