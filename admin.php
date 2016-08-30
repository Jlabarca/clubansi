<?php
  require_once 'header.php';
?>
        <div class="page-title-container">
            <div class="page-title">
                <div class="container">
                    <h1 class="entry-title">Bienvenido al Club Ansi</h1>
                    <h1 class="username-title"><?php echo $_SESSION['nombre']." ".$_SESSION['apellidos']  ?>
                </div>
            </div>
        </div>

        <section id="content">
          <div class="col-sm-4"></div>

          <div class="col-sm-4">
            <a id = "man" href = "#" ><img src="images/ansi/couple.png"></a>
          </div>
          <div class="col-sm-4"></div>

          <a id = "man" href = "https://www.ansi.cl/" ><img src="images/ansi/slideshow_1.jpg"></a>
        </section>


        <link rel="stylesheet" href="css/productos.css">

        <br>
        <div class="row" style = "margin-left: 0px;">
          <h1 style = "text-align: center;">Productos recomendados para ti</h1>
          <div class="col-sm-2"></div>
          <div class="col-sm-2">
            <a href="https://www.ansi.cl/products/gourmet-cheesecake-protein-bar-chocolate-truffle" class="producto">
            <div>
              <img src="//cdn.shopify.com/s/files/1/0894/9982/products/Barras_Choco_ANSI_Chile_grande.png?v=1470757440" alt="Gourmet Cheesecake Protein Bar Chocolate Truffle"/>
            </div>
            <div>
               <span class="span_nombre_producto">Gourmet Cheesecake Protein Bar Chocolate Truffle</span>
               <span class="precio">$28.000</span> <span class="precio_antiguo">$29.990</span>
            </div>
           </a>
          </div>

          <div class="col-sm-2">
            <a href="https://www.ansi.cl/products/testavar-hd" class="producto">
            <div>
              <img src="//cdn.shopify.com/s/files/1/0894/9982/products/TESTAVAR_ANSI_TRANS_grande_810e2e84-1c15-4b99-b80b-1b1b1796dee1_grande.png?v=1469106679" alt="Gourmet Cheesecake Protein Bar Chocolate Truffle"/>
            </div>
            <div>
               <span class="span_nombre_producto">Testavar-HD• <strong id="STRONG_8">180 capsulas</strong></span>
               <span class="precio">$38.990</span>
            </div>
           </a>
          </div>

          <div class="col-sm-2">
            <a href="https://www.ansi.cl/products/betalean-sca" class="producto">
            <div>
              <img src="//cdn.shopify.com/s/files/1/0894/9982/products/etaLean_Black_Bottle_Mockup_grande_6ee8e4b4-c7e0-4765-a6a0-c8cb18abe41a_grande.png?v=1467897036" alt="Gourmet Cheesecake Protein Bar Chocolate Truffle"/>
            </div>
            <div>
               <span class="span_nombre_producto">BetaLean-Sca•  <strong id="STRONG_8">60 capsulas</strong></span>
               <span class="precio">$31.990</span>
            </div>
           </a>
          </div>

          <div class="col-sm-2">
            <a href="https://www.ansi.cl/products/creatina" class="producto">
            <div>
              <img src="//cdn.shopify.com/s/files/1/0894/9982/products/Creatine6000_500mg_grande.jpg?v=1469106669" alt="Gourmet Cheesecake Protein Bar Chocolate Truffle"/>
            </div>
            <div>
               <span class="span_nombre_producto">Creatine 6000• <strong id="STRONG_8">300g</strong></span>
               <span class="precio">$14.990</span>
            </div>
           </a>
          </div>


          <div class="col-sm-2"></div>
        </div>

  <br>


<?php
  require_once 'footer.php';
?>
