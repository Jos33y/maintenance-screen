<?php 
$title = "Edit Address";
include('dbcon.php');
include('header.php'); 

?>

<?php

  if(isset($_GET['aid'])){

    $edit_id = $_GET['aid'];

    $get_a = "select * from addresses where AddressId = '$edit_id'";

    $run_edit = mysqli_query($con, $get_a);

    $row_edit = mysqli_fetch_array($run_edit);

    $aid = $row_edit['AddressId'];
    $gvid = $row_edit['GovId'];
    $pbdnfm = $row_edit['PublicBodyNameFormal'];
    $gvtype = $row_edit['GovType'];
    $weburl = $row_edit['WebsiteURL'];
    $hqemail = $row_edit['HQemail'];
    $hqpaddress = $row_edit['HQphysicalAddress'];
    $hqpcity = $row_edit['HQphysicalCity'];
    $hqmzip = $row_edit['HQmailingZip'];
    $hqphone = $row_edit['HQphone'];
    $hqmaddress = $row_edit['HQmailingAddress'];
    $hqmcity = $row_edit['HQmailingCity'];
    $hqstate = $row_edit['HQState'];
    $foiaemail = $row_edit['FoiaEmail'];
    $foiaeaddress = $row_edit['FoiaMailingAddress'];
    $foiaphone = $row_edit['FoiaPhone'];
    $foiapaddress = $row_edit['FoiaPhysicalAddress'];
    $foiamcity = $row_edit['FoiaMailingCity'];
    $foiastate = $row_edit['FoiaState'];
    $foiamzip = $row_edit['FoiaMailingZip'];
    $timestamp = $row_edit['timestamp'];

?>
    <!--header image-->

    <img src="images/screenblue.jpg" alt="" class="back-image">

    <!-- page title-->
    <div class="container">
        <h2 class="page-title blue">
            Edit Address
        </h2>
        <hr width="15%" class="page-title-line">


        <!--table for ballot-->

        <form method="POST" action="#" class="screen-border address">

            <!--row one-->
            <div class="row">
                <div class="col-sm-1">
                    <label for="gov" class="sr-only">GovID </label>
                    <input type="text" class="form-control" id="" value="<?php echo $gvid;?>">
                </div>

                <div class="col-sm-10">
                    <label for="gov" class="sr-only">PublicBodyNameFormal </label>
                    <input type="text" class="form-control" id="" value="<?php echo $pbdnfm ;?>">
                </div>
            </div>

            <!--row two-->

            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-2">
                    <table class="table table-borderless text-white">
                        <tbody>
                            <tr>
                                <td width="20%"><span class="address-text">GovType</span>
                                    <input type="text" class="form-control" id="" value="<?php echo $gvtype ;?>">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>


            <!--row three-->

            <div class="row">
                <div class="col-sm-1"><span class="address-text">Physical</span> </div>

                <div class="col-sm-6">
                    <label for="gov" class="sr-only"> Physical Address </label>
                    <input type="text" class="form-control" id="" value="<?php echo $hqpaddress ;?>">
                </div>
                <div class="col-sm-2">
                    <label for="gov" class="sr-only">City </label>
                    <input type="text" class="form-control" id="" value="<?php echo $hqpcity ;?>">
                </div>

                <div class="col-sm-1">
                    <label for="gov" class="sr-only">State </label>
                    <input type="text" class="form-control" id="" value="<?php echo $hqstate ;?>">
                </div>

                <div class="col-sm-2">
                    <label for="gov" class="sr-only">Zip </label>
                    <input type="text" class="form-control" id="" value="<?php echo $hqmzip ;?>">
                </div>

            </div>


            <!--row four-->

            <div class="row">
                <div class="col-sm-1"><span class="address-text">Mailing</span> </div>

                <div class="col-sm-6">
                    <label for="gov" class="sr-only"> Mailing Address </label>
                    <input type="text" class="form-control" id="" value="<?php echo $hqmaddress ;?>">
                </div>
                <div class="col-sm-2">
                    <label for="gov" class="sr-only">City </label>
                    <input type="text" class="form-control" id="" value="<?php echo $hqmcity ;?>">
                </div>

                <div class="col-sm-1">
                    <label for="gov" class="sr-only">State </label>
                    <input type="text" class="form-control" id="" value="<?php echo $hqstate ;?>">
                </div>

                <div class="col-sm-2">
                    <label for="gov" class="sr-only">Zip </label>
                    <input type="text" class="form-control" id="" value="<?php echo $hqmzip ;?>">
                </div>

            </div>

            <!--row five-->

            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-11">
                    <table class="table table-borderless text-white">
                        <thead>
                            <tr>
                                <td width="20%"><span class="address-text">Phone</span>
                                    <input type="text" class="form-control" id="" value="<?php echo $hqphone ;?>">
                                </td>
                                <td><span class="address-text">Email</span>
                                    <input type="text" class="form-control" id="" value="<?php echo $hqemail ;?>">
                                </td>
                                <td width="35%"><span class="address-text">Website</span>
                                    <input type="text" class="form-control" id="" value="<?php echo $weburl ;?>">
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>


            <!--row six-->

            <div class="row">
                <div class="col-sm-1"><span class="address-text">FOIA</span> </div>

                <div class="col-sm-6">
                    <label for="gov" class="sr-only"> Mailing Address </label>
                    <input type="text" class="form-control" id="" value="<?php echo $foiaeaddress ;?>">
                </div>
                <div class="col-sm-2">
                    <label for="gov" class="sr-only">City </label>
                    <input type="text" class="form-control" id="" value="<?php echo $foiamcity ;?>">
                </div>

                <div class="col-sm-1">
                    <label for="gov" class="sr-only">State </label>
                    <input type="text" class="form-control" id="" value="<?php echo $foiastate ;?>">
                </div>

                <div class="col-sm-2">
                    <label for="gov" class="sr-only">Zip </label>
                    <input type="text" class="form-control" id="" value="<?php echo $foiamzip ;?>">
                </div>
            </div>

            <!--row Seven-->

            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-11">
                    <table class="table table-borderless text-white">
                        <thead>
                            <tr>
                                <td width="20%"><span class="address-text">Phone</span>
                                    <input type="text" class="form-control" id="" value="<?php echo $foiaphone ;?>">
                                </td>
                                <td><span class="address-text">Email</span>
                                    <input type="text" class="form-control" id="" value="<?php echo $foiaemail ;?>">
                                </td>
                                <td width="35%"><span class="address-text">Website</span>
                                    <input type="text" class="form-control" id="" value="<?php echo $weburl ;?>">
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>


            <!--row eight-->

            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-3">
                    <table class="table table-borderless text-white">
                        <thead>
                            <tr>
                                <td width="20%"><span class="address-text">Comptroller</span>
                                    <input type="text" class="form-control" id="" value="<?php echo $cmpid ;?>">
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>

            <!--row nine-->

            <div class="row">
                <div class="col-md-6 mx-auto">
                    <table class="table table-borderless text-white">
                        <tbody>
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
                </div>
            </div>


        </form>

    </div>


    <?php include('footer.php'); ?>

<?php  } ?>