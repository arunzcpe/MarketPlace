@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="text-center">
                <img src="https://dummyimage.com/400x400/000/fff" alt="...">
            </div>
            <div class="card mb-3">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><h4 class="text-muted">Price <b>RM1000</b> </h4></p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form class="" action="" method="post">
                        <div class="form-group">
                            <label for="">Set Status</label>
                            <select class="form-control" name="">
                                <option value="">Active</option>
                                <option value="">Reject</option>
                            </select>
                            <button type="submit" class="btn btn-primary" name="button">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
