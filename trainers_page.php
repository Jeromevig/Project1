<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="src/bootstrap-4.1.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="styletrainers.css">
        <title>Project 1 - Group Noobs</title>
    </head>
    <body>
	<?php include ("header.php") ?>    "background-color": "#ffe"

     <div class="container-fluid"> 
		<div class="row trainers" style="overflow:hidden;">
            <div class="col-12  thetrainers">The trainers !</div>
        </div>
		 <div class="row">
            <div class="col-12  cadre">
			 	<div class="formator1">
					<img src="public/trainerssrc/gaetan.jpeg" class="pix"/>
				</div>
				<div class="formator1">
					<img src="public/trainerssrc/olivier.jpg" class="pix"/>
				</div>
				<div class="formator1">
					<img src="public/trainerssrc/loic.jpeg" class="pix"/>
				</div>
			 </div>
        </div>
		 
		 <div class="row" style="margin-top:20px;">
            <div class="col-12  Olivier1block">
			 	<div class="col-3" style="padding-left:4%; padding-top:4%;">
					<div style="position:relative;" class="click">
						<img src="public/trainerssrc/gaetan.jpeg" style="border:5px black solid; border-radius:11px 11px 11px 11px; width:220px; height:220px;"/>
						<img src="public/trainerssrc/clickhere.png" class="clickhere"/>
					</div>
				</div>
				<div class="col-4  square" style="padding:17px;">
					<div class="adopte" style="overflow:hidden;">
						<div class="col-12" style="border-bottom:3px black solid; height:50px;">
							Gaetan
						</div>
						<div class="col-12" style="border-bottom:3px black solid; height:100px;">
							Profession : Formateur PHP
						</div>
						<div class="col-12">
							Particularités : Adore les concours de pompe.
							<img src="public/adoptawilderlogo.jpg" style="width:100px; height:100px; margin-top:20px; margin-left:360px;"/>
						</div>
					</div>
				</div>
			 </div>
        	</div>
		 
		  <div class="row">
            <div class="col-12  Olivier1block">
				<div class="col-4  square2" style="padding:17px;">
					<div class="adopte" style="overflow:hidden;">
						<div class="col-12" style="border-bottom:3px black solid; height:50px;">
							Olivier
						</div>
						<div class="col-12" style="border-bottom:3px black solid; height:100px;">
							Profession : Campus manageur
						</div>
						<div class="col-12">
							Particularités : A toujours la pêche !
							<img src="public/adoptawilderlogo.jpg" style="width:100px; height:100px; margin-top:20px; margin-left:360px;"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						</div>
					</div>
				</div>
			 	<div class="col-3" style="padding-left:4%; padding-top:4%;">
					<div style="position:relative;" class="click2">
						<img src="public/trainerssrc/olivier.jpg" style="border:5px black solid; border-radius:11px 11px 11px 11px;  width:220px; height:220px;"/>
						<img src="public/trainerssrc/clickhere.png" class="clickhere"/>
					</div>
				</div>
				
			 </div>
        	</div>
		 
		 <div class="row">
            <div class="col-12  Olivier1block">
			 	<div class="col-3" style="padding-left:4%; padding-top:4%;">
					<div style="position:relative;" class="click3">
						<img src="public/trainerssrc/loic.jpeg" style="border:5px black solid; border-radius:11px 11px 11px 11px;  width:220px; height:220px;"/>
						<img src="public/trainerssrc/clickhere.png" class="clickhere"/>
					</div>
				</div>
				<div class="col-4  square3" style="padding:17px;">
					<div class="adopte" style="overflow:hidden;">
						<div class="col-12" style="border-bottom:3px black solid; height:50px;">
							Loic
						</div>
						<div class="col-12" style="border-bottom:3px black solid; height:100px;">
							Profession : Formateur JS
						</div>
						<div class="col-12">
							Particularités : Se ballade pieds nus, ne supporte pas qu'on utilise "var".
							<img src="public/adoptawilderlogo.jpg" style="width:100px; height:100px; margin-top:20px;"/>
						</div>
					</div>
				</div>
			 </div>
        	</div>
		 
		 
		

    <?php include("footer.php") ?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		 
		 <script>
			 $( ".click" ).click(function() {
				   $( ".square" ).toggle("display","flex");
  				
			});
			 
			 $( ".click2" ).click(function() {
				 $(".square2").toggle("display","flex");
  				
			});
			 
			 $( ".click3" ).click(function() {
				 $(".square3").toggle("display","flex");
  				
			});
		 </script>
    </body>
</html>