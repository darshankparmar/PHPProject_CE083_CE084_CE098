
<div class="container-fluid" style="margin-top:98px">
	
	<div class="row">
        <div class="col-lg-12">
            <button class="btn btn-primary float-right btn-sm" id="new_user"><i class="fa fa-plus"></i> New user</button>
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
                                            <button class="btn btn-sm btn-primary edit_menu" type="button">Edit</button>
                                            <button class="btn btn-sm btn-danger delete_menu" type="button">Delete</button>
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

