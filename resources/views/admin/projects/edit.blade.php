@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>modifica progetto</h1>
            </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="list-unstyled">
                   @foreach ($errors->all() as $error)
                       <li>{{$error}}</li>
                   @endforeach
                </ul>
            </div>
        @endif
            <form action="{{route('admin.projects.update', ['project' => $project->id])}}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-6">
                        <label for="" class="ccontrol-label">nome progetto</label>
                        <input type="text" class="form-control" name="name_project" placeholder="nome progetto" value="{{old('name_project', $project->name_project)}}">
                        @error ('name_project')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="" class="ccontrol-label">nome</label>
                        <input type="text" class="form-control" name="name" placeholder="nome" value="{{old('name', $project->name)}}">
                        @error ('name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="" class="ccontrol-label">cognome</label>
                        <input type="text" class="form-control" name="surname" placeholder="cognome" value="{{old('surname', $project->surname)}}">
                        @error ('surname')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="" class="ccontrol-label">github</label>
                        <input type="text" class="form-control" name="github" placeholder="github" value="{{old('github', $project->github)}}">
                        @error ('github')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="" class="ccontrol-label">descrizione</label>
                        <textarea type="text" class="form-control" name="description" placeholder="descrizione">{{old('description', $project->decription)}}</textarea>
                        @error ('description')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-success rounded-2 mt-3">salva</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection