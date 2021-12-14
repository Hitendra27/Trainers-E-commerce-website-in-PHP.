<!-- Products (Nike Air-Max) -->

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
      <img src="../img/airmax1.png" alt="Nike Air Max">
    </div>

    <div class="item">
      <img src="../img/airmax2.png" alt="Nike Air Max">
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
        <img src="../img/nikelogo.png" alt="Image"  width="150" height="200">
        <h2>Nike Air-Max</h2>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <p>Product Code: ISNM2020<P>
        <p class="price">GBP £80.00<p>
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