<?php 
$title = "Edit County";
include('dbcon.php');
include('header.php'); 

?>

<?php

  if(isset($_GET['kid'])){

    $edit_id = $_GET['kid'];

    $get_k = "select * from kountynbrs where kid = '$edit_id'";

    $run_edit = mysqli_query($con, $get_k);

    $row_edit = mysqli_fetch_array($run_edit);

    $kid = $row_edit['kid'];
    $dpkty = $row_edit['dptrevcounty'];
    $eiauth = $row_edit['eiauthority'];
    $namesimp = $row_edit['namesimple'];
    $ktyabb = $row_edit['ktyabb'];
    $eiauth2 = $row_edit['eiauthority2'];
    $alsoinc = $row_edit['alsoinclude'];
    $email = $row_edit['email'];
    $ephone = $row_edit['eiphone'];

?>
    <!--header image-->

    <img src="images/screenblue.jpg" alt="" class="back-image">

    <!-- page title-->
    <div class="container">
        <h2 class="page-title blue">
            Edit County
        </h2>
        <hr width="15%" class="page-title-line">


        <!--table for ballot-->

        <form method="POST" action="#" class="screen-border">
            <table class="table table-borderless text-white">

                <tbody>

                    <!--row one-->
                    <tr>
                        <th class="edit-county">Id</th>
                        <th class="edit-county">DptRevCounty</th>
                        <th class="edit-county">ElAuthority</th>

                    </tr>



                    <tr>
                        <td><input type="text" name="id" class="form-control" value="<?php echo $kid ;?>" ></td>
                        <td><input type="text" name="name" class="form-control" value="<?php echo $dpkty ;?>"></td>
                        <td><input type="text" name="title" class="form-control" value="<?php echo $eiauth ;?>"></td>
                        </td>
                    </tr>
                    <!--row tw0-->
                    <tr>
                        <th class="edit-county">NameSimple</th>
                        <th class="edit-county">KtyAbb</th>
                        <th class="edit-county">ElAurhority2</th>
                    </tr>

                    <tr>
                        <td><input type="text" name="id" class="form-control" value="<?php echo $namesimp ;?>"></td>
                        <td><input type="text" name="name" class="form-control" value="<?php echo $ktyabb ;?>"></td>
                        <td><input type="text" name="title" class="form-control" value="<?php echo $eiauth2 ;?>"></td>
                        </td>
                    </tr>

                    <!--row three-->
                    <tr>
                        <th class="edit-county">Also Include</th>
                        <th class="edit-county">email</th>
                        <th class="edit-county">ElPhone</th>

                    </tr>

                    <tr>
                        <td><input type="text" name="id" class="form-control" value="<?php echo $alsoinc ;?>"></td>
                        <td><input type="text" name="name" class="form-control" value="<?php echo $email ;?>"></td>
                        <td><input type="text" name="title" class="form-control" value="<?php echo $ephone ;?>"></td>
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