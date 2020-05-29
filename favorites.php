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
    <article class="container-fluid mainCentro p-0">



      <section class="row m-0 pt-4 pb-4 fade">
        <span class="col-2"></span>

        <div class="col-8 align-self-center pl-0 pr-0">
          <p class="m-0 h1 text-center">Favorites</p>
        </div>

      </section>


      <div class="container-fluid mt-5 mb-5 linksCategorias">


        <div class="row mt-2 mb-2 bg-preto">
          <div class="col-4 p-0"><img class="tamanhoImagem" src="imagens/categorias/crime/fightclub/thumb5v2.jpg"></div>
          <div class="col-6 col-md-7 d-flex align-items-start justify-content-center flex-column">
            <p class="m-0 font-weight-bold mobileCategoriasTit" style="font-size: 2rem">Fight Club <span class="text-dourado">&bull;</span> 1999</p>
            <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Director</span> : David Riboira</p>
            <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Cast</span> : Brad Pitt, Edward Norton, João Mota, etc...</p>
            <p class="m-0 mobileCategoriasTit"><i class="far fa-star text-dourado"></i> 8.8</p>
          </div>

          <div class="col-2 col-md-1 d-flex align-items-center">
            <a class="d-flex justify-content-center" onclick="slt('sneaker1');"><img id="sneaker1" class="w-75" src="Imagens/preenchido.png" alt=""></a>
          </div>
        </div>




        <div class="row mt-2 mb-2 bg-preto">
          <div class="col-4 p-0"><img class="tamanhoImagem" src="imagens/categorias/room.jpg"></div>
          <div class="col-6 col-md-7 d-flex align-items-start justify-content-center flex-column" style="font-size: 1rem;">
            <p class="m-0 font-weight-bold mobileCategoriasTit" style="font-size: 2rem">Room <span class="text-dourado">&bull;</span> 2015</p>
            <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Director</span> : Lenny Abrahamson</p>
            <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Cast</span> : Brie Larson, Jacob Tremblay, Sean Bridgers, etc...</p>
            <p class="m-0 mobileCategoriasTit"><i class="far fa-star text-dourado"></i> 8.1</p>
          </div>
          <div class="col-2 col-md-1 d-flex align-items-center">
            <a class="d-flex justify-content-center" onclick="slt('sneaker2');"> <img id="sneaker2" class="w-75" src="Imagens/preenchido.png" alt=""></a>
          </div>
        </div>


        <div class="row mt-2 mb-2 bg-preto">
          <div class="col-4 p-0"><img class="tamanhoImagem" src="imagens/categorias/wip.jpg"></div>
          <div class="col-6 col-md-7 d-flex align-items-start justify-content-center flex-column" style="font-size: 1rem;">
            <p class="m-0 font-weight-bold mobileCategoriasTit" style="font-size: 2rem">Whiplash <span class="text-dourado">&bull;</span> 2014</p>
            <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Director</span> : Damien Chazelle</p>
            <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Cast</span> : Miles Teller, J.K. Simmons, Melissa Benoist, etc...</p>
            <p class="m-0 mobileCategoriasTit"><i class="far fa-star text-dourado"></i> 8.4 </p>
          </div>
          <div class="col-2 col-md-1 d-flex align-items-center">
            <a class="d-flex justify-content-center" onclick="slt('sneaker3');"> <img id="sneaker3" class="w-75" src="Imagens/preenchido.png" alt=""></a>
          </div>
        </div>

        <div class="row mt-2 mb-2 bg-preto">
          <div class="col-4 p-0"><img class="tamanhoImagem" src="imagens/categorias/depart.jpg"></div>
          <div class="col-6 col-md-7 d-flex align-items-start justify-content-center flex-column" style="font-size: 1rem;">
            <p class="m-0 font-weight-bold mobileCategoriasTit" style="font-size: 2rem">Departed <span class="text-dourado">&bull;</span> 2006</p>
            <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Director</span> : Martin Scorsese</p>
            <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Cast</span> : Leonordo DiCaprio, Matt Damon, Jack Nicholson, etc...</p>
            <p class="m-0 mobileCategoriasTit"><i class="far fa-star text-dourado"></i> 7.8 </p>
          </div>
          <div class="col-2 col-md-1 d-flex align-items-center">
            <a class="d-flex justify-content-center" onclick="slt('sneaker4');"> <img id="sneaker4" class="w-75" src="Imagens/preenchido.png" alt=""></a>
          </div>
        </div>

        <div class="row mt-2 mb-2 bg-preto">
          <div class="col-4 p-0"><img class="tamanhoImagem" src="imagens/categorias/action/killbill/thumbv2.jpg"></div>
          <div class="col-6 col-md-7 d-flex align-items-start justify-content-center flex-column" style="font-size: 1rem;">
            <p class="m-0 font-weight-bold mobileCategoriasTit" style="font-size: 2rem">Kill Bill <span class="text-dourado">&bull;</span> 2003</p>
            <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Director</span> : Quentin Tarantino</p>
            <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Cast</span> : Uma Thurman, David Carradine, Daryl Hannah, etc...</p>
            <p class="m-0 mobileCategoriasTit"><i class="far fa-star text-dourado"></i> 8.1 </p>
          </div>
          <div class="col-2 col-md-1 d-flex align-items-center">
            <a class="d-flex justify-content-center" onclick="slt('sneaker5');"> <img id="sneaker5" class="w-75" src="Imagens/preenchido.png" alt=""></a>
          </div>
        </div>


        <div class="row mt-2 mb-2 bg-preto">
          <div class="col-4 p-0"><img class="tamanhoImagem" src="imagens/categorias/action/thematrix/thumbv2.jpg"></div>
          <div class="col-6 col-md-7 d-flex align-items-start justify-content-center flex-column" style="font-size: 1rem;">
            <p class="m-0 font-weight-bold mobileCategoriasTit" style="font-size: 2rem">The Matrix <span class="text-dourado">&bull;</span> 1999</p>
            <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Director</span> : Lana Wachowski</p>
            <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Cast</span> : Keanu Reeves, Carrie-Anne Moss, Laurence Fishburne, etc...</p>
            <p class="m-0 mobileCategoriasTit"><i class="far fa-star text-dourado"></i> 8.7 </p>
          </div>
          <div class="col-2 col-md-1 d-flex align-items-center">
            <a class="d-flex justify-content-center" onclick="slt('sneaker6');"> <img id="sneaker6" class="w-75" src="Imagens/preenchido.png" alt=""></a>
          </div>
        </div>





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
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
            <button type="button" class="btn bg-30" style="color: #eab200">Save changes</button>


          </div>
        </div>



      </div>
      <div class="modal-footer">

        <button type="button" class="btn bg-black text-white" data-dismiss="modal">Close</button>
        <button type="button" class="btn bg-30" style="color: #eab200">Save changes</button>


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