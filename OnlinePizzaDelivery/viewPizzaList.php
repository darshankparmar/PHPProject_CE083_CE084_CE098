<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title id="title">Category</title>
    <style>
    .jumbotron {
        padding: 2rem 1rem;
    }
    #cont {
        min-height : 570px;
    }
    </style>
</head>
<body>
    <?php include 'partials/_dbconnect.php';?>
    <?php require 'partials/_nav.php' ?>

    <div>&nbsp;
        <a href="index.php" class="active text-dark">
        <i class="fas fa-qrcode"></i>
            <span>All Category</span>
        </a>
    </div>

    <?php
        $id = $_GET['catid'];
        $sql = "SELECT * FROM `categories` WHERE categorieId = $id";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            $catname = $row['categorieName'];
            $catdesc = $row['categorieDesc'];
        }
    ?>
  
    <!-- Pizza container starts here -->
    <div class="container my-3" id="cont">
        <h2 class="text-center"><span id="title"></span></h2>
        <div class="row">
        <?php
            $id = $_GET['catid'];
            $sql = "SELECT * FROM `pizza` WHERE pizzaCategorieId = $id";
            $result = mysqli_query($conn, $sql);
            $noResult = true;
            while($row = mysqli_fetch_assoc($result)){
                $noResult = false;
                $pizzaId = $row['pizzaId'];
                $pizzaName = $row['pizzaName'];
                $pizzaPrice = $row['pizzaPrice'];
                $pizzaDesc = $row['pizzaDesc'];
            
                echo '<div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="card" style="width: 18rem;">
                            <img src="img/pizza-'.$pizzaId. '.jpg" class="card-img-top" alt="image for this pizza" width="249px" height="270px">
                            <div class="card-body">
                                <h5 class="card-title">' . substr($pizzaName, 0, 20). '...</h5>
                                <h6 style="color: #ff0000">Rs. '.$pizzaPrice. '/-</h6>
                                <p class="card-text">' . substr($pizzaDesc, 0, 29). '...</p>
                                <span id="pr'.$pizzaId. '" class="divpr">
                                    <button onclick="addToCart'.$pizzaId. '()" class="btn btn-primary cart">Add to Cart</button>
                                </span>
                                <a href="viewPizza.php?pizzaid=' . $pizzaId . '"><button class="btn btn-primary">Quick View</button></a>
                            </div>
                        </div>
                    </div>';
                ?>  <script>
                        function addToCart() {
                            document.getElementById("pr<?php echo $pizzaId; ?>").innerHTML = "Go to Cart";
                        }
                    </script><?php
            }
            if($noResult) {
                echo '<div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <p class="display-4">Sorry In this category No items available.</p>
                        <p class="lead"> We will update Soon.</p>
                    </div>
                </div> ';
            }
            else {
                ?><script> document.getElementById("title").innerHTML = "<?php echo $catname; ?>"; </script> <?php
            }
        ?>
        </div>
    </div>


    <?php require 'partials/_footer.php' ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>         
    <?php
        $sql = "SELECT * FROM `pizza` WHERE pizzaCategorieId = $id";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            $pizzaId = $row['pizzaId'];
            ?>  <script>
                    var sum = 0;
                    function addToCart<?php echo $pizzaId; ?>() {
                        document.getElementById("pr<?php echo $pizzaId; ?>").innerHTML = '<button onclick="" class="btn btn-primary cart">Go to Cart</button>';
                        sum = sum + 1;
                        document.getElementById('cart').innerHTML = sum;
                    }
                </script><?php
        }
    ?>
</body>
</html>