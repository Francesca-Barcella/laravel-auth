@extends('layouts.admin')

@section('content')

<img src="{{asset('storage/'. $project->cover_image)}}" alt="" class="img-fluid">
  <h1>Title project: {{$project->tilte}}</h1>
  <h5>Slug Title project: {{$project->slug}}</h5>
  <div class="content">
  Descritpion project:{{$project->description}}
  </div>
</div>


@endsection