@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="card w-50">
            <div class="card-header">create new post</div>
            <div class="card-body">
                <form action="/post/store" method="POST">
                    @csrf
                <div class="form-gruop">
                    <label for="title">Title</label>
                    <input type="text" id="title" class="form-control" name="title">
                </div>
            </div>
            <div class="card-body">
                <div class="form-gruop">
                    <label for="title">Category</label>
                    <select id="category" class="form-control" name="category_id">
                        <option value="1">LARAVEL</option>
                        <option value="2">HTML</option>
                        <option value="3">CSS</option>
                    </select>
                </div>
            </div>
            <div class="form-gruop">
                <label for="image">image</label>
                <input type="file" id="image" class="form-control" name="image">
            </div>
            <div class="form-gruop">
                <label for="description">description</label>
                <textarea  id="description" cols="30" rows="5" class="form-control" name="description"></textarea>
            </div>
            <button class="btn-btn-primary">submit</button>
        </form>
        </div>
    </div>
    </div>
@endsection
