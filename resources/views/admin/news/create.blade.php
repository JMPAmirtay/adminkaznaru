@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-4">
            <form action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Title</h3>
                    </div>
                    <div class="card-body">
                        <input name="title" id="title" class="form-control" type="text">
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Description</h3>
                    </div>
                    <div class="card-body">
                        <textarea name="Description" id="Description" class="form-control"></textarea>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Url</h3>
                    </div>
                    <div class="card-body">
                        <input name="url" id="url" class="form-control" type="text">
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Image</h3>
                    </div>
                    <div class="card-body">
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="image" id="image" class="custom-file-input"
                                       accept="image/png, image/gif, image/jpeg">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tag</h3>
                    </div>
                    <div class="card-body">
                        <select name="tag[]" class="form-control" multiple>
                            @foreach($tags as $tag)
                                <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary my-3">Добавить</button>
            </form>
        </div>
    </div>
@endsection
