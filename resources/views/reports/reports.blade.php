@extends('layouts.app')

@section ('content')

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">


</div>
  <h5>    <div class="card-header">{{ __(' PURCHASE REPORTS') }}</div>  </h5>
                    @if(count($stocks) > 0)

                                    <div class="card-body">

                                      <table class="table table-striped">
                                             <tbody>
                                                      <tr>
                                                          <th>Equipment Name</th>
                                                          <th>Supplier Name</th>

                                                            <th >Date</th>
                                                              <td class="w-25">

                                                      </tr>

                                             </tbody>
                                      </table>
                                          @foreach ($stocks as $stocks)

                                          <table class="table table-hover">
                                                   <tbody>
                                                            <tr>
                                                                <td class="w-25">{{$stocks->stock_ename}}</th>
                                                                <td class="w-25">{{$stocks->stock_sname}}</th>

                                                                          <td class="w-10">{{$stocks->stock_bdate}}</th>
                                          <td>    <a href="/reports/{{$stocks->stock_id}}/edit" class="btn btn-primary">View</a> <br></th>

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
