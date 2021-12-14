<!-- index page -->


<!-- header page included here -->
<?php include 'header.php';?>

<!-- Container (Products Section) -->
<div class="container-fluid1 text-left products">
  <div class="row text-center">
    <div class="col-sm-4">
      <div class="thumbnail productbox">
        <img src="../img/nikekyrie62.png"
        onmouseover="this.src='../img/nikekyrie61.png'"
        onmouseout="this.src='../img/nikekyrie62.png'"
        onclick="window.location='nikekyrie.php'"
         alt="image" width="400" height="300">
        <p><strong>Nike Kyrie 6</strong></p>
        <p>£110.00</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail productbox">
        <img src="../img/converseunt1tl3d2.png"
        onmouseover="this.src='../img/converseunt1tl3d1.png'"
        onmouseout="this.src='../img/converseunt1tl3d2.png'"
        onclick="window.location='converseblack.php'"
         alt="image" width="400" height="300">
        <p><strong>Converse UNT1TL3D Black</strong></p>
        <p>£85.00</p>
      </div>
    </div>
    <div class="col-sm-4">
     <!-- <div class="thumbnail">
        <img src="#" alt="image" width="400" height="300">-->
        <p><strong></strong></p>
        <p></p>
      </div>
    </div>
  </div>
</div>


<!-- Next/Previous page Button -->

<button class="previousbutton button1" onClick="window.location='product2.php';">Previous</button>




<!-- Container (Pagination) -->
<div class="center">
<ul class="pagination">
  <li><a href="product1.php">1</a></li>
  <li><a href="product2.php">2</a></li>
  <li class="active"><a href="product3.php">3</a></li>
  <li class="disabled"><a href="">4</a></li>
  <li class="disabled"><a href="">5</a></li>
</ul>
</div>













<!-- footer page inclided here -->
<?php include 'footer.php'?>