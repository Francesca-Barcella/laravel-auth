@extends('layouts.admin')

@section('content')

<div class="container">
  <h1>{{project->tilte}}</h1>
  <h5>{{project->slug}}</h5>
  <div class="content">
    {{project->description}}
  </div>
</div>


@endsection