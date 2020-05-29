<!DOCTYPE html>
<html lang="en">

<head>

  <?php
  require_once "helpers/hp_head.php";
  ?>

  <title>Bloop | </title>


</head>




<body>

  <!--NAV-->
  <?php
  require_once "components/cp_nav.php";
  ?>
  <!--/NAV-->

  <main class="alturaMain text-white bg-30 d-flex flex-column align-items-start">
    <article class="container-fluid p-0 mb-5">
      <div id="back2" class="imgCategoriasCrime mt-0">
        <section class="row m-0 pt-4 pb-4 fade">
          <span class="col-2"></span>

          <div class="col-8 align-self-center pl-0 pr-0">
            <p class="m-0 h1 text-center">Crime</p>
          </div>
          <div class="col-2 text-left pr-0 pl-0 d-flex">
            <button type="button" class="btn p-0" data-toggle="modal" data-target="#basicExampleModal">
              <i class="fas fa-sliders-h fa-2x" style="color: white;"></i>
            </button>
          </div>

        </section>

        <div class="container-fluid alturaCategorias backgroundCategorias">
          <div class="row pb-2 w-50 mx-auto">
            <p class="col-12 m-0 text-center font-weight-bold" style="background-image: linear-gradient(to right, rgba(0,0,0,0),rgba(234,178,0,0.7),rgba(0,0,0,0)); color: black">Featured:</p>
          </div>
          <div class="row pb-2">
            <h3 class="col-12 m-0 text-center font-weight-bold" style="font-size: 3rem">Gone Girl</h3>
          </div>
          <div class="row pb-2">
            <p class="col-12 m-0 text-center">2014</p>
          </div>
          <div class="row pb-2 mb-5">
            <div class="col-3 text-center pr-0">
              <p class="m-0">Drama</p>
            </div>
            <div class="col-1">
              <p>&bull;</p>
            </div>
            <div class="col-4 p-0 text-center">
              <p class="m-0">Mistery</p>
            </div>
            <div class="col-1">
              <p>&bull;</p>
            </div>
            <div class="col-3 text-center pl-0">
              <p class="m-0">Thriller</p>
            </div>
          </div>

        </div>
      </div>
      <div class="col-10 mx-auto">
        <p>In Carthage, Mo., former New York-based writer Nick Dunne (Ben Affleck) and his glamorous wife Amy (Rosamund Pike) present a portrait of a blissful marriage to the public. However, when Amy goes missing on the couple's fifth wedding anniversary, Nick becomes the prime suspect in her disappearance. The resulting police pressure and media frenzy cause the Dunnes' image of a happy union to crumble, leading to tantalizing questions about who Nick and Amy truly are.</p>

      </div>
      <div class="container-fluid mt-5 linksCategorias">
        <a href="playerFightClub.html">
          <div class="row mt-2 mb-2 bg-preto">
            <div class="col-4 p-0"><img class="tamanhoImagem" src="imagens/categorias/crime/fightclub/thumb5v2.jpg"></div>
            <div class="col-8 d-flex align-items-start justify-content-center flex-column">
              <p class="m-0 font-weight-bold mobileCategoriasTit" style="font-size: 2rem">Fight Club <span class="text-dourado">&bull;</span> 1999</p>
              <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Director</span> : David Fincher</p>
              <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Cast</span> : Brad Pitt, Edward Norton, Helena Carter, Jared Leto, etc...</p>
              <p class="m-0 mobileCategoriasTit"><i class="far fa-star text-dourado"></i> 8.8</p>
            </div>
          </div>
        </a>
        <a href="playerBatman.html">
          <div class="row mt-2 mb-2 bg-preto">
            <div class="col-4 p-0"><img class="tamanhoImagem" src="imagens/categorias/crime/thedarknight/thumb4v2.jpg"></div>
            <div class="col-8 d-flex align-items-start justify-content-center flex-column" style="font-size: 1rem;">
              <p class="m-0 font-weight-bold mobileCategoriasTit" style="font-size: 2rem">Batman:The Dark Knight <span class="text-dourado">&bull;</span> 2008</p>
              <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Director</span> : Christopher Nolan</p>
              <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Cast</span> : Christian Bale, Heath Ledger, Gary Oldman, etc...</p>
              <p class="m-0 mobileCategoriasTit"><i class="far fa-star text-dourado"></i> 9</p>
            </div>
          </div>
        </a>


      </div>





    </article>

    <?php
    require_once "components/cp_footer.php"
    ?>


    <div class="modal" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content bg-preto">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Filter</h5>
            <button type="button" class="close text-dourado" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body container-fluid">
            <div class="row m-2">
              <p class="col-6 mb-0 d-flex align-items-center" style="border-bottom: 1px solid white">Date</p>
              <div class="col-6 d-flex align-items-center justify-content-end">
                <select class="mdb-select md-form">
                  <option value="" disabled selected>Default</option>
                  <option value="1">Old</option>
                  <option value="2">Today</option>
                  <option value="3">New</option>
                </select>
              </div>
            </div>

            <div class="row m-2">
              <p class="col-6 mb-0 d-flex align-items-center" style="border-bottom: 1px solid white">Quality</p>
              <div class="col-6 d-flex align-items-center justify-content-end">
                <select class="mdb-select md-form">
                  <option value="" disabled selected>Default</option>
                  <option value="1">480p</option>
                  <option value="2">720p</option>
                  <option value="3">1080p</option>
                </select>
              </div>
            </div>

            <div class="row m-2">
              <p class="col-6 mb-0 d-flex align-items-center" style="border-bottom: 1px solid white">Type</p>
              <div class="col-6 d-flex align-items-center justify-content-end">
                <select class="mdb-select md-form">
                  <option value="" disabled selected>Default</option>
                  <option value="1">Movies</option>
                  <option value="2">Shows</option>
                </select>
              </div>
            </div>



          </div>
          <div class="modal-footer">

            <button type="button" class="btn bg-black text-white" data-dismiss="modal">Close</button>
            <button type="button" class="btn bg-30" data-dismiss="modal" style="color: #eab200">Save changes</button>


          </div>
        </div>
      </div>
    </div>
  </main>



  <article class="navBotttom container-fluid fixed-bottom navbar navbar-dark bg-preto justify-content-center">
    <div class="row w-100 pt-2 pb-2 text-center">

      <div class="col-4 p-0">
        <a href="myaccount.html"><img class="userLogo" src="Imagens/user_branco.png" alt=""></a>
      </div>

      <div class="col-4 p-0">
        <a href="index.html"><i class="fas fa-home fa-2x" style="color:white"></i></a>
      </div>

      <div class="col-4 p-0">
        <a href="search.html"><i class="fas fa-search fa-2x" style="color:white"></i></a>
      </div>
    </div>
  </article>

  <?php
  require_once "helpers/hp_js.php"
  ?>






</body>

</html>