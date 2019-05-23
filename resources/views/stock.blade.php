@extends('home')

@section('content')


      <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Stock</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Priviledge</th>
                      <th>Phone no.</th>
                      <th>Start date</th>
                      <th>Salary</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Priviledge</th>
                      <th>Phone no.</th>
                      <th>Start date</th>
                      <th>Salary</th>
                    </tr>
                  </tfoot>
                  <tbody>

                  </tbody>
                </table>
              </div>
            </div>
          </div>


@endsection