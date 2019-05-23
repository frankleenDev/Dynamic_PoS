@extends('home')

@section('content')

      <div class="card shadow p-5 mb-5">
      
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
              <div class="col-lg-4 col-md-4">
                <table class="table borderless">
                  <tr>
                    <td>
                     <b>Order:#</b> 
                    </td>
                    <td class="text-left">
                     342
                    </td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>
                     <b>Issued_By:</b> 
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
              <div class="col-lg-4 col-md-4">
                <table class="table borderless">
                  <tr>
                    <td>
                     <b>Bill_To: </b> 
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
              <div class="col-lg-4 col-md-4">
                <table class="table borderless">
                  <tr>
                    <td>
                     <b>Invoice:# </b> 
                    </td>
                    <td class="text-left">
                     #065
                    </td>
                    <td></td>
                    <td></td>
                  </tr>
                   <tr>
                    <td>
                     <b> Due_date:</b> 
                    </td>
                    <td>
                      21/03/2019
                    </td>
                  </tr>
                  <tr>
                    <td>
                     <b>Payment:</b> 
                    </td>
                    <td>
                      <img src="{{ asset('img/paid8.png') }}" height="40">
                    </td>
                  </tr>
                  
                </table>
              </div>
              <!-- End of bill -->
        </div>
        <!-- End of Invoice details -->

        <div class="table-responsive container-fluid mt-3">
          
          <table class="table table-">
            <tr class="text-right">
              <th class="text-left">QTY</th>
              <th class="text-center">DESCRIPTION</th>
              <th>@PRICE</th>
              <th>TOTAL AMOUNT</th>
            </tr>
            <tr>
              <td>1</td>
              <td>Refridgerator</td>
              <td class="text-right">650,000</td>
              <td class="text-right">650,000</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Metal rods</td>
              <td class="text-right">50,000</td>
              <td class="text-right">100,000</td>
            </tr>
            <tr>
              <td>5</td>
              <td>Refridgerator</td>
              <td class="text-right">30,000</td>
              <td class="text-right">150,000</td>
            </tr>
            <tr>
              <td colspan="3" class="text-right"><b>Subtotal:</b></td>
              <td class="text-right">900,000</td>
            </tr>
            <tr>
              <td colspan="3" class="text-right"><b>Tax 17%:</b></td>
              <td class="text-right">153,000</td>
            </tr>
            <tr>
              <td colspan="3" class="text-right"><h5><b>Total:</b></h5></td>
              <td class="text-right">1,053,000</td>
            </tr>
          </table>

        </div>

        <div style="position: static; bottom: 0px"  class="container row mb-4">
          <div class="col-lg-6 mt-5 bordered col-md-6 text-right">
           Company Name 
          </div>
          <div class="col-lg-6 border-left col-md-6">
            <p>Payment is due within # days</p>
            <span>Bank Name</span><br>
            <span>Account number: 34523534</span><br>
            <span>Routing: 35235</span>
          </div>
        </div>

      </div>


@endsection