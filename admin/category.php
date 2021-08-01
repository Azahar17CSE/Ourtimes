<?php
  include "includes/header.php";  
?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <span class="nav-tabs-title">All Category List:</span>
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#profile" data-toggle="tab">
                            <i class="material-icons">bug_report</i> Category
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="profile">
                      <!-- <table class="table">
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="" checked>
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                            </td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="" checked>
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Create 4 Invisible User Experiences you Never Knew About</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                        </tbody>
                      </table> -->

                      <table class="table table-hover">
                    <thead class="text-warning">
                      <th>Serial</th>
                      <th>Category_Name</th>
                      <th>Cat_Des</th>
                      <th>Action</th>
                    </thead>
                    <tbody>

            		<?php 
						$query  = "SELECT * FROM category";
						$result = mysqli_query($db,$query);
						$i=0;
						while($row = mysqli_fetch_assoc($result)){

							$cat_id 			= $row['cat_id'];
							$cat_name 			= $row['cat_name'];
							$cat_description 	= $row['cat_description'];
							$i++;
						?>
						<tr>
						<td><?php echo "$i"; ?></td>
						<td><?php echo "$cat_name"; ?></td>
						<td><?php echo "$cat_description"; ?></td>
						<td class="td-actions text-right">
							<a href="category.php?edit_id=<?php echo "$cat_id" ?>">
							<i class="material-icons">edit</i>
							</a></li>
							<a href="category.php?cat_id=<?php echo "$cat_id" ?>">
							<i class="material-icons">delete</i>
							</a></li>
						</td>
						</tr>
						<?php
						}
					?>
                     
                    </tbody>
                  </table>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Add New Category</h4>
                  
                </div>
                <div class="card-body table-responsive">
                 <form method="POST">
					<div class="form-group">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="bmd-label-floating" for="">Add Category</label>
									<input type="text" name="cat_name" class="form-control">
								</div>
							</div>
						</div>
						
					</div>
					<div class="form-group">
						<label for="">Category Short Description</label>
						<input type="text" name="cat_description" class="form-control">
					</div>
						<button type="submit" name="cat_submit" class="btn btn-primary">Submit</button>
				</form>
				<!-- add new category -->
				<?php 
    					if(isset($_POST['cat_submit'])){

    						$cat_name         = $_POST['cat_name'];
    						$cat_description  = $_POST['cat_description'];

    						if (empty($cat_name) || empty($cat_description)) {
    							echo "<div class='alert alert-danger'>Please Fill Up The All Information</div>";
    						}
    						else{
    							$query = "INSERT INTO category(cat_name, cat_description) VALUES('$cat_name', '$cat_description')";
	    						$result = mysqli_query($db,$query);

	    						if($result){
	    							header('location:category.php');
	    						}
	    						else{
	    							echo "category not inserted".mysql_error($db);
	    						}
    						}

    					}
    				?>
                </div>

                <!---edit category option sart here--->
    			<?php 
    				if(isset($_GET['edit_id'])){
    					$cat_edit_id = $_GET['edit_id'];
    					$query  = "SELECT * FROM category WHERE cat_id='$cat_edit_id'";
    					$result = mysqli_query($db,$query);

    					while($row = mysqli_fetch_assoc($result)){
    						$edit_cat_name 			= $row['cat_name'];
    						$edit_cat_description 	= $row['cat_description'];
    					}

    				?>
    					<div class="card" style="margin: 40px 0 0 0">
    						<div class="card-header" style="background: #4e73df; color: white;">
    							<h4>Edit category</h4>
    						</div>
    						<div class="card-body">
    							<form method="POST">
								<div class="form-group">
								<label for="">Edit Category</label>
								<input type="text" name="edit_cat_name" value=<?php echo "$edit_cat_name" ?> class="form-control" placeholder="Enter a new Category">
								</div>
								<div class="form-group">
									<label for="">Category Short Description</label>
									<input type="text" name="edit_cat_description" value=<?php echo "$edit_cat_description" ?> class="form-control" placeholder="Enter Category Description(limit:255)">
								</div>
									<button type="submit" name="edit_cat_submit" class="btn btn-primary">Submit</button>
								</form>
    						</div>
                            <!---category values update here--->
                            <?php 
                            if(isset($_POST['edit_cat_submit'])){
                                $edit_cat_name          = $_POST['edit_cat_name'];
                                $edit_cat_desc          = $_POST['edit_cat_description'];

                                $query ="UPDATE category SET cat_name='$edit_cat_name', cat_description='$edit_cat_desc' WHERE cat_id='$cat_edit_id'";
                                $result = mysqli_query($db,$query);
                                if($result){
                                    header('location:category.php');
                                }
                                else{
                                    echo "category value update error".mysqli_error($db);
                                }
                            }

                            ?>
    						
    					</div>
    				<?php
    				}
    			?>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- /.container-fluid -->
<!----category delete functionality here---->
    <?php 

    	if(isset($_GET['cat_id'])){
    		$del_id 	= $_GET['cat_id'];
            $table ='category'; $table_id='cat_id'; $redirect_page='category.php';

    		delete($del_id, $table, $table_id, $redirect_page);
    	}
    ?>
    </div>
<!-- End of Main Content -->
<?php
  include "includes/footer.php";
?>