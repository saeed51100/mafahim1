@extends('layouts.app')

@section('content')
    @include('partials.errors')
    <div class="row">
        <div class="col-md-12">
            <form {{--action="{{ route('admin.create') }}"--}} enctype="multipart/form-data" method="post">
            @csrf
            <!-- Equivalent to... -->
                {{--                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>--}}
                <br>
                <br>
                <div class="form-group">

                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea type="text/javascript" class="form-control" id="content" name="content"></textarea>
                </div>
                @foreach($tags as $tag)
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="tags[]" value="{{ $tag->id }}"> {{ $tag->name }}
                        </label>
                    </div>
                @endforeach
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            @include('partials.ckeditor4')

        </div>
    </div>
@endsection
