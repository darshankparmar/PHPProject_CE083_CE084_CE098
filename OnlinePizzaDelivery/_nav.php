<?php 

echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">My Awesome Cart</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/OnlinePizzaDelivery/tracker">Tracker</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/OnlinePizzaDelivery/orderView/">Your Orders</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact Us</a>
          </li>
        </ul>
        <form method="get" action="/OnlinePizzaDelivery/search" class="form-inline my-2 my-lg-0 mx-3">
          <input class="form-control mr-sm-2" type="search" name="search" id="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>';
        
          // echo '<ul class="navbar-nav mr-2">
          //   <li class="nav-item dropdown">
          //     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"> Welcome </a>
          //     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          //       <a class="dropdown-item" href="logout.php">Logout</a>
          //     </div>
          //   </li>
          // </ul>';
        
          echo '<!-- Button trigger Login modal -->
          <button type="button" class="btn btn-success mx-2"  data-toggle="modal" data-target="#loginModal">Login</button>

          <!-- Button trigger Signup modal -->
          <button type="button" class="btn btn-success mx-2"  data-toggle="modal" data-target="#signupModal">SignUp</button>';
        
        echo '<button type="button" class="btn btn-secondary mx-2" id="popcart" data-container="body" data-html="true" data-toggle="popover" title="MyCart" data-placement="bottom" data-content="Bottom popover">
          Cart(<span id="cart">0</span>)
        </button>
      </div>
    </nav>';

    include '_loginModal.php';
    include '_signupModal.php';
?>
