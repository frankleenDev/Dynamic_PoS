@extends('home')

@section('content')


      <div class="card shadow mb-4">
      
        <div class="container-fluid row">
          
          <!-- Company name and address -->
          <div class="col-lg-10 p-3">

            <div class="col-lg-6">
              <h1>Company Name</h1>
            </div>

            <div class="col-lg-6">
              <h6>Street</h6>
              <h6>P.O. Box 2342</h6>
              <h6>Zanzibar, Tanzania</h6>
            </div>

          </div>
          <!-- End of company and address-->

          <!-- Logo Division -->
          <div class="col-lg-2 pull-right p-4">
            <img class="pull-right" src="{{ asset('img/logos/logo.jpg')}}" width="100">
          </div>
          <!-- End of Logo div -->

        </div>

      </div>


@endsection