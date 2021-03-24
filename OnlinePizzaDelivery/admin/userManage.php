
<div class="container-fluid" style="margin-top:98px">
	
	<div class="row">
        <div class="col-lg-12">
            <button class="btn btn-primary float-right btn-sm" data-toggle="modal" data-target="#newUser"><i class="fa fa-plus"></i> New user</button>
        </div>
	</div>
	    <br>
	<div class="row">
		<div class="card col-lg-12">
			<div class="card-body">
				<table class="table-striped table-bordered col-md-12 text-center">
                    <thead style="background-color: rgb(111 202 203);">
                        <tr>
                            <th>UserId</th>
                            <th style="width:7%">Photo</th>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone No.</th>
                            <th>Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM users"; 
                            $result = mysqli_query($conn, $sql);
                            
                            while($row=mysqli_fetch_assoc($result)) {
                                $Id = $row['id'];
                                $username = $row['username'];
                                $firstName = $row['firstName'];
                                $lastName = $row['lastName'];
                                $email = $row['email'];
                                $phone = $row['phone'];
                                $userType = $row['userType'];
                                if($userType == 0) 
                                    $userType = "user";
                                else
                                    $userType = "Admin";
                                
                                $profilePhoto = base64_encode($row['profilePhoto']);
                                // if ($profilePhoto == NULL) {
                                //     $profilePhoto = $_SERVER['DOCUMENT_ROOT'].'/OnlinePizzaDelivery/img/profilePic.jpg';
                                // } 

                                echo '<tr>
                                        <td>' .$Id. '</td>
                                        <td><img src="data:image/*;base64,' .$profilePhoto. '" alt="image for this user" width="100px" height="100px"></td>
                                        <td>' .$username. '</td>
                                        <td>
                                            <p>First Name : <b>' .$firstName. '</b></p>
                                            <p>Last Name : <b>' .$lastName. '</b></p>
                                        </td>
                                        <td>' .$email. '</td>
                                        <td>' .$phone. '</td>
                                        <td>' .$userType. '</td>
                                        <td class="text-center">
                                            <div class="row mx-auto" style="width:112px">
													<button class="btn btn-sm btn-primary edit_user" type="button">Edit</button>
													<form action="partials/_userManage.php" method="POST">
														<button name="removeUser" class="btn btn-sm btn-danger" style="margin-left:9px;">Delete</button>
														<input type="hidden" name="Id" value="'.$Id. '">
													</form>
												</div>
                                        </td>
                                    </tr>';
                            }
                        ?>
                    </tbody>
		        </table>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="newUser" tabindex="-1" role="dialog" aria-labelledby="newUser" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: rgb(111 202 203);">
        <h5 class="modal-title" id="newUser">Create New User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="partials/_userManage.php" method="post">
              <div class="form-group">
                  <b><label for="username">Username</label></b>
                  <input class="form-control" id="username" name="username" placeholder="Choose a unique Username" type="text" required minlength="3" maxlength="11">
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <b><label for="firstName">First Name:</label></b>
                  <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required>
                </div>
                <div class="form-group col-md-6">
                  <b><label for="lastName">Last name:</label></b>
                  <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last name" required>
                </div>
              </div>
              <div class="form-group">
                  <b><label for="email">Email:</label></b>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email" required>
              </div>
              <div class="form-group row my-0">
                    <div class="form-group col-md-6 my-0">
                        <b><label for="phone">Phone No:</label></b>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon">+91</span>
                            </div>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter Phone No" required pattern="[0-9]{10}" maxlength="10">
                        </div>
                    </div>
                    <div class="form-group col-md-6 my-0">
                        <b><label for="userType">Type:</label></b>
                        <select name="userType" id="userType" class="custom-select browser-default" required>
                        <option value="0">User</option>
                        <option value="1">Admin</option>
                        </select>
                    </div>
              </div>
              <div class="form-group">
                  <b><label for="password">Password:</label></b>
                  <input class="form-control" id="password" name="password" placeholder="Enter Password" type="password" required data-toggle="password" minlength="4" maxlength="21">
              </div>
              <div class="form-group">
                  <b><label for="password1">Renter Password:</label></b>
                  <input class="form-control" id="cpassword" name="cpassword" placeholder="Renter Password" type="password" required data-toggle="password" minlength="4" maxlength="21">
              </div>
              <button type="submit" name="createUser" class="btn btn-success">Submit</button>
            </form>
      </div>
    </div>
  </div>
</div>