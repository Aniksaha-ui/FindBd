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
							<input type="text" name="name" placeholder="Enter User name" required="required" />
						   <input type="text" name="email" placeholder="Enter Email" required="required" />
						   <input type="password" name="password" placeholder="Enter password name" required="required" />
						   
													   <input type="text" name="role" placeholder="User role" required="required" />
						
						</div>						

							<input type="submit" class="btn btn-default" value="Add new User" style="background-color: #a6a6a6;  width:100%; padding:10px; color:black; text-align: center; ">
						</div>						

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