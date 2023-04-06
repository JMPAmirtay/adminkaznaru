@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-4">
            <a href="{{ route('news.create') }}" class="btn btn-primary my-3">Добавить</a>
        </div>
    </div>
    <div class="row">
        @foreach($news as $post)
            <div class="col-md-3">
                <div class="card mb-2 bg-gradient-dark">
                    <img src="{{ asset($post->image) }}" class="card-img-top" style="max-width: 100%; height: 300px;object-fit:cover" alt="{{$post->image_name}}">
                    <div class="card-body">
                        <div class="card-header">
                            <h3 class="card-title">{{$post->title}}</h3>
                        </div>
                        <p class="card-text">{{ $post->Description }}</p>
                        <form action="{{ route('news.delete', $post->id) }}"
                              method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Удалить"
                                   class="btn btn-danger float-right mx-3">
                        </form>
                        <a href="{{ route('news.edit', $post->id) }}" class="btn btn-primary">Редактировать</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
