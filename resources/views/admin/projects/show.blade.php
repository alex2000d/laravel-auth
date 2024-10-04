@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">{{$project->name_project}}</h1>
                <p>{{$project->description}}</p>
            </div>
        </div>
    </div>
@endsection