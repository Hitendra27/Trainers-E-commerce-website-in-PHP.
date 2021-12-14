<!-- Product Page 1 -->


<!-- header page included here -->
<?php include 'header.php';?>




<!-- Container (Products Section) -->
<div class="container-fluid1 text-left products">
  <div class="row text-center">
    <div class="col-sm-4">
      <div class="thumbnail productbox">
        <img src="../img/airjordenblue2.png"
         onmouseover="this.src='../img/airjordenblue1.png'"
        onmouseout="this.src='../img/airjordenblue2.png'"
        onclick="window.location='airjordanblue.php'"
         alt="image" width="400" height="300">
        <p><strong>Air Jodan 1</strong></p>
        <p>£110.00</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail productbox">
        <img src="../img/addidassuperstar2.png"
         onmouseover="this.src='../img/addidassuperstar.png'"
        onmouseout="this.src='../img/addidassuperstar2.png'"
        onclick="window.location='addidassuperstar.php'"
         alt="image" width="400" height="300">
        <p><strong>Adidas Superstar</strong></p>
        <p>£85.00</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail productbox">
        <img src="../img/converseorage2.png"
        onmouseover="this.src='../img/converseorage1.png'"
        onmouseout="this.src='../img/converseorage2.png'"
        onclick="window.location='converseorange.php'"
         alt="image" width="400" height="300">
        <p><strong>Converse UNT1TL3D Orange</strong></p>
        <p>£75.00</p>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid1 text-left products">
  <div class="row text-center">
    <div class="col-sm-4">
      <div class="thumbnail productbox">
        <img src="../img/vanssport2.png"
         onmouseover="this.src='../img/vanssport.png'"
        onmouseout="this.src='../img/vanssport2.png'"
        onclick="window.location='vanssport.php'"
         alt="image" width="400" height="300">
        <p><strong>Vans Sport</strong></p>
        <p>£65.00</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail productbox">
        <img src="../img/nikeblazer2.png"
         onmouseover="this.src='../img/nikeblazer1.png'"
        onmouseout="this.src='../img/nikeblazer2.png'"
        onclick="window.location='nikeblazer.php'"
         alt="image" width="400" height="300">
        <p><strong>Nike Blazer</strong></p>
        <p>£85.00</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail productbox">
        <img src="../img/addidasam42.png"
         onmouseover="this.src='../img/addidasam4.png'"
        onmouseout="this.src='../img/addidasam42.png'"
        onclick="window.location='addidassam4.php'"
        alt="image" width="400" height="300">
        <p><strong>Adidas SAM 4</strong></p>
        <p>£90.00</p>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid1 text-left products">
  <div class="row text-center">
    <div class="col-sm-4">
      <div class="thumbnail productbox">
        <img src="../img/niketuned1.png"
         onmouseover="this.src='../img/niketuned12.png'"
        onmouseout="this.src='../img/niketuned1.png'"
        onclick="window.location='niketuned.php'"
        alt="image" width="400" height="300">
        <p><strong>Nike Tuned</strong></p>
        <p>£110.00</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail productbox">
        <img src="../img/nikezoomfreak2.png"
         onmouseover="this.src='../img/nikezoomfreak1.png'"
        onmouseout="this.src='../img/nikezoomfreak2.png'"
        onclick="window.location='nikefreak.php'"
         alt="image" width="400" height="300">
        <p><strong>Nike Zoom Freak</strong></p>
        <p>£95.00</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail productbox">
        <img src="../img/addidas2.png" 
        onmouseover="this.src='../img/addidas1.png'"
        onmouseout="this.src='../img/addidas2.png'"
        onclick="window.location='addidas3strips.php'"
         alt="image" width="400" height="300" transform="scale(1)" transition="all 0.4s ease-out 0s">
        <p><strong>Adidas 3 Strips</strong></p>
        <p>£79.00</p>
      </div>
    </div>
  </div>
</div>

<!-- Next/Previous page Button -->

<button class="nextbutton button1" onClick="window.location='product2.php';">Next</button>

<!-- Container (Pagination) -->
<div class="center">
<ul class="pagination">
  <li class="active"><a href="product1.php">1</a></li>
  <li><a href="product2.php">2</a></li>
  <li><a href="product3.php">3</a></li>
  <li class="disabled"><a href="#">4</a></li>
  <li class="disabled"><a href="#">5</a></li>
</ul>
</div>













<!-- footer page inclided here -->
<?php include 'footer.php'?>