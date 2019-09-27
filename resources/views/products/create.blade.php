@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">New Listing</div>

                <div class="card-body">
                    <form class="" action="/products" method="post" enctype="multipart/form-data">
                        {{-- {{csrf_field()}} --}}
                        @csrf
                        <div class="form-group">
                            <label for="">Title</label>
                            <input class="form-control" type="text" name="title" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="">Body</label>
                            <textarea name="body" class="form-control" rows="8" cols="80" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Price</label>
                            <input class="form-control" type="text" name="price" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="">Category</label>
                            <select class="form-control" name="category" required>
                                <option value="mobile">Mobile</option>
                                <option value="electronic">Electronic</option>
                                <option value="furniture">Furniture</option>
                                <option value="fashion">Fashion</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" class="form-control" name="image" value="" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="button">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
