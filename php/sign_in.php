<?php include "../header.php";
	  include "db_info.php";
 ?>
            </div><!-- end row -->
		</div><!-- /.container-fluid -->

	</header><!-- end header -->


<div class="container-fluid" id="blog-post">
			<div class="row">
				<div class="col-xs-8 col-sm-8 col-md-12">
					<article class="blog-post">	  
					  
					  <h1>Sign In</h1>
					  
					  <?php 
					  
					    if (isset($_POST['submitted'])){  // Make sure form is submitted first.
					    	
					    	// Store errors in an array:
					    	$errors = array();
					    	
					    	// Make sure username is not empty.
					    	if(!isset($_POST['username']) OR empty($_POST['username'])){
					    		$errors[] = 'username is empty' ;				    	
					    	}
					    	
					    	// Make sure password is not empty.
					    	if(!isset($_POST['password']) OR empty($_POST['password'])){
					    		$errors[] = 'password is empty' ;				    	
					    	}
					    	
							if (empty($errors)) { // Success!
							  // Print succes message and quit.
							  echo "<p>You have successfully signed in!</p>";
							 
							} else {
								foreach($errors as $error){
								echo "<li>$error</li>";
								}
							}	
										
					    	
					    } // End if isset submitted		  
					   ?>
					    <form method="post" action="sign_in_db.php">
							<table class="sign-up">
								<tr>
									<td><label for="username">Enter user name: </label></td>
									<td><input type="text" name="username"/></td>
								</tr>
								<tr>
									<td><label for="password1">Enter user password: </label></td>
									<td><input type="password" name="password" /></td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td><input type="submit" value="submit" name="submitted" /></td>
								</tr>
							</table>
					  	</form>
					</article>  
				</div><!-- columns -->  
			</div><!-- row -->
		</div><!--container -->
		
<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</div>
</body>
</html>
