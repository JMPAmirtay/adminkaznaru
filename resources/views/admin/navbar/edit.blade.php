@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-4">
            <form action="{{ route('navbar.update', $navbar->id) }}" method="post">
                @csrf
                @method('patch')
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Title</h3>
                    </div>
                    <div class="card-body">
                        <input name="title" id="title" class="form-control" type="text" value="{{ $navbar->title }}">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
