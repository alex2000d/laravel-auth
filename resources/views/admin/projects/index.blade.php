@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="my-5 text-center">Tutti i miei progetti</h1>
            </div>
            <table class="table table-striped">
               <thead>
                 <tr>
                   <th>name_project</th>
                   <th>description</th>
                   <th>name</th>
                   <th>surname</th>
                   <th>github</th>
                   <th>strumenti</th>
                 </tr>
               </thead>
               <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{$project->name_project}}</td>
                        <td>{{$project->description}}</td>
                        <td>{{$project->name}}</td>
                        <td>{{$project->surname}}</td>
                        <td>{{$project->github}}</td>
                        <td>
                            <a href="" class="btn btn-sm btn-primary my-2">Scopri +</a>
                            <a href="" class="btn btn-sm btn-warning">modifica</a>
                        </td>
                    </tr>
                @endforeach
               </tbody>
            </table>
        </div>
    </div>
@endsection