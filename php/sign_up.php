<?php include "../header.php" ?>
            </div><!-- end row -->
		</div><!-- /.container-fluid -->

	</header><!-- end header -->


<div class="container-fluid" id="blog-post">
			<div class="row">
				<div class="col-xs-8 col-sm-8 col-md-12">
					<article class="blog-post">	  
					  <h1>Sign Up</h1>
					    <form method="post" action="sign_up_db.php">
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
									<td><label for="password2">Enter user password: </label></td>
									<td><input type="password" /></td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td><input type="submit" value="submit" /></td>
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
