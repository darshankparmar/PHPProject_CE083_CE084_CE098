<div class="container-fluid" style="margin-top:98px">
	
	<div class="col-lg-12">
		<div class="row">
			<!-- FORM Panel -->
			<div class="col-md-4">
			<form action="" id="manage-menu">
				<div class="card mb-3">
					<div class="card-header" style="background-color: rgb(111 202 203);">
						Create New Item
				  	</div>
					<div class="card-body">
							<div class="form-group">
								<label class="control-label">Name: </label>
								<input type="text" class="form-control" name="name">
							</div>
							<div class="form-group">
								<label class="control-label">Description: </label>
								<textarea cols="30" rows="3" class="form-control" name="description"></textarea>
							</div>
                            <div class="form-group">
								<label class="control-label">Price</label>
								<input type="number" class="form-control" name="price">
							</div>	
							<div class="form-group">
								<label class="control-label">Category: </label>
								<select name="category_id" id="category_id" class="custom-select browser-default">
                                <?php
                                    $catsql = "SELECT * FROM `categories`"; 
                                    $catresult = mysqli_query($conn, $catsql);
                                    while($row = mysqli_fetch_assoc($catresult)){
                                        $catId = $row['categorieId'];
                                        $catName = $row['categorieName'];
                                        echo '<option value="' .$catId. '">' .$catName. '</option>';
                                    }
                                ?>
								</select>
							</div>
							
							<div class="form-group">
								<label for="" class="control-label">Image</label>
								<input type="file" class="form-control" name="img">
							</div>
							<!-- <div class="form-group">
								<img src="" alt="" id="cimg">
							</div> -->
					</div>
							
					<div class="card-footer">
						<div class="row">
							<div class="col-md-12">
								<button class="btn btn-sm btn-primary col-sm-3 offset-md-3"> Save</button>
								<button class="btn btn-sm btn-default col-sm-3" type="button"> Cancel</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			</div>
			<!-- FORM Panel -->

			<!-- Table Panel -->
			<div class="col-md-8">
				<div class="card">
					<div class="card-body">
						<table class="table table-bordered table-hover mb-0">
							<thead style="background-color: rgb(111 202 203);">
								<tr>
									<th class="text-center" style="width:7%;">Cat. Id</th>
									<th class="text-center">Img</th>
									<th class="text-center" style="width:58%;">Item Detail</th>
									<th class="text-center" style="width:18%;">Action</th>
								</tr>
							</thead>
							<tbody>
                            <?php
                                $sql = "SELECT * FROM `pizza`";
                                $result = mysqli_query($conn, $sql);
                                while($row = mysqli_fetch_assoc($result)){
                                    $pizzaId = $row['pizzaId'];
                                    $pizzaName = $row['pizzaName'];
                                    $pizzaPrice = $row['pizzaPrice'];
                                    $pizzaDesc = $row['pizzaDesc'];
                                    $pizzaCategorieId = $row['pizzaCategorieId'];

                                    echo '<tr>
                                            <td class="text-center">' .$pizzaCategorieId. '</td>
                                            <td>
                                                <img src="/OnlinePizzaDelivery/img/pizza-'.$pizzaId. '.jpg" alt="image for this item" width="150px" height="150px">
                                            </td>
                                            <td>
                                                <p>Name : <b>' .$pizzaName. '</b></p>
                                                <p>Description : <b class="truncate">' .$pizzaDesc. '</b></p>
                                                <p>Price : <b>' .$pizzaPrice. '</b></p>
                                            </td>
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
			<!-- Table Panel -->
		</div>
	</div>	

</div>