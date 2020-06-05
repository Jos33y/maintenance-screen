<?php 
$title = "Edit Data";
include('dbcon.php');
include('header.php'); 

?>

<?php

  if(isset($_GET['did'])){

    $edit_id = $_GET['did'];

    $get_g = "select * from governments where id = '$edit_id'";

    $run_governments = mysqli_query($con, $get_g);

    $row_gov = mysqli_fetch_array($run_governments);

    $gvid = $row_gov['GovId'];

    $cmpid = $row_gov['ComptrollerID'];

    $othertypeid = $row_gov['OtherIDtype'];

    $othertypecode = $row_gov['OtherID'];

    $rev = $row_gov['RevenueID'];

    $ktyabb = $row_gov['KtyAbb'];

    $fullspan = $row_gov['FullSpan'];

    $sort_as = $row_gov['NameSimple'];



    $get_a = "select * from addresses where GovId = '$gvid'";
    $run_a = mysqli_query($con, $get_a);
    
    $row_edit = mysqli_fetch_array($run_a);

    $aid = $row_edit['AddressId'];
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

    $get_govtype = "select * from govtype where govtypeid = '$gvtype'";

    $run_govtype = mysqli_query($con, $get_govtype);

    $row = mysqli_fetch_array($run_govtype);

    $bgrpid = $row['ballotgroupid'];
    $investiture = $row['investiture'];
    $webgrp = $row['webgroup'];
    $gvtypename = $row['govtypename'];
    $desc = $row['description'];

?>
<!--header image-->

<img src="images/screenblue.jpg" alt="" class="back-image">

<!-- page title-->
<div class="container">
    <h2 class="page-title blue">
    Edit Data
    </h2>
    <hr width="15%" class="page-title-line">


    <!--table for ballot-->

    <form method="POST" class="screen-border address">

        <!--row one-->
        <div class="row">
            <div class="col-sm-6 mx-auto">
                <h3 class="version">Version Time : <span class="version-time"><?php echo $timestamp; ?> </span></h3>
            </div>
        </div>
        <div class="row">


            <div class="col-sm-1">
                <label for="gov" class="sr-only">GovID </label>
                <input type="text" class="form-control" id="" value="<?php echo $gvid;?>" disabled>
            </div>

            <div class="col-sm-10">
                <label for="gov" class="sr-only">PublicBodyNameFormal </label>
                <input type="text" class="form-control" id="" name="pbdnfm" value="<?php echo $pbdnfm ;?>">
            </div>
        </div>

        <!--row two-->

        <div class="row">
            <div class="col-sm-1"></div>
                <!--sort as -->
            <div class="col-sm-3">
                <table class="table table-borderless text-white">
                    <tbody>
                        <tr>
                            <td width="20%"><span class="address-text">Sort as</span>
                                <input type="text" class="form-control" id="" name="sort" value="<?php echo $sort_as ;?>">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
                <!--govtype -->
            <div class="col-sm-2">
                <table class="table table-borderless text-white">
                    <tbody>
                        <tr>
                            <td width="20%"><span class="address-text">GovType</span>
                                <input type="text" class="form-control" id="" name="gvtype" value="<?php echo $gvtype ;?>">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-sm-6">
                <table class="table table-borderless text-white">
                    <tbody>
                        <tr>
                            <td width="20%">
                                <h3 class="yellow-ballot"> <?php echo $gvtypename; ?> </h3>
                                <h3 class="yellow-ballot">WebGroup: <?php echo $webgrp; ?> </h3>

                            </td>
                            <td width="20%"><br>
                                <h3 class="yellow-ballot">BallotGroup: <?php echo $bgrpid; ?> </h3>

                            </td>
                            <td width="20%"><br>
                                <h3 class="yellow-ballot"> <?php echo $investiture; ?> </h3>
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
                <input type="text" class="form-control" id="" name="hqpaddress" value="<?php echo $hqpaddress ;?>">
            </div>
            <div class="col-sm-2">
                <label for="gov" class="sr-only">City </label>
                <input type="text" class="form-control" id="" name="hqpcity" value="<?php echo $hqpcity ;?>">
            </div>

            <div class="col-sm-1">
                <label for="gov" class="sr-only">State </label>
                <input type="text" class="form-control" id="" name="hqstate" value="<?php echo $hqstate ;?>">
            </div>

            <div class="col-sm-2">
                <label for="gov" class="sr-only">Zip </label>
                <input type="text" class="form-control" id="" name="hqmzip" value="<?php echo $hqmzip ;?>">
            </div>

        </div>


        <!--row four-->

        <div class="row">
            <div class="col-sm-1"><span class="address-text">Mailing</span> </div>

            <div class="col-sm-6">
                <label for="gov" class="sr-only"> Mailing Address </label>
                <input type="text" class="form-control" id="" name="hqmaddress" value="<?php echo $hqmaddress ;?>">
            </div>
            <div class="col-sm-2">
                <label for="gov" class="sr-only">City </label>
                <input type="text" class="form-control" id="" name="hqmcity" value="<?php echo $hqmcity ;?>">
            </div>

            <div class="col-sm-1">
                <label for="gov" class="sr-only">State </label>
                <input type="text" class="form-control" id="" name="hqstate" value="<?php echo $hqstate ;?>">
            </div>

            <div class="col-sm-2">
                <label for="gov" class="sr-only">Zip </label>
                <input type="text" class="form-control" id="" name="hqmzip" value="<?php echo $hqmzip ;?>">
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
                                <input type="text" class="form-control" id="" name="hqphone" value="<?php echo $hqphone ;?>">
                            </td>
                            <td><span class="address-text">Email</span>
                                <input type="text" class="form-control" id="" name="hqemail" value="<?php echo $hqemail ;?>">
                            </td>
                            <td width="35%"><span class="address-text">Website</span>
                                <input type="text" class="form-control" id="" name="weburl" value="<?php echo $weburl ;?>">
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
                <input type="text" class="form-control" id="" name="faddress" value="<?php echo $foiaeaddress ;?>">
            </div>
            <div class="col-sm-2">
                <label for="gov" class="sr-only">City </label>
                <input type="text" class="form-control" id="" name="fmcity" value="<?php echo $foiamcity ;?>">
            </div>

            <div class="col-sm-1">
                <label for="gov" class="sr-only">State </label>
                <input type="text" class="form-control" id="" name="fstate" value="<?php echo $foiastate ;?>">
            </div>

            <div class="col-sm-2">
                <label for="gov" class="sr-only">Zip </label>
                <input type="text" class="form-control" id="" name="fmzip" value="<?php echo $foiamzip ;?>">
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
                                <input type="text" class="form-control" id="" name="fphone" value="<?php echo $foiaphone ;?>">
                            </td>
                            <td><span class="address-text">Email</span>
                                <input type="text" class="form-control" id="" name="fmail" value="<?php echo $foiaemail ;?>">
                            </td>
                            <td width="35%"><span class="address-text">Website</span>
                                <input type="text" class="form-control" id="" name="weburl" value="<?php echo $weburl ;?>">
                            </td>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>


        <!--row eight  first-->

        <div class="row">
            <div class="col-sm-1"><span class="address-text">Notes</span>
            </div>
            <div class="col-sm-8">
                <table class="table table-borderless text-white">
                    <thead>
                        <tr>

                            <td width="20%">
                                <textarea name="comments" id="" cols="30" rows="5" name="desc" class="form-control"><?php echo $desc; ?></textarea>
                            </td>

                        </tr>
                    </thead>
                </table>
            </div>
        </div>

        <!--row eight-->

        <div class="row">
            <div class="col-sm-1"><span class="address-text">Cross References</span>
            </div>
            <div class="col-sm-6">
                <table class="table table-borderless text-white">
                    <thead>
                        <tr>

                            <td width="10%"><span class="address-text">Revenue</span>
                                <input type="text" class="form-control" id="" name="revid" value="<?php echo $rev ;?>">
                            </td>

                            <td width="5%"><span class="address-text">Comptroller</span>
                                <input type="text" class="form-control" id="" name="cmpid" value="<?php echo $cmpid ;?>">
                            </td>

                            <td width="1%"><span class="address-text"> <br></span>
                                <input type="text" class="form-control" id="" name="othertypeid" value="<?php echo $othertypeid ;?>">
                                <span class="address-text">&nbsp;State</span>
                            </td>

                            <td width="20%"><span class="address-text">Other</span>
                                <input type="text" class="form-control" id="" name="othertypecode" value="<?php echo $othertypecode ;?>">
                                <span class="address-text">Board of Education</span>
                            </td>

                        </tr>
                    </thead>
                </table>
            </div>
        </div>

           <!--row nine-->

           <div class="row">
            <div class="col-sm-1"><span class="address-text">Counties</span>
            </div>
            <div class="col-sm-6">
                <table class="table table-borderless text-white">
                    <thead>
                        <tr>

                            <td width="5%"><span class="address-text">SEI</span>
                                <input type="text" class="form-control" id="" name="ktyabb" value="<?php echo $ktyabb;?>">
                            </td>

                            <td width="2%"><span class="address-text">Home</span>
                                <input type="text" class="form-control" id="" name="fullspan" value="<?php echo $fullspan;?>">
                            </td>

                            <td width="10%"><span class="address-text"> <br></span>
                                <input type="text" class="form-control" id="">
                            </td>

                            <td width="10%"><span class="address-text"> <br></span>
                                <input type="text" class="form-control" id="">
                            </td>

                            <td width="10%"><span class="address-text"> <br></span>
                                <input type="text" class="form-control" id="">
                            </td>

                            <td width="10%"><span class="address-text"> <br></span>
                                <input type="text" class="form-control" id="">
                            </td>

                            <td width="10%"><span class="address-text"> <br></span>
                                <input type="text" class="form-control" id="">
                            </td>


                        </tr>
                    </thead>
                </table>
            </div>
        </div>

        <!--row ten-->

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

                                <button style="text-decoration: none;" class="btn btn-publish" name="publish">
                                    <i class="fas fa-upload"></i> Publish This</button>
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

<?php

if(isset($_POST['publish']))
{

    $gvtype = $_POST['gvtype'];
    $cmpid = $_POST['cmpid'];
    $othertypeid = $_POST['othertypeid'];
    $othertypecode = $_POST['othertypecode'];
    $rev = $_POST['revid'];
    $ktyabb = $_POST['ktyabb'];
    $fullspan =$_POST['fullspan'];
    $sort_as = $_POST['sort'];
    $pbdnfm =  $_POST['pbdnfm'];
    $weburl =  $_POST['weburl'];
    $hqemail =  $_POST['hqemail'];
    $hqpaddress =  $_POST['hqpaddress'];
    $hqpcity =  $_POST['hqpcity'];
    $hqmzip =  $_POST['hqmzip'];
    $hqphone =  $_POST['hqphone'];
    $hqmaddress =  $_POST['hqmaddress'];
    $hqmcity =  $_POST['hqmcity'];
    $hqstate =  $_POST['hqstate'];
    $foiaemail = $_POST['fmail'];
    $foiaeaddress =  $_POST['faddress'];
    $foiaphone =  $_POST['fphone'];
    $foiapaddress =  $_POST['faddress'];
    $foiamcity =  $_POST['fmcity'];
    $foiastate =  $_POST['fstate'];
    $foiamzip =  $_POST['fmzip'];

    $sql = "INSERT INTO historytable (govid, comptrollerid, revenueid, otheridtype, othertypecode, namesimple, PBDNF, govtype, websiteurl, 
    hqemail, hqphysicaladdress, hqphysicalcity, hqmailingzip, hqphone, hqmailingaddress, hqmailingcity, hqstate, Femail, Fmailingaddress,
     Fphone, Fphysicaladdress, Fmailingcity, Fstate, Fmailingzip, govtypename, webgroup, ballotgroupid, investiture, ktyabb, fullspan) 

    VALUES ('$gvid', '$cmpid', '$rev', '$othertypeid', '$othertypecode', '$sort_as', '$pbdnfm', '$gvtype', '$weburl', '$hqemail',
     '$hqpaddress', '$hqpcity', '$hqmzip', '$hqphone', '$hqmaddress', '$hqmcity', '$hqstate', '$foiaemail', '$foiaeaddress', 
     '$foiaphone', '$foiapaddress', '$foiamcity', '$foiastate', '$foiamzip', '$gvtypename', '$webgrp', '$bgrpid', '$investiture', '$ktyabb', '$fullspan')
    ";

    $query = mysqli_query($con, $sql) or  die(mysqli_error($con));

    if($query){

        echo "<script> alert('Published Successfully')</script>";
        echo "<script>window.open('view-data.php', '_self')</script>";  

    }

    
    
    
}


?>
