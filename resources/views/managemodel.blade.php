<div class="main-page">
                <div class="tables">
                    <h2 class="title1">Tables</h2>
                    <div class="panel-body widget-shadow">
                        <h4>Model of all catagories</h4>
                        <button> <a href="{{url('/add_model')}}">Add</a></button>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                  <th>Model Id</th>
                                  <th>Model name</th>
                                  <!-- <th>c_id</th> -->                                  
                                  <th>Action</th>
                                  
                                </tr>
                            </thead>
                             @foreach($data as $item)
                            <tbody>
                                <tr>
                                  <th scope="row">{{$item->id}}</th>
                                  
                                  <td>{{$item->m_name}}</td>
                                <!--   <td>{{$item->c_id}}</td> -->
                                    <td>
                          <a href="{{URL('model/edit/'.$item->id)}}" class="btn btn-success">
                            <span class="glyphicon glyphicon-edit">Edit</span>  
                            <a href="{{URL('model/delete/'.$item->id)}}" class="btn btn-danger">
                            <span class="glyphicon glyphicon-trash">Delete</span>
                            

                          </td>
                                </tr>  
                            </tbody>
                            @endforeach
                        </table>
                    </div>
        {!! $data->render() !!}
        </div>
        </div>

