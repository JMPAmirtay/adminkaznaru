@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-4">
            <form action="{{ route('navbar.store') }}" method="post">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Title</h3>
                    </div>
                    <div class="card-body">
                        <input name="title" id="title" class="form-control" type="text" placeholder="Title">
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Куда должна быть повернута шторка</h3>
                    </div>
                    <div class="card-body">
                        <select name="class" class="form-control">
                            <option value="nav-ul-list nav-last">На лево</option>
                            <option value="nav-ul-list">На право</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
@endsection
