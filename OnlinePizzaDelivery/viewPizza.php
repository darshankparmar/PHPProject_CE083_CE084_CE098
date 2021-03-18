<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
    <?php include '_dbconnect.php';?>
    <?php require '_nav.php' ?>

    <div class="container my-4">
        <div class="row jumbotron">
        <?php
            $pizzaId = $_GET['pizzaid'];
            $sql = "SELECT * FROM `pizza` WHERE pizzaId = $pizzaId";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)){
                $pizzaName = $row['pizzaName'];
                $pizzaPrice = $row['pizzaPrice'];
                $pizzaDesc = $row['pizzaDesc'];
                $pizzaCategorieId = $row['pizzaCategorieId'];
            }

        echo  '<div class="col-md-4">
                <img src="img/pizza-'.$pizzaId. '.jpg" width="249px" height="262px">
            </div>
            <div class="col-md-8 my-4">
                <h5>' . $pizzaName . '</h5>
                <h6 style="color: #ff0000">Rs. '.$pizzaPrice. '/-</h6>
                <p>' .$pizzaDesc .'</p>
                <h6> View </h6>
                <div>&nbsp;&nbsp;
                    <a href="viewPizzaList.php?catid=' . $pizzaCategorieId . '" class="active text-dark">
                    <i class="fas fa-qrcode"></i>
                        <span>All Pizza</span>
                    </a>
                </div>
                <div>&nbsp;&nbsp;
                    <a href="index.php" class="active text-dark">
                    <i class="fas fa-qrcode"></i>
                        <span>All Category</span>
                    </a>
                </div>
            </div>'
        ?>
        </div>
    </div>


    <?php require '_footer.php' ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>