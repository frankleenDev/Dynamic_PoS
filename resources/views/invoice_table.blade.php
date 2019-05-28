@extends('home')

@section('content')

       <div class="card shadow p-2 mb-3">

        <div class="accordion" id="accordionExample">
          <div class="card border-0">
            <div class="card-header bg-white" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Create Invoice
                </button>
              </h2>
            </div>

        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
            <form action="{{ route('submit.invoice') }}" method="POST" class="d-none d-sm-inline-block form-inline ml-md-2 my-2 my-md-2 mw-100 navbar-search">
              @csrf
              <div class="col-md-12 row">
                <div class="input-group mb-1 col-md-3">
                  <input type="text" required class="form-control border-1 small" name="customer_name" placeholder="Customer name" aria-label="Search" aria-describedby="basic-addon2">
                </div>
                <div class="input-group mb-1 col-md-3">
                  <input type="text" required class="form-control border-1 small" name="company_name" placeholder="Company" aria-label="Search" aria-describedby="basic-addon2">
                </div>
                <div class="input-group mb-1 col-md-3">
                  <input type="text" required class="form-control border-1 small" name="product" placeholder="Product" aria-label="Search" aria-describedby="basic-addon2">
                </div>
                <div class="input-group mb-1 col-md-3">
                  <input type="number" required class="form-control border-1 small" name="quantity" placeholder="Quantity" aria-label="Search" aria-describedby="basic-addon2">
                </div>
                <div class="input-group mb-1 col-md-3">
                  <label>Tansport: &nbsp;</label>
                   <select id="one" name="transport_state" class="browser-default custom-select">
                  <option selected>none</option>
                  <option value="trans">Inclusive</option>
                </select>
                </div>
                <div class="input-group mb-1 col-md-3">
                  <input type="text" disabled required id="transport" name="trans_cost" class="form-control bg- border-1 small" placeholder="transport cost" aria-label="Search" aria-describedby="basic-addon2">
                </div>
                <div class="input-group mb-1 col-md-3">
                  <label>Installation: &nbsp;</label>
                  <select id="two" name="install_status" class="browser-default custom-select">
                  <option selected>none</option>
                  <option value="install">Inclusive</option>
                </select>
                </div>
                <div class="input-group mb-1 col-md-3">
                  <input type="text" required id="installation" disabled name="install_cost" class="form-control bg- border-1 small" placeholder="installation cost" aria-label="Search" aria-describedby="basic-addon2">
                </div>
                <div class="input-group mb-1 col-md-3">
                  <label>Payment: &nbsp;</label>
                  <select id="three" name="due_date_status" class="browser-default custom-select">
                  <option selected>Paid in Full</option>
                  <option value="Due">Partially Paid</option>
                  <option value="Due">No Payment</option>
                </select>
                </div>
                <div class="input-group mb-1 col-md-3">
                  <label>Due Date: &nbsp;</label>
                  <input type="date" required id="due_date" disabled name="due_date" class="form-control border-1 small" placeholder="order#" aria-label="Search" aria-describedby="basic-addon2">
                </div>
              </div>
                <div class="col-md-3 m-1 mr-4 float-right">
                  <button type="submit" class="btn float-right btn-primary" >Submit</button>
                </div>
            </form>
            

            </div>
            </div>
          </div>
        </div>
        <!--
        <div class="container-fluid mt-2">
          <h5>Create an Invoice</h5>          
        </div>
        <form action="{{ route('submit.invoice') }}" method="POST" class="d-none d-sm-inline-block form-inline ml-md-2 my-2 my-md-2 mw-100 navbar-search">
          @csrf
          <div class="col-md-12 row">
            <div class="input-group mb-1 col-md-3">
              <input type="text" required class="form-control border-1 small" name="customer_name" placeholder="Customer name" aria-label="Search" aria-describedby="basic-addon2">
            </div>
            <div class="input-group mb-1 col-md-3">
              <input type="text" required class="form-control border-1 small" name="company_name" placeholder="Company" aria-label="Search" aria-describedby="basic-addon2">
            </div>
            <div class="input-group mb-1 col-md-3">
              <input type="text" required class="form-control border-1 small" name="product" placeholder="Product" aria-label="Search" aria-describedby="basic-addon2">
            </div>
            <div class="input-group mb-1 col-md-3">
              <input type="number" required class="form-control border-1 small" name="quantity" placeholder="Quantity" aria-label="Search" aria-describedby="basic-addon2">
            </div>
            <div class="input-group mb-1 col-md-3">
              <label>Tansport: &nbsp;</label>
               <select id="one" name="transport_state" class="browser-default custom-select">
              <option selected>none</option>
              <option value="trans">Inclusive</option>
            </select>
            </div>
            <div class="input-group mb-1 col-md-3">
              <input type="text" disabled required id="transport" name="trans_cost" class="form-control bg- border-1 small" placeholder="transport cost" aria-label="Search" aria-describedby="basic-addon2">
            </div>
            <div class="input-group mb-1 col-md-3">
              <label>Installation: &nbsp;</label>
              <select id="two" name="install_status" class="browser-default custom-select">
              <option selected>none</option>
              <option value="install">Inclusive</option>
            </select>
            </div>
            <div class="input-group mb-1 col-md-3">
              <input type="text" required id="installation" disabled name="install_cost" class="form-control bg- border-1 small" placeholder="installation cost" aria-label="Search" aria-describedby="basic-addon2">
            </div>
            <div class="input-group mb-1 col-md-3">
              <label>Payment: &nbsp;</label>
              <select id="three" name="due_date_status" class="browser-default custom-select">
              <option selected>Paid in Full</option>
              <option value="Due">Partially Paid</option>
              <option value="Due">No Payment</option>
            </select>
            </div>
            <div class="input-group mb-1 col-md-3">
              <label>Due Date: &nbsp;</label>
              <input type="date" required id="due_date" disabled name="due_date" class="form-control border-1 small" placeholder="order#" aria-label="Search" aria-describedby="basic-addon2">
            </div>
          </div>
            <div class="col-md-3 m-2 mr-4 float-right">
              <button type="submit" class="btn float-right btn-primary" >Submit</button>
            </div>
        </form>
        -->
      </div>

      <div class="card shadow p-2 mb-3">
          
        <form class="d-none d-sm-inline-block form-inline ml-md-2 my-2 my-md-2 mw-100 navbar-search">
          <div class="col-md-12 row">
            <div class="input-group col-md-3">
              <input type="text" class="form-control bg-light border-0 small" placeholder="invoice#" aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
            <div class="input-group col-md-3">
              <input type="text" class="form-control bg-light border-0 small" placeholder="order#" aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
            <div class="input-group col-md-3">
              <label>From:</label>
              <input type="date" class="form-control bg-light border-0 small" placeholder="order#" aria-label="Search" aria-describedby="basic-addon2">
            </div>
            <div class="input-group col-md-3">
              <label>To: </label>
              <input type="date" class="form-control bg-light border-0 small" placeholder="order#" aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>

          </div>
        </form>

      </div>

       <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Users</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Customer Name</th>
                      <th>Company Name</th>
                      <th>Product</th>
                      <th>Quantity</th>
                      <th>Transport</th>
                      <th>Installation</th>
                      <th>Payment</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                     <th>Customer Name</th>
                      <th>Company Name</th>
                      <th>Product</th>
                      <th>Quantity</th>
                      <th>Transport</th>
                      <th>Installation</th>
                      <th>Payment</th>
                    </tr>
                  </tfoot>
                  <tbody>

                   @foreach( $invoices as $invoice )

                      <tr>
                        <td>{{ $invoice->id }}</td>
                        <td>{{ $invoice->customer_name }}</td>
                        <td>{{ $invoice->company_name }}</td>
                        <td>{{ $invoice->product }} </td>
                        <td>{{ $invoice->quantity }} </td>
                        <td>{{ $invoice->transport_cost }}</td>
                        <td>{{ $invoice->install_cost }}</td>
                        <td>{{ $invoice->payment }}</td>
                        <td> </td>
                      </tr>

                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>
      </div>

     
      <!--
      <div style="min-height: 842px" class="card shadow p-5 mb-5">
      
        <div class="container-fluid row">
          
          <!-- Company name and address --
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

          <!-- Logo Division --
          <div class="col-lg-2 pull-right p-4">
            <img class="pull-right" src="{{ asset('img/logos/logo.jpg')}}" width="100">
          </div>
          <!-- End of Logo div --

        </div>

        <!-- Invoice details --
        <div class="container-fluid row">
          <!-- Order Section --
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

              <!-- Bill Section --
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

              <!-- Bill Section --
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
              <!-- End of bill --
        </div>
        <!-- End of Invoice details --

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
      -->
     <script type="text/javascript">
       
       document.getElementById("one").onchange = function () {
          document.getElementById("transport").setAttribute("disabled", "disabled");
          if (this.value == 'trans')
            document.getElementById("transport").removeAttribute("disabled");
        };

        document.getElementById("two").onchange = function () {
          document.getElementById("installation").setAttribute("disabled", "disabled");
          if (this.value == 'install')
            document.getElementById("installation").removeAttribute("disabled");
        };

        document.getElementById("three").onchange = function () {
          document.getElementById("due_date").setAttribute("disabled", "disabled");
          if (this.value == 'Due')
            document.getElementById("due_date").removeAttribute("disabled");
        };

     </script>
      

@endsection