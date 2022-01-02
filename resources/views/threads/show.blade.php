@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$thread->title}}</div>

                <div class="card-body">
                   <h4>{{$thread->body}}</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>
                
                @foreach ($thread->replies as $reply)
                <div class="card-header"> {{$reply->owner->name}} Said {{$reply->created_at->diffForHumans()}} ... </div>

                    <div class="card-body">
                        <h4>{{$reply->body}}</h4>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</div>
@endsection
