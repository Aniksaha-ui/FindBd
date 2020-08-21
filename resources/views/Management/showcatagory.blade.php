@extends('Main.master')
@section('dashboard')
<div id="page-wrapper">
			<div class="main-page">

			<div class="col_3">
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-product-hunt user1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><a href="{{url("/showcementinfo")}}">Cement</strong></h5>
                     
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-product-hunt user1 icon-rounded"></i>
                    <div class="stats">
                      
                              <h5><strong><a href="#">ROD</strong></h5>
                    </div>
                </div>
        	</div>

        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-product-hunt user1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>Bali</strong></h5>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-product-hunt user1 icon-rounded"></i>
                    <div class="stats">
                        <h5><strong>Cricket Bat</strong></h5>
                    </div>
                </div>
        	 </div>
   
        	<div class="clearfix"> </div>
		</div>

@endsection