<!-- index page -->


<!-- header page included here -->
<?php include 'header.php';?>



<!-- Container (Products Section) -->
<div class="container-fluid1 text-left products">
  <div class="row text-center">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="../img/converse2.png"
        onmouseover="this.src='../img/converse1.png'"
        onmouseout="this.src='../img/converse2.png'"
        onclick="window.location='converseallstar.php'"
         alt="image" width="400" height="300">
        <p><strong>Converse All-Star Cluck Taylor</strong></p>
        <p>£65.00</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="../img/boost2.png"
        onmouseover="this.src='../img/boost1.png'"
        onmouseout="this.src='../img/boost2.png'"
        onclick="window.location='adidasboost.php'"
         alt="image" width="400" height="300">
        <p><strong>Addidas Boost</strong></p>
        <p>£95.00</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="../img/airmax2.png"
        onmouseover="this.src='../img/airmax1.png'"
        onmouseout="this.src='../img/airmax2.png'"
        onclick="window.location='nikeairmax.php'"
         alt="image" width="400" height="300">
        <p><strong>Nike Air-Max</strong></p>
        <p>£80.00</p>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid1 text-left products">
  <div class="row text-center">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="../img/nikeshoxR42.png"
        onmouseover="this.src='../img/nikeshoxR41.png'"
        onmouseout="this.src='../img/nikeshoxR42.png'"
        onclick="window.location='nikeshox.php'"
         alt="image" width="400" height="300">
        <p><strong>Nike Shox R4</strong></p>
        <p>£85.00</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail productbox">
        <img src="../img/pumaralfsampson2.png"
        onmouseover="this.src='../img/pumaralfsamson1.png'"
        onmouseout="this.src='../img/pumaralfsampson2.png'"
        onclick="window.location='pumaralf.php'"
         alt="image" width="400" height="300">
        <p><strong>Puma Ralf Sampson</strong></p>
        <p>£85.00</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail productbox">
        <img src="../img/vansoldskool2.png"
        onmouseover="this.src='../img/vansoldskool.png'"
        onmouseout="this.src='../img/vansoldskool2.png'"
        onclick="window.location='vansoldskool.php'"
         alt="image" width="400" height="300">
        <p><strong>Vans Old Skool</strong></p>
        <p>£65.00</p>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid1 text-left products">
  <div class="row text-center">
    <div class="col-sm-4">
      <div class="thumbnail productbox">
        <img src="../img/nikelebron2.png"
        onmouseover="this.src='../img/nikelebron1.png'"
        onmouseout="this.src='../img/nikelebron2.png'"
        onclick="window.location='nikelebron.php'"
         alt="image" width="400" height="300">
        <p><strong>Nike Lebron 17</strong></p>
        <p>£110.00</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail productbox">
        <img src="../img/pumathunderxferrari2.png"
        onmouseover="this.src='../img/pumathunderxferrari1.png'"
        onmouseout="this.src='../img/pumathunderxferrari2.png'"
        onclick="window.location='pumathunder.php'"
         alt="image" width="400" height="300">
        <p><strong>Puma Thunder X Ferrari</strong></p>
        <p>£85.00</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail productbox">
        <img src="../img/airjordan32.png"
        onmouseover="this.src='../img/airjordan31.png'"
        onmouseout="this.src='../img/airjordan32.png'"
        onclick="window.location='airjordan3.php'"
         alt="image" width="400" height="300">
        <p><strong>Air Jordan 3</strong></p>
        <p>£165.00</p>
      </div>
    </div>
  </div>
</div>



<!-- Next/Previous page Button -->

<button class="previousbutton button1" onClick="window.location='product1.php';">Previous</button>

<button class="nextbutton button1" onClick="window.location='product3.php';">Next</button>



<!-- Container (Pagination) -->
<div class="center">
<ul class="pagination">
  <li><a href="product1.php">1</a></li>
  <li class="active"><a href="product2.php">2</a></li>
  <li><a href="product3.php">3</a></li>
  <li class="disabled"><a href="#">4</a></li>
  <li class="disabled"><a href="#">5</a></li>
</ul>
</div>













<!-- footer page inclided here -->
<?php include 'footer.php'?>