@extends('layouts.admin')

@section('content')
        @foreach($slides as $slide)
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <img src="{{ asset($slide->image) }}" class="card-img-top"
                             style="max-width: 100%; height: 600px;object-fit:cover" alt="{{ $slide->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $slide->title }}</h5>
                            <a href="{{ route('slider.first.edit', $slide->id) }}" class="btn btn-primary">Редактировать</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                    @foreach($slide->second as $post)
                        <div class="col-md-6">
                            <div class="card">
                                <img src="{{ asset($post->image) }}" class="card-img-top"
                                     style="max-width: 100%; height: 200px;object-fit:cover" alt="{{ $slide->name }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <a href="{{ route('slider.second.edit', $post) }}" class="btn btn-primary">Редактировать</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        @endforeach
@endsection
