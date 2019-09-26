@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @for ($i=0; $i < 12; $i++)
            <div class="col-md-3 mt-4">

                <div class="card">
                  <div class="card-body">
                      <h6 class="card-title">1 week ago by <b>user name</b> </h6>
                  </div>
                  <img src="http://lorempixel.com/400/400" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Listing Title</h5>
                    <h6 class="card-title">Price : RM1000</h6>
                    <p class="card-text">{{ substr("Some quick example text to build on the card title and make up the bulk of the card's content.",0,20) }} ...</p>
                    <a href="#" class="btn btn-primary">See Details</a>
                  </div>
                </div>
            </div>
        @endfor
    </div>
</div>
@endsection
