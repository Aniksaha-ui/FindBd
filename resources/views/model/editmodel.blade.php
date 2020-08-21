@extends('Main.master')
@section('form')

      <div class="main-page">
	<section class="w3l-login-form">

		<div id="form-section">
			<div class="wrapper">
				<!-- form -->
				<div class="login-form">
			<form method="POST" action="{{url('/updatemodel')}}" enctype="multipart/form-data">
 					{{csrf_field()}} 
 					@foreach($product as $product)
						<div class="form-fields d-grid">
							<input type="text" value="{{$product->m_name}}" name="m_name" placeholder="Enter item name" required="required" />
							<select name="country" class="form-control" style="width:300px;height:75px">
                    <option value="">--- Select Catagory ---</option>
                    @foreach ($countries as $key => $value)
                    <option value="{{ $key}}">{{ $value }}</option>
                    @endforeach
                </select>

						</div>
	 <input type="submit" class="btn btn-default" value="Update" style="background-color: #a6a6a6;  width:50%; padding:10px; color:black; text-align: center; ">


						 </div>
						
	@endforeach
						
						

						<!-- <div class="form-group">
						<div class="form-fields d-grid">
							<input type="text" name="username" placeholder="Username" required="required" />
							<input type="password" name="password" placeholder="Password" required="required" />
						</div>
					</div> -->
									</form>
				</div>
					

				
			</div>
		</div>
	
	</section>

</div>
</div>
@endsection

