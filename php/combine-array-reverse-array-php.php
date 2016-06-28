<?php include "../header.php" ?>
            </div><!-- end row -->
		</div><!-- /.container-fluid -->

	</header><!-- end header -->


<div class="container-fluid" id="blog-post">
			<div class="row">
				<div class="col-xs-8 col-sm-8 col-md-12">
					<article class="blog-post">
					  <h1>Combine Arrays in PHP</h1>
					  <p>Recently I was asked to combine two arrays in PHP.  When the 
					  arrays are put together they create an associative array.  The cool 
					  thing about PHP is that it has so many functions on arrays that you 
					  could do just about anything you need to do with little to no 
					  additional functionality, depending on what you need to do.</p>
					  
					  <p>The question I had was like this:</p>
					  <p>lets say you have two arrays.</p>
					  <section class="code-box">
					  	  <p><b>&lt;?php</b></p>
						  <p><b>$array1 = array(‘Please’, ‘Excuse’, ‘My’, ‘Dear’, ‘Aunt’, ‘Sally’);</b></p>
						  <p><b>$array2 = array(‘p’, ‘e’, ‘m’, ‘d’, ‘a’, ‘s’);</b></p>
						  <p>// To combine the arrays in PHP you simply use</p>
						  <p><b>$array3 = array_combine($array2, $array1);</b></p>
						  <p><b>print_r($array3);</b></p>
						  <p>// Will give you the array :</p>
						  <p><b>Array([p] => Please [b] => Excuse [m] => My [d] => Dear [a] => Aunt [s] => Sally);</b></p>
						  <p><b>?&gt;</b></p>
						  </section>
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
