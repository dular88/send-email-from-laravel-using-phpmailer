<!DOCTYPE html>
<html>
<head>
	<title>Laravel 8 Email</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-4 offset-sm-4 mt-2">
				<form action="{{ route('sendMyMail') }}" method="post">
                @csrf
				<div class="card">
				  <div class="card-header">
                  Laravel 8 Email
				  </div>
				  <div class="card-body">
                        <div class="form-group">
				 			<label>Name</label>
				 			<input type="text" name="name"  class="form-control" placeholder="Enter Name">
				 		</div>
				 		<div class="form-group">
				 			<label>Email</label>
				 			<input type="email" id="email" name="email" class="form-control" placeholder="Enter Email">
				 		</div>
				 		<div class="form-group">
				 			<label>Subject</label>
				 			<input type="text" name="subject" class="form-control" placeholder="Enter Subject">
				 		</div>
                         <div class="form-group">
				 			<label>Message</label>
				 			<textarea name="message" class="form-control" placeholder="Enter Message"></textarea>
				 		</div>
				  </div>
                  <div class="card-body">
                     <button type="submit" class="btn btn-primary">Send</button>
                  </dib>
				</div>
		      </form>
			</div>
		</div>
	</div>
</body>
</html>