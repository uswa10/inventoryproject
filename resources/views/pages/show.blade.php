@extends('layouts.app')

@section('content')

              <!-- Invoice Example -->
              <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-md-8">
                          <div class="card">


  </div>
    <h5>    <div class="card-header">{{ __(' EQUIPMENT LIST') }}</div>  </h5>
                    @if(count($equipment) > 0)
                  <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                      <thead class="thead-light">

                        <tr>
                          <th>Equipment Name</th>
                          <th>Price</th>
                          <th>Selling Price</th>
                          <th>Stock</th>
  <th></th>
    <th></th>
                        </tr>
                      </thead>

                       @foreach ($equipment as $equipment)

                      <tbody>
                        <tr>

                          <td>{{$equipment->e_name}}</td>
                            <td>{{$equipment->e_price}}</td>
                          <td>{{$equipment->e_sellingprice}}</td>
                            <td>{{$equipment->e_stock}}</td>

                            <td>    <a href="/pages/{{$equipment->e_id}}/edit" class="btn btn-primary">Edit</a> <br></th>

                        </tr>


                      </tbody>
                      @endforeach
                    </table>

                  </div>
@endif

                  <div class="card-footer"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
              <!-- Message From Customer-->

@endsection
