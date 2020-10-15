@extends ('layouts.app')

@section('content')

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">{{ __('Sale Report') }}</div>

                  <div class="card-body">



                    <table class="table table-hover">
                           <tbody>
                                    <tr>
                                      <th>Invoice:</th>
                                      <td>{{$deploys->d_id}}</td>
                                    </tr>
                                    <tr>
                                      <th>Employee Name:</th>
                                      <td>{{$deploys->d_employee}}</td>
                                    </tr>
                                    <tr>
                                      <th>School Name:</th>
                                      <td>{{$deploys->d_school}}</td>
                                    </tr>
                                    <tr>
                                      <th>Equipment:</th>
                                      <td>{{$deploys->d_equipment}}</td>
                                    </tr>
                                    <tr>
                                      <th>Quantity:</th>
                                      <td>{{$deploys->d_quantity}}</td>
                                    </tr>
                                    <tr>
                                      <th>Price:</th>
                                      <td>{{$deploys->d_price}}</td>
                                    </tr>
                                    <tr>
                                      <th>Total Price:</th>
                                      <td>{{$deploys->d_tprice}}</td>
                                    </tr>
                                    <tr>
                                      <th>Date:</th>
                                      <td>{{$deploys->d_date}}</td>
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
