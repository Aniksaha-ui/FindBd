  <nav class="navbar navbar-inverse">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <h1><a class="navbar-brand" href="index.html"><span class="fa fa-area-chart"></span> Glance<span class="dashboard_text">Design dashboard</span></a></h1>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
              <li class="header">MAIN NAVIGATION</li>
              <li class="treeview">
                <a href="{{url("/Dashboard")}}">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
              </li>
        <li class="treeview">
                <a href="#">
                <i class="fa fa-laptop"></i>
                <span>store Inventory</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                <li><a href="{{url("/add_catagory")}}"><i class="fa fa-angle-right"></i>Catagory Create</a></li>
                  <li><a href="{{url("/add_model")}}"><i class="fa fa-angle-right"></i>Model Create</a></li>
                  <li><a href="{{url("/addproduct")}}"><i class="fa fa-angle-right"></i>Item Create</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i>Purchase Cash Return</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i>Purchase cash Due</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i>Purchase Document</a></li>
                  
                </ul>
              </li>
             
                  <li class="treeview">
                <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Sales Depertment</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-angle-right"></i>Due Invoice</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i>cash Invoice</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i>Item Create</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i>Purchase Cash Return</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i>Purchase cash Due</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i>Purchase Document</a></li>
                  
                </ul>
              </li>
                     <li class="treeview">
                <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Update Hobe</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-angle-right"></i>Due Invoice</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i>cash Invoice</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i>Item Create</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i>Purchase Cash Return</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i>Purchase cash Due</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i>Purchase Document</a></li>
                  
                </ul>
              </li>
                                   <li class="treeview">
                <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Update Hobe</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-angle-right"></i>Due Invoice</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i>cash Invoice</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i>Item Create</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i>Purchase Cash Return</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i>Purchase cash Due</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i>Purchase Document</a></li>
                  
                </ul>
              </li>
              
              <li class="treeview">
                <a href="">
                <i class="fa fa-laptop"></i>
                <span>User Control</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                <li><a href="{{url("/adduser")}}"><i class="fa fa-angle-right"></i>Add New user</a></li>
                <li><a href="{{url("/manageuser")}}"><i class="fa fa-angle-right"></i>Manage user</a></li>
                </ul>
              </li>
               <li class="treeview">
               
                <li> <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                          <i class=fa fa-user> Logout </i>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form></li>

              </li>


            
              
           
        
            
           
              
          </div>
          <!-- /.navbar-collapse -->
      </nav>