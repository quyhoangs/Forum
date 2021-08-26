@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">.....</div>

                <div class="card-body">
                   <h4>{{$thread->title}}</h4>
                   <h4>{{$thread->body}}</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
