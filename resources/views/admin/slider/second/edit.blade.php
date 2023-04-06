@extends('layouts.admin')

@section('content')
    <div class="row">x`
        <div class="col-4">
            <form action="{{ route('slider.second.update', $slide->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Title</h3>
                    </div>
                    <div class="card-body">
                        <input name="title" id="title" class="form-control" type="text" value="{{ $slide->title }}">
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Url</h3>
                    </div>
                    <div class="card-body">
                        <input name="url" id="url" class="form-control" type="text" value="{{ $slide->url }}">
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
                <button type="submit" class="btn btn-primary my-3">Редактировать</button>
            </form>
        </div>
    </div>
@endsection
