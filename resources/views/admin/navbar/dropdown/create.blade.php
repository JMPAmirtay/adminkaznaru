@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-4">
            <form action="{{ route('dropdown.store') }}" method="post">
                @csrf
                <div class="card">
                    <input type="hidden" name="navbar_id" id="navbar_id" value="{{ $navbar->id }}">
                    <div class="card-header">
                        <h3 class="card-title">Title</h3>
                    </div>
                    <div class="card-body">
                        <input name="title" id="title" class="form-control" type="text" placeholder="Title">
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Url</h3>
                    </div>
                    <div class="card-body">
                        <input name="url" id="url" class="form-control" type="text" placeholder="Url">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
@endsection
