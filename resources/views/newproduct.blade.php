<div class="main-page">
                <div class="tables">
                    <h2 class="title1"></h2>
                    <div class="panel-body widget-shadow">
                        <h4 style="text-align: center; background-color: #B2BEB5;">Product Information</h4>
                      <div class="form-control" style="background-color: red;">
                                  
                      <form method="post" action="{{url('/searchcem')}}" enctype="multipart/form-data">
                                
                                  @csrf
                                              
                                            &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                                      <input type="text" name="search" placeholder="Anything search">
                                        <input type="submit" value="Search">
                                  
                        </form>
                      </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                  <th>Item Id</th>
                                  <th>Item Name</th>
                                  <th>Item price</th>
                                  <th>Item Stock</th>
                                  <th>Item Image</th>
                                  <th>Model Name</th>
                                  <th>catagory name</th>
                                  <th>Date</th> 
                                  <!-- <th>c_id</th> -->                                  
                                  <th>Action</th>
                                  
                                </tr>
                            </thead>
                             @foreach($data as $item)
                            <tbody>
                                <tr>
                                  <th scope="row">{{$item->id}}</th>
                                   <th scope="row">{{$item->i_name}}</th>
                                    <th scope="row">{{$item->price}}</th>
                                     <th scope="row">{{$item->quantity}}</th>
                                     <td><img style="width: 50px; border-radius: 60%" src="{{url($item->image)}}"></td>
                                                                       
                                  <th scope="row">{{$item->m_name}}</th>
                                  <th scope="row">{{$item->c_name}}</th>
                                    <th scope="row">{{$item->date}}</th>
 
                                 
                                <!--   <td>{{$item->c_id}}</td> -->
                                    <td>
                          <a href="{{URL('item/edit/'.$item->id)}}" class="btn btn-success">
                            <span class="glyphicon glyphicon-edit">Edit</span>  
                            <a href="{{URL('item/delete/'.$item->id)}}" class="btn btn-danger">
                            <span class="glyphicon glyphicon-trash">Delete</span>
                            

                          </td>
                                </tr>  
                            </tbody>
                            @endforeach
                        </table>
                         <button><a href="{{url('/addproduct')}}">Add</a></button>
                    </div>
        {!! $data->render() !!}
        </div>
        </div>

