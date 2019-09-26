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
                <h5 class="card-title">
                    Card title
                    <span class="badge badge-primary"> available </span>
                </h5>
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
                            <label for="">Comment</label>
                            <textarea name="name" class="form-control" rows="8" cols="80"></textarea>
                            <a href="#" class="btn btn-primary mt-2">Add Comment</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card mt-4">
                <div class="card-body">
                    <h4>All Comments</h4>
                    @for ($i=0; $i < 10; $i++)
                        <div class="card mt-3">
                            <div class="card-header">
                                User name
                                <span class="float-right">23 Jan 2019</span>
                            </div>
                            <div class="card-body">

                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
