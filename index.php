<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="Team Noobs - Group 1 - WCS">
        <meta name="description" content="This is a humorous website that presents the atmosphere at Wild Code School">
        <meta name="keywords" content="wild code school, lille, noobs">
        <title>Project 1 - Group Noobs</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="src/bootstrap-4.1.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include ("header.php") ?>

        <section id="carousel">
            <div class="container">
                <div class="row">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100 h-100" style="border-radius: 5px;" src="public/school1.jpg" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 style="color: deeppink; background-color: black; border-radius: 5px;">#Perfects-People</h5>
                                    <p style="color: pink; background-color: black; border-radius: 5px;">They are so cute, they are so resourceful...</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 h-100" style="border-radius: 5px;" src="public/school2.jpg" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 style="color: deeppink; background-color: black; border-radius: 5px;">#Need-An-Internship</h5>
                                    <p style="color: pink; background-color: black; border-radius: 5px;">They are full of love, they are at your disposal...</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 h-100" style="border-radius: 5px;" src="public/school3.jpg" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 style="color: deeppink; background-color: black; border-radius: 5px;">#To-Prove-Their-Value</h5>
                                    <p style="color: pink; background-color: black; border-radius: 5px;">Adopt your Wilder, hurry to contact one !</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <hr color="black">
            </div>
        </section>

        <section id="presentation">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 background_case">
                        <h2 style="padding-top: 15px; text-align:center;">..::Join the Wild lover community::..</h2>
                        <p style="text-align: justify">
                            Recruiting a developer is often a headache for businesses in an ever-changing digital marketplace.<br><br>
                            Since then, the Wild Code School has moved into the market and offers intensive training as a web and/or mobile developer to provide professionals, in a minimum of time, <span class="pink_span">THE Wilders</span>.<br><br>

                            <span class="pink_span">Each Wilder</span> is a rare commodity, a kind of 21st century <span class="pink_span">SUPERHERO</span>.<br>
                            He has <span class="pink_span">powers</span> that other human beings do not possess, including a <span class="pink_span">SUPER-INTELLIGENCE</span>, an extraordinary <span class="pink_span">HUMANISM</span> and a pronounced taste for <span class="pink_span">CLEAN SOCKS</span>.<br><br>

                            In this regard, the students of the Wild Code School take off their shoes before entering the school.
                            To take off one's shoes is to free oneself from the shackles of traditional education, which encloses, formats, and often prevents one from expressing oneself.
                            When the feet are free, the mind is too !</p>

                        <p style="text-align: justify">The Wild Code School of LIlle is currently thinking about changing the profile of its students. <br>
                            More freedom ! <span class="pink_span">Students in UNDERPANTS in order to code</span>.<br><br></p>
                    </div>
                    <div class="col-md-6">
                        <img class="img-responsive w-100 h-100" src="public/slippresentation.gif" alt="man_underpants">
                    </div>
                </div>
                <hr color="black">
            </div>
        </section>

        <section id="recruit">
            <div class="container">
                <div class="row">
                    <div class="col-md">
                        <figure>
                            <img class="img-responsive w-100 h-60" src="public/underpantsdance.gif" alt="man_underpants">
                            <figcaption style="text-align:center; font-weight:bold;">..::A happy Wilder during work::..</figcaption>
                        </figure>

                    </div>
                    <div class="col-md background_case">
                        <h2 style="padding-top: 15px; text-align:center; color:pink">..::Recruit a Wilder for only 3000e::..</h2>
                        <p style="text-align: justify">If you're looking for a <span class="pink_span">competent developer</span>, who will thrill your soul and <span class="pink_span">bring the joy</span> you've been craving for so long time, do not hesitate, <span class="pink_span">adopt one</span> here.</p>
                        <img class="logo" style="width: 150px;" src="public/adoptawilderlogo3.jpg" alt="logo adopte1wilder">
                        <p style="text-align: justify">It will <span class="pink_span">only cost you</span> the modest bonus of an amount of <span class="pink_span">3000 euros monthly</span> (or slightly less depending on its freshness ...)</p>
                    </div>
                </div>
                <hr color="black">
            </div>
        </section>

        <?php include("footer.php") ?>
		<script>
			alert("Be careful you enter a sensitive zone");
			alert("Are you certain you want to enter here ?");
			alert("Are you sexy at least ?");
			alert("Do you want to come with me tonight ?");
			alert("Are you a girl ?");
			alert("Hooooo.. a boy ?!");
			alert("Ok I see, you are really determined..");
			alert("Ok you can enter !");
			
			
		</script>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>

