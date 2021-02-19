@extends('layout.main')
@section('content')
<div class="content text-center">
    <div class="row">
        <div class="col-lg-12">
            <div class="block block-boarded block-rounded block-fx-pop">
                <div class="block-header bg-primary-op">
                    <h3 class="block-title font-weight-bold">Create Blog Post</h3>
                    <div class="block-options">
                        <a href="{{ route('home') }}" class="btn btn-warning btn-sm"><i class="fa fa-chevron-left fa-fw mr-1"></i>Go Back Home</a>
                    </div>
                </div>
                <div class="block-content">    
                    <form action="{{ route('post.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Blog Content</label>
                    <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-block btn-success"><i class="fa fa-save fa-fw mr-1"></i>Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection