<div class="main-page">
                <div class="tables">
                    <h2 class="title1">Tables</h2>
                    <div class="panel-body widget-shadow">
                        <h4>User Information</h4>
                        <button> <a href="{{url('/adduser')}}">Add</a></button>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                  <th>User Id</th>
                                  <th>Name</th>
                                  <th>Email</th>
                                  <th>user Role</th>
                                  
                                  <th>action</th>
                                  
                                </tr>
                            </thead>
                             @foreach($data as $item)
                            <tbody>
                                <tr>
                                  <th scope="row">{{$item->id}}</th>
                                  <td>{{$item->name}}</td>
                                  <td>{{$item->email}}</td>
                                  <td>{{$item->user_role}}</td>
                                   <td>
                          <a href="{{URL('user/edit/'.$item->id)}}" class="btn btn-success">
                            <span class="glyphicon glyphicon-edit">Edit</span>  
                            <a href="{{URL('user/delete/'.$item->id)}}" class="btn btn-danger">
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

