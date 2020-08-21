
@extends('Main.master')
@section('dashboard')
        <div id="page-wrapper">
      <div class="main-page">
<div class="tables">
<div class="panel-body widget-shadow">
              <hr>
              <table class="table table-bordered">
              <thead>
               <tr>
                    <th>product id</th>
                    <th>Action</th>
                </tr>
              </thead>
                  <tbody>
                    @foreach($data as $products)
                      <tr>
                      <th scope="row">{{$products->m_name}}

                       
                         <td>
                          <a href="{{URL('/managecement/'.$products->id)}}" class="btn btn-success">
                            <span class="glyphicon glyphicon-edit">open</span>  
                         
                            

                          </td>
                          
                      </th>
                    </tr>

                    @endforeach
                  </tbody>
              </table>
              </div>
              </div>
              </div>
              </div>
              



@endsection