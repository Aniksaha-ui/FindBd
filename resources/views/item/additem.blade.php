@extends('Main.master')
@section('form')
<div id="page-wrapper">
      <div class="main-page">
	<section class="w3l-login-form">

		<div id="form-section">
			<div class="wrapper">
				<!-- form -->
				<div class="login-form">
			<form method="POST" enctype="multipart/form-data">
 					{{csrf_field()}} 
						<div class="form-fields d-grid">
							<input type="text" name="i_name" placeholder="Enter item name" required="required" />
							<input type="text" name="status" placeholder="Enter status" required="required" />

						</div>

              <div class="form-fields d-grid">
                <select name="country" class="form-control" style="width:300px">
                    <option value="">--- Select Catagory ---</option>
                    @foreach ($countries as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>

                <select name="state" class="form-control" style="width:300px">
                <option>--select Model--</option>
                </select>
            </div>
           


						<div class="form-fields d-grid">
							<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter price" name="price">
							<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Quantity" name="quan">
						</div>
						<div class="form-fields d-grid" style="text-align: center;">

						 <input type="file" class="form-control" id="exampleInputEmail1" placeholder="product price" name="p_image">
<input type="date" class="form-control" id="exampleInputEmail1" placeholder="Date" name="date">


						 </div>
						
	
						
						

						<!-- <div class="form-group">
						<div class="form-fields d-grid">
							<input type="text" name="username" placeholder="Username" required="required" />
							<input type="password" name="password" placeholder="Password" required="required" />
						</div>
					</div> -->
					 <input type="submit" class="btn btn-default" value="Add new catagory" style="background-color: #a6a6a6;  width:50%; padding:10px; color:black; text-align: center; ">
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