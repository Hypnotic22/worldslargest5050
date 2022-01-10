<?php


?>
<!DOCTYPE hmtl>
<html>
	<head>
		<style>
			html{
				background-color:  black;
			}
			
			iframe {
			    display:block;
			    width:100%;
			    height: 500px;
			}

			body{
				zoom:  150%;
			}

			@media screen and (min-width:  676px){
				.modal-dialog{
					min-width: 600px;
				}
			}

			

		</style>
		<script>
			window.onload=function(){
			    $('#exampleModal2').modal('show');
			};
		</script>
	</head>
	<body>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

		<div class="modal fade" id="exampleModal2" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Ticket Purchase</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="window.location = 'purchase.php'"> 
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <iframe src="crypto-pay.php">
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-primary">Save changes</button>
		      </div>
		    </div>
		  </div>
		</div>
	</body>
</hmtl>