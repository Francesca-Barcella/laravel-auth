@extends('layouts.admin')

@section('content')

<div class="container">
    <h1>Edit Project</h1>
    <form action="{{route('admin.projects.store')}}" method="POST">
        @csrf
       

        <div class="mb-3">
          <label for="title" class="form-label">Name</label>
          <input type="text" name="title" id="title" class="form-control" placeholder="Add New Project" aria-describedby="titleHelpId" value="{{old('title', $item->title)}}">
          <small id="titleHelpId" class="text-muted">Add new project</small>
        </div>

      <div class="mb-3">
        <label for="description" class="form-label" value="{{old('decription', $item->decription)}}">Description</label>
        <textarea class="form-control" name="description" id="description" rows="5"></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Create</button>

    </form>
</div>
    



@endsection