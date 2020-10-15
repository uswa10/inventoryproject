@extends('layouts.app')

@section('content')

              <!-- Invoice Example -->
              <!-- Invoice Example -->
              <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-md-8">
                          <div class="card">


                  </div>
                    <h5>    <div class="card-header">{{ __(' SUPPLIER LIST') }}</div>  </h5> 
                    @if(count($suppliers) > 0)
                  <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                      <thead class="thead-light">

                        <tr>
                          <th>Supplier Name</th>
                          <th>Contact</th>
                          <th>Email</th>
                            <th>Address</th>
  <th></th>
    <th></th>

                        </tr>
                      </thead>

                       @foreach ($suppliers as $suppliers)

                      <tbody>
                        <tr>

                          <td>{{$suppliers->s_name}}</td>
                          <td>{{$suppliers->s_contact}}</td>
                            <td>{{$suppliers->s_email}}</td>
                            <td>{{$suppliers->s_address}}</td>
                            <td>    <a href="/supplier/{{$suppliers->s_id}}/edit" class="btn btn-primary">Edit</a> <br></th>
                                  <td>  {!!Form::open(['action'=>['App\Http\Controllers\SupplierController@destroy', $suppliers->s_id], 'method'=>'POST', 'class' => 'pull-right'])!!} {{Form::hidden('_method','DELETE')}} {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}   {!!Form::close()!!}</th>
                        </tr>


                      </tbody>
                      @endforeach
                    </table>

                  </div>
@endif

                  <div class="card-footer"></div>
                </div>

              </div>
              <!-- Message From Customer-->

@endsection
