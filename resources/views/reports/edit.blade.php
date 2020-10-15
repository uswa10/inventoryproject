@extends ('layouts.app')

@section('content')

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">{{ __('Purchase Report') }}</div>

                  <div class="card-body">



                    <table class="table table-hover">
                           <tbody>
                                    <tr>
                                      <th>Invoice:</th>
                                      <td>{{$stocks->stock_id}}</td>
                                    </tr>
                                    <tr>
                                      <th>Supplier Name:</th>
                                      <td>{{$stocks->stock_sname}}</td>
                                    </tr>
                                    <tr>
                                      <th>Equipment Name:</th>
                                      <td>{{$stocks->stock_ename}}</td>
                                    </tr>
                                    <tr>
                                      <th>Quantity:</th>
                                      <td>{{$stocks->stock_quantity}}</td>
                                    </tr>

                                    <tr>
                                      <th>Price:</th>
                                      <td>{{$stocks->stock_price}}</td>
                                    </tr>
                                    <tr>
                                      <th>Total Price:</th>
                                      <td>{{$stocks->stock_tprice}}</td>
                                    </tr>
                                    <tr>
                                      <th>Date:</th>
                                      <td>{{$stocks->stock_bdate}}</td>
                                    </tr>




                           </tbody>
                    </table>


                  </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  @endsection
