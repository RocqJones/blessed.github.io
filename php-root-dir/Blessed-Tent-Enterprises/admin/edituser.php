<?php
  session_start();
  include("includes/dbh.inc.php");

  if (!isset($_SESSION['id'])) {
    header("Location: index.php");
  }

  $idUsers = $_REQUEST['user_id'];

  $result = mysqli_query($conn, "select idUsers, uidUsers, emailUsers, pwdUsers from users where idUsers='$idUsers'") or die ("query 1 incorrect.......");

  list($idUsers,$uidUsers,$emailUsers,$pwdUsers) = mysqli_fetch_array($result);

  if(isset($_POST['btn_save'])) 
  {

  $uidUsers = $_POST['uidUsers'];
  $emailUsers = $_POST['emailUsers'];
  $pwdUsers = $_POST['pwdUsers'];

  mysqli_query($conn,"update users set uidUsers='$uidUsers', emailUsers='$emailUsers', pwdUsers='$pwdUsers' where idUsers= '$idUsers'")or die("Query 2 is inncorrect..........");

  header("location: manageuser.php");
  mysqli_close($conn);
  }
  include "sidenav.php";
  include "topheader.php";
  ?>
        <!-- End Navbar -->
        <div class="content">
          <div class="container-fluid">
          <div class="col-md-5 mx-auto">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h5 class="title">Edit User</h5>
                </div>
                <form action="edituser.php" name="form" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  
                    <input type="hidden" name="idUsers" id="user_id" value="<?php echo $idUsers;?>" />
                      <div class="col-md-12 ">
                        <div class="form-group">
                          <label>User name</label>
                          <input type="text" id="first_name" name="uidUsers"  class="form-control" value="<?php echo $uidUsers; ?>" >
                        </div>
                      </div>

                      <div class="col-md-12 ">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email"  id="email" name="emailUsers" class="form-control" value="<?php echo $emailUsers; ?>">
                        </div>
                      </div>
                      <div class="col-md-12 ">
                        <div class="form-group">
                          <label >Password</label>
                          <input type="text" name="pwdUsers" id="password" class="form-control" value="<?php echo $pwdUsers; ?>">
                        </div>
                      </div>
                    
                  
                </div>
                <div class="card-footer">
                  <button type="submit" id="btn_save" name="btn_save" class="btn btn-fill btn-primary">Update</button>
                </div>
                </form>    
              </div>
            </div>
          
            
          </div>
        </div>
        <?php
  include "footer.php";
  ?>