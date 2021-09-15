<?php 
include("header.php");

 ?>
<main>

  <!--CATEGORIAS-->
  <div class="container">
    <div class="row">

      <!--BARRAS-->
      <div class="col-lg-4 wow fadeIn" data-wow-delay="0.2s">

        <div class="widget-wrapper">
          <h4>Categorias:</h4>
          <br>
          <div class="list-group">
            <a href="#" class="list-group-item active">Destacados</a>
            <a href="#" class="list-group-item">Procesadores</a>
            <a href="#" class="list-group-item">Graficas</a>
            <a href="#" class="list-group-item">Discos Duros</a>
            <a href="#" class="list-group-item">Memorias Ram</a>
            <a href="#" class="list-group-item">Lista de partes</a>
          </div>
        </div>

       
      </div>

      <div class="col-lg-8">
        <div class="row wow fadeIn" data-wow-delay="0.4s">
          <div class="col-lg-12">
            <div class="divider-new">
              <h2 class="h2-responsive">Destacados</h2>
            </div>


            <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                <li data-target="#carousel-example-1z" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <img src="./imagenes/3.jpg">
                  <div class="carousel-caption">
                    <h4>Nuestros mejores productos</h4>
                    <br>
                  </div>
                </div>              
                <div class="carousel-item">
                  <img src="./imagenes/5.jpg" alt="Second slide">
                  <div class="carousel-caption">
                    <h4>Obten descuento!</h4>
                    <br>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="./imagenes/6.jpg" alt="Third slide">
                  <div class="carousel-caption">
                    <h4>Manejamos los mejores precios</h4>
                    <br>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
              </a>
              <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
              </a>
            </div>
          </div>
        </div>
        <br>
        <hr class="extra-margins">

        <div class="row">
          <div class="col-lg-4">
             <div class="view overlay hm-white-slight">
                <img src="https://m.media-amazon.com/images/I/51XoylGq9iL._AC_SY450_.jpg" class="img-fluid" alt="">
                <a href="#">
                  <div class="mask"></div>
                </a>
              </div>
            <div class="card  wow fadeIn" data-wow-delay="0.2s">
              <div class="view overlay hm-white-slight">
                <img src="" class="img-fluid" alt="">
                <a href="#">
                  <div class="mask"></div>
                </a>
              </div>
         
              <div class="card-block">
                <h4 class="card-title">Procesadores</h4>
                <p class="card-text">Actualizate a la Ultima generacion de procesadores</p>
                <a href="#" class="btn btn-default">Compralos ya <strong>Mas informacion</strong></a>
              </div>

            </div>
          </div>

          <div class="col-lg-4">
            <div class="view overlay hm-white-slight">
                <img src="https://static.bhphoto.com/images/images500x500/cyberpowerpc_gamer_master_gma9260cpg_ryzen_1618487277_1633994.jpg" class="img-fluid" alt="">
                <a href="#">
                  <div class="mask"></div>
                </a>
              </div>
            <div class="card  wow fadeIn" data-wow-delay="0.4s">
              <div class="view overlay hm-white-slight">
                <img src="" class="img-fluid" alt="">
                <a href="#">
                  <div class="mask"></div>
                </a>
              </div>

              <div class="card-block">
                <h4 class="card-title">Cajas</h4>
                <p class="card-text">Tu caja no tiene el sufiente RGB vamos por ella</p>
                <a href="#" class="btn btn-default">Compra Ya! <strong>mas informacion</strong></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card  wow fadeIn" data-wow-delay="0.6s">

              <div class="view overlay hm-white-slight">
                <img src="https://i.blogs.es/7412c9/610wtrwkngl._ac_sl1000_/450_1000.jpg" class="img-fluid" alt="">
                <a href="#">
                  <div class="mask"></div>
                </a>
              </div>
              <div class="card-block">
                <!--Title-->
                <h4 class="card-title">Graficas</h4>
                <!--Text-->
                <p class="card-text">Las mejores graficas calidad precio del mercado con nosotros la escaces no existe.</p>
                <a href="#" class="btn btn-default">Compra Ya! <strong>mas informacion</strong></a>
              </div>

            </div>
          </div>
        </div>

      </div>

    </div>
  </div>

</main>

<?php 
include("footer.php");

 ?>