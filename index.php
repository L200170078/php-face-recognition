<!doctype html>
<html lang="en" class="h-100">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>PHP & PYTHON : Face Recognition</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/all.min.css">
    <style>

    	/* Custom page CSS
		-------------------------------------------------- */
		/* Not required for template or sticky footer method. */

		.container {
		  width: auto;
		  max-width: 850px;
		  padding: 0 15px;
		}

		.footer {
		  background-color: #f5f5f5;
		}
    </style>
    <!-- Javascript -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/vendor/webcam.js"></script>
  </head>
  <body class="d-flex flex-column h-100">
    <main role="main" class="flex-shrink-0">
	  <div class="container">
	    <h1 class="mt-5">PHP Face-recognition</h1>
	    <p class="lead">PHP Face-recognition is a program created for php-based face recognition in collaboration with python.</p>
	    <p>Read <a href="https://github.com/L200170078/php-face-recognition">Docs</a> if need be, too.</p>
	    <hr>
	    <div class="row">
	    	<div class="col-sm-12">
	    		<form id="recognition">
			    	<p>Take a photo :</p>
			    	<div id="my_camera">
					</div>
					<br>
					<div class="text-center">
						<button type="submit" name="take" class="btn btn-primary">TAKE PHOTO</button>	
						<button onclick="savesnap()" class="btn btn-success">RECOGNIZE</button>	
					</div>
			    </form>
			    <br>
			    <br>
			    <div>
	    			<img src="" id="result-img" style="display: none;">
	    			<div id="predicted">
	    				<img src="" id="predicted-img">
	    			</div>
	    		</div>
	    	</div>
	    </div>
  	  </div>
  	  <br>
  	  <br>
  	  <br>
	</main>

	<footer class="footer mt-auto py-3">
	  <div class="container">
	    <span class="text-muted">This code build with <i class="fa fa-heart" style="color: red;"></i>.</span>
	  </div>
	</footer>

	<!-- Script Camera -->
	<script language="JavaScript">
		Webcam.set({
			width: 720,
			height: 400,
			image_format: 'jpeg',
			jpeg_quality: 100
		});
		Webcam.attach( '#my_camera' );
	</script>
	<script>
		$('#recognition').on('submit', function (event) {
			event.preventDefault();

			var image = '';
			Webcam.snap( function(data_uri) {
				$('#result-img').attr('src', data_uri);
			});
		});

		function savesnap() {
			var base64image = $('#result-img').attr('src');

			Webcam.upload( base64image, 'capture.php', function(code, text) {
				// console.log('Save successfully');

				$('#predicted-img').attr('src',text);
				// $('#predicted-img').attr('',nama);
			});
		}	
	</script>
  </body>
</html>