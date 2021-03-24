<div class="alert alert-info alert-dismissible fade show" role="alert" style="width:100%">
    <strong>Info!</strong> If problem is not related to the order then order id = 0	
    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span></button>
</div>

<div class="container-fluid">	
	<div class="row">
		<div class="card col-lg-12">
			<div class="card-body">
				<table class="table-striped table-bordered col-md-12 text-center">
                    <thead style="background-color: rgb(111 202 203);">
                        <tr>
                            <th>Id</th>
                            <th>UserId</th>
                            <th>Email</th>
                            <th>Phone No</th>
                            <th>Order Id</th>
                            <th>Message</th>
                            <th>datetime</th>
                            <th>Reply</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM contact"; 
                            $result = mysqli_query($conn, $sql);
                            
                            while($row=mysqli_fetch_assoc($result)) {
                                $contactId = $row['contactId'];
                                $userId = $row['userId'];
                                $email = $row['email'];
                                $phoneNo = $row['phoneNo'];
                                $orderId = $row['orderId'];
                                $message = $row['message'];
                                $time = $row['time'];

                                echo '<tr>
                                        <td>' .$contactId. '</td>
                                        <td>' .$userId. '</td>
                                        <td>' .$email. '</td>
                                        <td>' .$phoneNo. '</td>
                                        <td>' .$orderId. '</td>
                                        <td>' .$message. '</td>
                                        <td>' .$time. '</td>
                                        <td class="text-center">
                                            <button class="btn btn-sm btn-primary" type="button">Reply</button>
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