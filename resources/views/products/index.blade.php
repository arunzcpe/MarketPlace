@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h4>Product Listing</h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Created At</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> <a href="/product/id">Posting Title</a> </td>
                                <td> <img src="https://dummyimage.com/400x400/000/fff" width="100px"alt=""> </td>
                                <td>23 Oct 2019</td>
                                <td> <span class="badge badge-primary">Sold</span> </td>
                                <td>
                                    <a href="#" class="btn btn-info btn-sm">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm  btn-delete">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="deleteModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete this product?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="" method="post" id="form-delete">
              <div class="modal-body">

              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-danger">Confirm</button>
              </div>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection
@section('scripts')
    <script type="text/javascript">
        $(".btn-delete").on( "click", function(e){
            event.preventDefault();
            var modal = $('#deleteModel');
            modal.find("#form-delete").attr('action', $(this).attr('href'));
            modal.modal('show');
        });
    </script>
@endsection
