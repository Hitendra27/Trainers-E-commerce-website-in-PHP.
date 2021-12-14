<!-- header page -->



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sneakers Affinity</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap --->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- Css Link -->
  <link rel="stylesheet" href="../css/main.css"> 

  <!-- Google Fonts-->
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@600&family=Yantramanav:wght@500&display=swap" 
  rel="stylesheet">

  <!-- Add icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- JavaScript Link -->
  <script src="../javascript/javascript.js"></script>

  <!-- W3.js JavaScript Link -->
  <script src="https://www.w3schools.com/lib/w3.js"></script>

</head>

<body>
 
  <!-- Header  Section -->
    <div class="jumbotron">
      <div class="container text-center">
        <h1>Sneakers Affinity</h1>      
        <p>"shoes are boring, wear sneakers"</p>
      </div>
    </div>

     <!-- Nav-bar  Section -->
     <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="#">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="product1.php">Products</a></li>
            <li><a href="aboutus.php">Contact</a></li>
            <li><a href="sale.php">Sale</a></li>
          </ul>

                <ul class="nav navbar-nav navbar-right">
            <li><a href="register.php"><span class="glyphicon glyphicon-user"></span>Register</a></li>
            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
          </ul>
        </div>
      </div>
    </nav>


    <!-- Start of Search Button -->

        
  <form class="form search">
          <div class="input-group">
      <input type="text" class="form-control search" size="100" 
                placeholder="Search Sneakers" onkeyup="showResult(this.value)" required>
                <div id="livesearch"></div>
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger searchbtn" onkeyup="showResult(this.value)">Search</button>
      </div>
    </div>
  </form>

  
  <script>
function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>





         
           
            <!-- End of Search Button -->