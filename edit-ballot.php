<?php 
$title = "Edit Ballot Group";
include('dbcon.php');
include('header.php'); 

?>

<?php

  if(isset($_GET['bid'])){

    $edit_id = $_GET['bid'];

    $get_b = "select * from ballotgroup where BallotGroupId = '$edit_id'";

    $run_edit = mysqli_query($con, $get_b);

    $row_edit = mysqli_fetch_array($run_edit);

    $bid = $row_edit['BallotGroupId'];
    $gname = $row_edit['GroupName'];
    $gtitle = $row_edit['GroupTitle'];

?>
    <!--header image-->

    <img src="images/screenblue.jpg" alt="" class="back-image">

    <!-- page title-->
    <div class="container">
        <h2 class="page-title blue">
            Edit Ballot Group
        </h2>
        <hr width="15%" class="page-title-line">


        <!--table for ballot-->

        <form method="POST" action="#" class="screen-border">
            <table class="table table-borderless text-white">
                <thead>
                    <tr>
                        <th>BallotGroupID</th>
                        <th>Group Name</th>
                        <th>Group Title</th>

                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td><input type="text" name="id" class="form-control" value="<?php echo $bid ;?>"></td>
                        <td><input type="text" name="name" class="form-control"  value="<?php echo $gname ;?>"></td>
                        <td><input type="text" name="title" class="form-control"  value="<?php echo $gtitle; ?>"></td>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <a style="text-decoration: none;" class="btn btn-cancel" href="#" name="save">
                                <i class="fas fa-times"></i> Cancel</a>

                            <a style="text-decoration: none;" class="btn btn-prev" href="#" name="save">
                                <i class="fas fa-backward"></i> Get Previous Version</a>

                            <a style="text-decoration: none;" class="btn btn-publish" href="#" name="save">
                                <i class="fas fa-upload"></i> Publish This</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>

    </div>


    <?php include('footer.php'); ?>

  <?php  } ?>