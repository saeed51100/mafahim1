@extends('layouts.app')

@section('content')
    @include('partials.errors')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.update') }}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input
                        type="text"
                        class="form-control"
                        id="title"
                        name="title"
                        value="{{ $post->title }}">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea
                        type="text"
                        class="form-control"
                        id="content"
                        name="content"
                    >  {!! $post->content !!} </textarea>
                </div>
                @foreach($tags as $tag)
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="tags[]"
                                   value="{{ $tag->id }}" {{ $post->tags->contains($tag->id) ? 'checked' : '' }}> {{ $tag->name }}
                        </label>
                    </div>
                @endforeach
                <input type="hidden" name="id" value="{{ $postId }}">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            @include('partials.ckeditor4')

        </div>
    </div>
@endsection
