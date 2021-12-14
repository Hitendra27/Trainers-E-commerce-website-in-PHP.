<!-- Products (Adidas Boost) -->

<!-- header page included here -->
<?php include 'header.php';?>



<!-- Container for Each Products-->
<div class="container store">
  <div class="row">
    <div class="col-sm-6">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="../img/boost1.png" alt="Adidas Boost">
    </div>

    <div class="item">
      <img src="../img/boost2.png" alt="Adidas Boost">
    </div>


  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>
    </div>
      </div>

    
    <div class="col-sm-6">
      <div class="row">
        <div class="store2">
        <img src="../img/Adidas-logo.jpg" alt="Image"  width="150" height="200">
        <h2>Adidas Boost</h2>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <p>Product Code: ISAB2020<P>
        <p class="price">GBP £95.00<p>
        <label>Quantity</label> 
        <input type="text" value="1">
        <button class="cartbutton button1" onClick="">Add to Cart</button>
              </div>
             </div>
            </div>
          </div>
         </div>
       </div>
    </div>
</div>




<!-- footer page included here -->
<?php include 'footer.php'?>