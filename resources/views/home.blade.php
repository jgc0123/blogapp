@extends('layout.main')
@section('content')
<div class="content text-center">
              <div class="row">
                  <div class="col-lg-12">
                        <h1>QUIXPRESS Blog App</h1>
                  </div>
                </div>
                <div class="row">\
                    <div class="col-lg-12">
                        <div class="block.block-fx-shadow block-rounded block-bordered">
                            <div class="block-header bg-primary-op">
                                <h3 class="block-title font-w700 text-black">Blog List</h3>
                                <div class="block-options">
                                    <a href="{{ route('post.create') }}" class="btn btn-sm btn-success">
                                        <i class="fa fa-plus fa-fw mr-1"></i>Add New Post
                                    </a>
                                </div>
                            </div>
                            <div class="block-content text-left">
                                @forelse($posts as $post)
                                <div class="block block-fx-pop block-bordered block-rounder">
                                    <div class="block-header bg-primary-op">
                                        <h3 class="block-title">{{ $post->title }}</h3>
                                    </div>
                                    <div class="block-content">
                                        {{ $post->content }}
                                    </div>
                                    <div class="block-content mb-4">
                                        <div class="rows">
                                            <div class="col-lg-3">
                                        <a href="{{ route('post.edit', $post->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-pencil fa-fw mr-1"></i>Edit</a>
                                    </div>
                                    <div class="col-lg-3">
                                        <form action="{{ route('post.destroy', $post->id) }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-sm btn-danger"><i class="fa fa-thrash fa-fw mr-1"></i>Delete</button>
                                        </form>
                                        </div>
                                    </div>
                                    </div>
                                @empty
                                <h1>No posts yet!</h1>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection