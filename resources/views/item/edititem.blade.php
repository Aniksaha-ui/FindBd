@extends('Main.master')
@section('form')
<div id="page-wrapper">
      <div class="main-page">
	<section class="w3l-login-form">

		<div id="form-section">
			<div class="wrapper">
				<!-- form -->
				<div class="login-form">
			<form method="POST" action="{{url('/updateitem')}}" enctype="multipart/form-data">
 					{{csrf_field()}} 
 					@foreach($product as $product)
						<div class="form-fields d-grid">
							<input type="text" value="{{$product->i_name}}" name="i_name" placeholder="Enter item name" required="required" />
							<input type="text" value="{{$product->status}}" name="status" placeholder="Enter status" required="required" />

						</div>

           


						<div class="form-fields d-grid">
							<input type="text" value="{{$product->price}}" class="form-control" id="exampleInputEmail1" placeholder="Enter price" name="price">
							<input type="text" value="{{$product->quantity}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Quantity" name="quan">
						</div>
						<div class="form-fields d-grid" style="text-align: center;">

						<input type="file" onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])" name="p_image">
                  <img style="width: 50px; border-radius: 60%" id="image" src="{{URL($product->image)}}">
<input type="date" value="{{$product->date}}" class="form-control" id="exampleInputEmail1" placeholder="Date" name="date">
	 <input type="submit" class="btn btn-default" value="Add new catagory" style="background-color: #a6a6a6;  width:100%; padding:10px; color:black; text-align: center; ">


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
				<div class="new-signup">
					<a href="#reload" class="signuplink">Forgot password?</a>
					<p class="signup">Don’t have account yet? <a href="#signup.html" class="signuplink">Get it now</a></p>
				</div>			

				
			</div>
		</div>
	
	</section>

</div>
</div>
@endsection

