@extends('layout.main')
@section('content')
<div class="content text-center">
    <div class="row">
        <div class="col-lg-12">
            <div class="block block-boarded block-rounded block-fx-pop">
                <div class="block-header bg-primary-op">
                    <h3 class="block-title font-weight-bold">Edit Blog Post #{{$post->id}}</h3>
                    <div class="block-options">
                        <a href="{{ route('home') }}" class="btn btn-warning btn-sm"><i class="fa fa-chevron-left fa-fw mr-1"></i>Go Back Home</a>
                    </div>
                </div>
                <div class="block-content">    
                    <form action="{{ route('post.update', $post->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $post->title }}" required>
                </div>
                <div class="form-group">
                    <label>Blog Content</label>
                    <textarea name="content" id="content" cols="30" rows="10" class="form-control" required>{{ $post->content }}</textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-block btn-info"><i class="fa fa-save fa-fw mr-1"></i>Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection