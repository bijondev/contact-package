<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
	<title>Contact</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form class="form-horizontal" action="{{route('contact')}}" method="post" >
<fieldset>

<!-- Form Name -->
<legend>This is contact form</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="textinput">Name</label>  
  <div class="col-md-12">
  <input id="textinput" name="name" type="text" placeholder="Name" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="Email">Email</label>  
  <div class="col-md-12">
  <input id="Email" name="Email" type="text" placeholder="Email" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-12 control-label" for="Message">Message</label>
  <div class="col-md-12">                     
    <textarea class="form-control" id="Message" name="message">{{ time() }}Enter your message here....</textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-12 control-label" for="sendBTN"></label>
  <div class="col-md-12">
    <button id="sendBTN" class="btn btn-primary">Send</button>
  </div>
</div>

</fieldset>
</form>
			</div>
		</div>
	</div>
	

</body>
</html>