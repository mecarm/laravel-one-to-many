@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>Crea un nuovo post</h1>
    </div>

    <form class="w-75 m-auto" action="{{route('admin.posts.store')}}" method="POST">
        @csrf

        <div>
            <label class="form-label" for="">Titolo</label>
            <input class="form-control" type="text" name="title">
            @error('title')
                <div class="alert alert-danger">
                     {{$message}}
                </div>
            @enderror
        </div>

        <div>
            <label class="form-label" for="">Body</label>
            <textarea class="form-control" name="body"></textarea>
            @error('body')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
             @enderror
        </div>

        <div class="my-3">
            <label for="">Categories</label>
            <select class="form-control" name="category_id" id="">
                <option value="">Seleziona la categoria</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Crea</button>
    </form>
@endsection