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

        <!-- Invoice details -->
        <div class="container-fluid row">
          <!-- Order Section -->
              <div class="col-lg-4">
                <table class="table borderless">
                  <tr>
                    <td>
                     <b>Order No: #</b> 
                    </td>
                    <td class="text-left">
                     342
                    </td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>
                     <b>Issued By:</b> 
                    </td>
                    <td>
                      Frank
                    </td>
                  </tr>
                  <tr>
                    <td>
                     <b> Time:</b> 
                    </td>
                    <td>
                      16:05:22
                    </td>
                  </tr>
                  <tr>
                    <td>
                     <b>Date:</b> 
                    </td>
                    <td>
                      02/06/2019
                    </td>
                  </tr>
                </table>
              </div>
              <!-- End of order -->

              <!-- Bill Section -->
              <div class="col-lg-4">
                <table class="table borderless">
                  <tr>
                    <td>
                     <b>Bill To: </b> 
                    </td>
                    <td class="text-left">
                     Customer
                    </td>
                    <td></td>
                    <td></td>
                  </tr>
                   <tr>
                    <td>
                     <b> Company:</b> 
                    </td>
                    <td>
                      ... Ltd
                    </td>
                  </tr>
                  <tr>
                    <td>
                     <b>Transportation:</b> 
                    </td>
                    <td>
                      (Yes)Destination
                    </td>
                  </tr>
                  <tr>
                    <td>
                     <b>Installation:</b> 
                    </td>
                    <td>
                      Inclusive
                    </td>
                  </tr>
                </table>
              </div>
              <!-- End of bill -->

              <!-- Bill Section -->
              <div class="col-lg-4">
                <table class="table borderless">
                  <tr>
                    <td>
                     <b>Invoice No: </b> 
                    </td>
                    <td class="text-left">
                     #065
                    </td>
                    <td></td>
                    <td></td>
                  </tr>
                   <tr>
                    <td>
                     <b> Due date:</b> 
                    </td>
                    <td>
                      ... Ltd
                    </td>
                  </tr>
                  <tr>
                    <td>
                     <b>Payment:</b> 
                    </td>
                    <td>
                      (Yes)Destination
                    </td>
                  </tr>
                  <tr>
                    <td>
                     <b>Installation:</b> 
                    </td>
                    <td>
                      Inclusive
                    </td>
                  </tr>
                </table>
              </div>
              <!-- End of bill -->
        </div>

      </div>


@endsection