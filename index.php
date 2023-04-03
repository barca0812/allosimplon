<?php
session_start();
include 'assets/includes/navbar.php';
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
<?php
//connexion bdd
include 'assets/includes/config.php';

$req = $conn->prepare("SELECT * FROM film");
$req->execute();
$data = $req->fetchAll(PDO::FETCH_ASSOC);


?>

<div class="container-fluid" style="background-color: #F39C12">
    <div class="row">
        <div class="col">
            <h1>Nouveautés</h1>

        </div>
    </div>
</div>
<div class="row" style="background-color:#FDFEFE">

    <div class="col">
        <div id="carouselnouveautés" class="carousel slide">
            <div class="carousel-indicators" style="padding-top: 30px; padding-bottom:30px">
                <button type="button" data-bs-target="#carouselnouveautés" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselnouveautés" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselnouveautés" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselnouveautés" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselnouveautés" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner" style="padding-top: 30px; padding-bottom:30px">
                <?php
                foreach ($data as $key => $film) {

                    if ($key == 0) {
                        $class = 'active';
                    } else {
                        $class = '';
                    }

                    if ($key == '0') {
                ?>
                        <div class=" carousel-item active">
                            <div class="d-flex justify-content-center"><a href="film.php?id_film=<?php echo $film['id_film']; ?>"><img src="./assets/images/affiche de film/<?php echo $film['image_film']; ?> " width="auto" height="400px"></a></div>
                        </div>

                    <?php
                    } else {
                    ?>
                        <div class=" carousel-item ">
                            <div class="d-flex justify-content-center"><a href="film.php?id_film=<?php echo $film['id_film']; ?>"><img src="./assets/images/affiche de film/<?php echo $film['image_film']; ?> " width="auto" height="400px"></a></div>
                        </div>
                    <?php
                    }
                    ?>

                <?php
                }
                ?>
            </div>
            <button class="carousel-control-prev " type="button" data-bs-target="#carouselnouveautés" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselnouveautés" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
<div class="container-fluid" style="background-color: #F39C12">
    <div class="row">
        <div class="col">
            <h1>Comique</h1>
        </div>

    </div>
    <div class="row" style="background-color:#FDFEFE">

        <div class="col">
            <div id="carouselcomique" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#comique" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#comique" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#comique" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#comique" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#comique" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner" style="padding-top: 30px; padding-bottom:30px">

                    <div class=" carousel-item active">
                        <div class="d-flex justify-content-center"><img src="./assets/images/affiche de film/l-annee-du-requin.jpg" width="auto" height="400px"></div>
                    </div>

                    <div class="carousel-item">
                        <div class="d-flex justify-content-center"><img src="./assets/images/affiche de film/le petit piaf.jpg" width="auto" height="400px"></div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center"><img src="./assets/images/affiche de film/pourris-gatés.jpg" width="auto" height="400px"></div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center"> <img src="./assets/images/affiche de film/reste-un-peu.jpg" width="auto" height="400px"></div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center"><img src="./assets/images/affiche de film/un-homme-heureux.jpg" width="auto" height="400px"></div>
                    </div>
                </div>
                <button class="carousel-control-prev " type="button" data-bs-target="#carouselcomique" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselcomique" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

            </div>
        </div>
    </div>
</div>
</div>
<div class="container-fluid" style="background-color: #F39C12">
    <div class="row">
        <div class="col">
            <h1>Policier</h1>

        </div>
    </div>
    <div class="row" style="background-color:#FDFEFE">

        <div class="col">
            <div id="carouselpolicier" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#policier" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#policier" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#policier" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#policier" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#policier" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner" style="padding-top: 30px; padding-bottom:30px">

                    <div class=" carousel-item active">
                        <div class="d-flex justify-content-center"><img src="./assets/images/affiche de film/Le-secret-de-la-cite-perdue.jpg" width="auto" height="400px"></div>
                    </div>

                    <div class="carousel-item">
                        <div class="d-flex justify-content-center"><img src="./assets/images/affiche de film/pathaan.jpg" width="auto" height="400px"></div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center"><img src="./assets/images/affiche de film/stranger.jpg" width="auto" height="400px"></div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center"> <img src="./assets/images/affiche de film/suspectnumeroun.jpg" width="auto" height="400px"></div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center"><img src="./assets/images/affiche de film/novembre.jpg" width="auto" height="400px"></div>
                    </div>
                </div>
                <button class="carousel-control-prev " type="button" data-bs-target="#carouselpolicier" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselpolicier" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

            </div>
        </div>
    </div>
</div>
</div>



<div class="container-fluid" style="background-color: #F39C12">
    <div class="row">
        <div class="col">
            <h1>Action</h1>

        </div>
    </div>
    <div class="row" style="background-color:#FDFEFE">

        <div class="col">
            <div id="carouselaction" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#action" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#action" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#action" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#action" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#action" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner" style="padding-top: 30px; padding-bottom:30px">

                    <div class=" carousel-item active">
                        <div class="d-flex justify-content-center"><img src="./assets/images/affiche de film/creed3.jpg" width="auto" height="400px"></div>
                    </div>

                    <div class="carousel-item">
                        <div class="d-flex justify-content-center"><img src="./assets/images/affiche de film/top-gun.jpg" width="auto" height="400px"></div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center"><img src="./assets/images/affiche de film/thor.jpeg" width="auto" height="400px"></div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center"> <img src="./assets/images/affiche de film/Le-secret-de-la-cite-perdue.jpg" width="auto" height="400px"></div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center"><img src="./assets/images/affiche de film/black-adam.jpg" width="auto" height="400px"></div>
                    </div>
                </div>
                <button class="carousel-control-prev " type="button" data-bs-target="#carouselaction" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselaction" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

            </div>
        </div>
    </div>
</div>
</div>
<?php
include 'assets/includes/footer.php';
?>