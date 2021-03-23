<div class="container-fluid" style="margin-top:98px">
    <div class="col-lg-12">
        <div class="row">
            <!-- FORM Panel -->
            <div class="col-md-4">
                <form action="" id="manage-category">
                <div class="card">
                    <div class="card-header" style="background-color: rgb(111 202 203);">
                        Create New Category
                    </div>
                    <div class="card-body">
                        <input type="hidden" name="id">
                        <div class="form-group">
                            <label class="control-label">Category Name: </label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Category Desc: </label>
                            <input type="text" class="form-control" name="desc" required>
                        </div>   
                    </div>  
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-sm btn-primary col-sm-3 offset-md-4"> Create </button>
                                <!-- <button class="btn btn-sm btn-default col-sm-3" type="button"> Cancel</button> -->
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
            <!-- FORM Panel -->
    
            <!-- Table Panel -->
            <div class="col-md-8 mb-3">
                <div class="card">
                    <div class="card-body">
                    <table class="table table-bordered table-hover mb-0">
                        <thead style="background-color: rgb(111 202 203);">
                        <tr>
                            <th class="text-center">Id</th>
                            <th class="text-center">Name</th>
                            <th class="text-center" style="width:50%;">Desc</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $sql = "SELECT * FROM `categories`"; 
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_assoc($result)){
                                $catId = $row['categorieId'];
                                $catName = $row['categorieName'];
                                $catDesc = $row['categorieDesc'];

                                echo '<tr>
                                        <td class="text-center"><b>' .$catId. '</b></td>
                                        <td class="text-center">' .$catName. '</td>
                                        <td class="text-center">' .$catDesc. '</td>
                                        <td class="text-center">
                                            <button class="btn btn-sm btn-primary edit_cat" type="button">Edit</button>
                                            <button class="btn btn-sm btn-danger delete_cat" type="button">Delete</button>
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