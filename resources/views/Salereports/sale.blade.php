@extends('layouts.app')

@section ('content')

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">


</div>
              <h5>    <div class="card-header">{{ __(' SALE REPORTS') }}</div>  </h5>



                    @if(count($deploys ) > 0)

                                    <div class="card-body">

                                      <table class="table table-striped">
                                             <tbody>
                                                      <tr>
                                                          <th>Employee Name</th>
                                                          <th>Equipment Name</th>
                                                              <th>School</th>

                                                            <th >Date</th>
                                                              <td class="w-25">
                                                      </tr>

                                             </tbody>
                                      </table>
                                          @foreach ($deploys as $deploys)

                                          <table class="table table-hover">
                                                   <tbody>
                                                            <tr>
                                                                <td class="w-25">{{$deploys->d_employee}}</th>
                                                                <td class="w-25">{{$deploys->d_equipment}}</th>
                                                                  <td class="w-10">{{$deploys->d_school}}</th>

                                                                          <td>{{$deploys->d_date}}</th>
    <td>    <a href="/salereports/{{$deploys->d_id}}/edit" class="btn btn-primary">View</a> <br></th>

                                                            </tr>

                                                   </tbody>
                                            </table>


                                          @endforeach


                                        </div>
                                      @endif


                </div>
                </div>
                </div>
                </div>
                </div>
                </div>

                @endsection
