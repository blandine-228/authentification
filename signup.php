<?php require('actions/signupAction.php'); ?>
<!DOCTYPE html>
<html>
<?php include'includes/head.php'; ?> 

<body>

<br><br>
	<form class="container" method="POST" style="width: 50%;">

		<?php
			if(isset($errorMsg)){
				echo $errorMsg;
			}
		?>

		<div class="mb-3">
	    	<label for="exampleInputPassword1" class="form-label">Pseudo</label>
	    	<input type="text" class="form-control" name="pseudo">
	  	</div>

	  <div class="mb-3">
	    <label for="exampleInputEmail1" class="form-label">Firstname</label>
	    <input type="text" class="form-control" name="firstname">
	  
	  </div>
	  <div class="mb-3">
	    <label for="exampleInputPassword1" class="form-label">Lastname</label>
	    <input type="text" class="form-control" name="lastname">
	  </div>
	  
	  <div class="mb-3">
	    <label for="exampleInputPassword1" class="form-label">Password</label>
	    <input type="password" class="form-control" name="password">
	  </div>
	 
	  <button type="submit" class="btn btn-primary" name="validate">Submit</button>
	  <a href="login.php"><p>I don't have an acount, create an acount</p></a>
	</form>


</body>
</html>