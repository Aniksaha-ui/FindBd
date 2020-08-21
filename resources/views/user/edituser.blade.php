@extends('Main.master')
@section('form')

      <div class="main-page">
	<section class="w3l-login-form">

		<div id="form-section">
			<div class="wrapper">
				<!-- form -->
				<div class="login-form">
			<form method="POST" action="{{url('/updateuser')}}" enctype="multipart/form-data">
 					{{csrf_field()}} 
 					@foreach($product as $product)
						<div class="form-fields d-grid">
							<input type="text" value="{{$product->name}}" name="name" placeholder="Enter User name" required="required" />
								<input type="text" value="{{$product->email}}" name="email" placeholder="Enter Email name" required="required" />
									<input type="password" value="{{$product->password}}" name="password" placeholder="Enter Password" required="required" />
										<input type="text" value="{{$product->user_role}}" name="role" placeholder="Enter User role" required="required" />

						</div>
	 <input type="submit" class="btn btn-default" value="Update" style="background-color: #a6a6a6;  width:100%; padding:10px; color:black; text-align: center; ">


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

