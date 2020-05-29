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
    <article class="container-fluid p-0 mainCentro mb-5">
      <div class="inputSearch">

        <input type="text" name="search" placeholder="Tv Shows" class="bg-30 text-white p-2 mt-4 ml-2">

        <button type="button" class="btn" data-toggle="modal" data-target="#basicExampleModal">
          <i class="fas fa-sliders-h text-white"></i>
        </button>

        <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

      </div>

      <div class="container-fluid mt-5 linksCategorias">

        <a href="paginaserie.html">
          <div class="row mt-2 mb-2 bg-preto">
            <div class="col-4 p-0"><img class="tamanhoImagem" src="imagens/categorias/searchresultstvshows/search4.jpg"></div>
            <div class="col-8 d-flex align-items-start justify-content-center flex-column" style="font-size: 1rem;">
              <p class="m-0 font-weight-bold mobileCategoriasTit" style="font-size: 2rem">Breaking Bad <span class="text-dourado">&bull;</span> 2008</p>
              <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Director</span> : Vince Gilligan </p>
              <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Cast</span> : Bryan Cranston, Aaron Paul, Anna Gunn, etc...</p>
              <p class="m-0 mobileCategoriasTit"><i class="far fa-star text-dourado"></i> 9.5 </p>
            </div>
          </div>
        </a>
        <a href="paginaserieblackmirror.html">
          <div class="row mt-2 mb-2 bg-preto">
            <div class="col-4 p-0"><img class="tamanhoImagem" src="imagens/categorias/searchresultstvshows/search1.jpg"></div>
            <div class="col-8 d-flex align-items-start justify-content-center flex-column" style="font-size: 1rem;">
              <p class="m-0 font-weight-bold mobileCategoriasTit" style="font-size: 2rem">Black Mirror <span class="text-dourado">&bull;</span> 2011</p>
              <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Director</span> : Charlie Brooker</p>
              <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Cast</span> : Daniel Lapaine, Michaela Choela, etc...</p>
              <p class="m-0 mobileCategoriasTit"><i class="far fa-star text-dourado"></i> 8.9</p>
            </div>
          </div>
        </a>

        <a href="paginaserielovedeath.html">
          <div class="row mt-2 mb-2 bg-preto">
            <div class="col-4 p-0"><img class="tamanhoImagem" src="imagens/categorias/searchresultstvshows/search2.jpg"></div>
            <div class="col-8 d-flex align-items-start justify-content-center flex-column" style="font-size: 1rem;">
              <p class="m-0 font-weight-bold mobileCategoriasTit" style="font-size: 2rem">Love Death &amp; Robots <span class="text-dourado">&bull;</span> 2019</p>
              <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Director</span> : Tim Miller </p>
              <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Cast</span> : Scott Whyte, Nolan North, Matthew King, etc...</p>
              <p class="m-0 mobileCategoriasTit"><i class="far fa-star text-dourado"></i> 8.8 </p>
            </div>
          </div>
        </a>
        <a href="EE/Building2.html">
          <div class="row mt-2 mb-2 bg-preto">
            <div class="col-4 p-0"><img class="tamanhoImagem" src="imagens/categorias/searchresultstvshows/search3.jpg"></div>
            <div class="col-8 d-flex align-items-start justify-content-center flex-column" style="font-size: 1rem;">
              <p class="m-0 font-weight-bold mobileCategoriasTit" style="font-size: 2rem">BoJack Horseman <span class="text-dourado">&bull;</span> 2014</p>
              <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Director</span> : Raphael Bob-Waksberg </p>
              <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Cast</span> : Will Arnett, Amy Sedaris, Alison Brie, etc...</p>
              <p class="m-0 mobileCategoriasTit"><i class="far fa-star text-dourado"></i> 8.5 </p>
            </div>
          </div>
        </a>

        <a href="EE/Building2.html">
          <div class="row mt-2 mb-2 bg-preto">
            <div class="col-4 p-0"><img class="tamanhoImagem" src="imagens/categorias/searchresultstvshows/search5.jpg"></div>
            <div class="col-8 d-flex align-items-start justify-content-center flex-column" style="font-size: 1rem;">
              <p class="m-0 font-weight-bold mobileCategoriasTit" style="font-size: 2rem">After Life <span class="text-dourado">&bull;</span> 2019</p>
              <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Director</span> : Ricky Gervais </p>
              <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Cast</span> : Ricky Gervais, Tom Basden, Tony Way, etc...</p>
              <p class="m-0 mobileCategoriasTit"><i class="far fa-star text-dourado"></i> 8.7 </p>
            </div>
          </div>
        </a>
        <a href="EE/Building2.html">
          <div class="row mt-2 mb-2 bg-preto">
            <div class="col-4 p-0"><img class="tamanhoImagem" src="imagens/categorias/searchresultstvshows/search6.jpg"></div>
            <div class="col-8 d-flex align-items-start justify-content-center flex-column" style="font-size: 1rem;">
              <p class="m-0 font-weight-bold mobileCategoriasTit" style="font-size: 2rem">American Vandal <span class="text-dourado">&bull;</span> 2017</p>
              <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Director</span> : Dan Perrault</p>
              <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Cast</span> : Tyler Alvarez, Griffin Gluck, Jimmy Tatro, etc...</p>
              <p class="m-0 mobileCategoriasTit"><i class="far fa-star text-dourado"></i> 8.5 </p>
            </div>
          </div>
        </a>
        <a href="EE/Building2.html">
          <div class="row mt-2 mb-2 bg-preto">
            <div class="col-4 p-0"><img class="tamanhoImagem" src="imagens/categorias/searchresultstvshows/search7.jpg"></div>
            <div class="col-8 d-flex align-items-start justify-content-center flex-column" style="font-size: 1rem;">
              <p class="m-0 font-weight-bold mobileCategoriasTit" style="font-size: 2rem">Death Note <span class="text-dourado">&bull;</span> 2006</p>
              <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Director</span> :Mamoru Myano </p>
              <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Cast</span> : Mamoru Miyano, Brad Swaile, Vincent Tong, etc...</p>
              <p class="m-0 mobileCategoriasTit"><i class="far fa-star text-dourado"></i> 9.0 </p>
            </div>
          </div>
        </a>
        <a href="EE/Building2.html">
          <div class="row mt-2 mb-2 bg-preto">
            <div class="col-4 p-0"><img class="tamanhoImagem" src="imagens/categorias/searchresultstvshows/search8.jpg"></div>
            <div class="col-8 d-flex align-items-start justify-content-center flex-column" style="font-size: 1rem;">
              <p class="m-0 font-weight-bold mobileCategoriasTit" style="font-size: 2rem">Sherlock <span class="text-dourado">&bull;</span> 2010</p>
              <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Director</span> : Mark Gatiss </p>
              <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Cast</span> : Benedict Cumberbatch, Martin Freeman, Una Stubbs, etc...</p>
              <p class="m-0 mobileCategoriasTit"><i class="far fa-star text-dourado"></i> 9.2 </p>
            </div>
          </div>
        </a>
      </div>


    </article>

    <?php
    require_once "components/cp_footer.php"
    ?>

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