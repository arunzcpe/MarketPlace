@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Listing</div>

                <div class="card-body">
                    <form class="" action="index.html" method="post">
                        <div class="form-group">
                            <label for="">Title</label>
                            <input class="form-control" type="text" name="title" value="">
                        </div>
                        <div class="form-group">
                            <label for="">Body</label>
                            <textarea name="body" class="form-control" rows="8" cols="80"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Price</label>
                            <input class="form-control" type="text" name="price" value="">
                        </div>
                        <div class="form-group">
                            <label for="">Category</label>
                            <select class="form-control" name="category">
                                <option value="mobile">Mobile</option>
                                <option value="electronic">Electronic</option>
                                <option value="furniture">Furniture</option>
                                <option value="fashion">Fashion</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" class="form-control" name="image" value="">
                        </div>
                        <div class="form-group">
                            <label for="">Mark as</label>
                            <select class="form-control" name="status">
                                <option value="sold">Sold</option>
                                <option value="reserved">Reserved</option>
                                <option value="available">Available</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" name="button">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
