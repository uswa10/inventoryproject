@extends('layouts.app')

@section('content')

              <!-- Invoice Example -->
              <!-- Invoice Example -->
              <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-md-8">
                          <div class="card">

                  </div>
                    <h5>    <div class="card-header">{{ __('EMPLOYEE LIST') }}</div>  </h5> 
                    @if(count($employees) > 0)
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

                       @foreach ($employees as $employees)

                      <tbody>
                        <tr>

                          <td>{{$employees->emp_fname}} {{$employees->emp_lname}}</td>
                          <td>{{$employees->emp_contact}}</td>

                            <td>{{$employees->emp_address}}</td>
                            <td>    <a href="/employee/{{$employees->emp_id}}/edit" class="btn btn-primary">Edit</a> <br></th>
                                  <td>  {!!Form::open(['action'=>['App\Http\Controllers\EmployeeController@destroy', $employees->emp_id], 'method'=>'POST', 'class' => 'pull-right'])!!} {{Form::hidden('_method','DELETE')}} {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}   {!!Form::close()!!}</th>
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
