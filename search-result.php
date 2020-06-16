<?php 
$title = "Screen Mode";
include('dbcon.php');
include('header.php'); 

?>

<?php
//$query = (isset($_GET['previd']) ? $_GET['govid'] : null);

 //if($query){
  
    
  // if($edit_id = $_GET['govid'] ) {
//GOVID OR PREVIOUS DATA ID
  if(!empty(isset($_GET['govid']) OR isset($_GET['previd'] ))){


    //BELOW IS THE CODE TO GET THE PRESENT ID
    $query = (!empty($_GET['govid'])?$_GET['govid']:null);
    if($query) {

    $get_a = "select * from addresses where GovId = '$query'";

    $run_edit = mysqli_query($con, $get_a);

    $row_edit = mysqli_fetch_array($run_edit);

    $aid = $row_edit['AddressId'];
    $gvid = $row_edit['GovId'];
    $cmpid = $row_edit['ComptrollerID'];
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

    $timestamp = date("M-d-yy h:i:s A", strtotime( $row_edit['timestamp']));

    $get_govtype = "select * from govtype where govtypeid = '$gvtype'";

    $run_govtype = mysqli_query($con, $get_govtype);

    $row = mysqli_fetch_array($run_govtype);

    $bgrpid = $row['ballotgroupid'];

    $dept = $row['comptypecode'];

    $govfunction = $row['govfunction'];

    $investiture = $row['investiture'];

    $webgrp = $row['webgroup'];

    $gvtypename = $row['govtypename'];

    $desc = $row['description'];

    $get_governments = "select * from governments where GovId = '$gvid'";

    $run_governments = mysqli_query($con, $get_governments);

    $row_gov = mysqli_fetch_array($run_governments);

    $othertypeid = $row_gov['OtherIDtype'];

    $othertypecode = $row_gov['OtherID'];

    $rev = $row_gov['RevenueID'];

    $ktyabb = $row_gov['KtyAbb'];

    $fullspan = $row_gov['FullSpan'];

    $sort_as = $row_gov['NameSimple'];

    $parent = $row_gov['ParentID'];
 
    $version_details = " <button style='font-weight: 600;' class='btn btn-sm btn-success'>This is the latest version</button>";
    
    //$version_link = ", Click " . "<a href='search-result.php?govid=$gvid' class='text-white'>" . "here" . "</a> " . " to bring up latest version";

    $version_link =" ";
    }

    //THE CODE TO GET THE PREVIOUS VERISON OF ANY DATA 

    elseif($edit_id = $_GET['previd']){
        
        $get_a = "select * from historytable where govid = '$edit_id' ORDER BY timestamp DESC";
    
        $run_edit = mysqli_query($con, $get_a);
    
        $row_edit = mysqli_fetch_array($run_edit);
    
        $hid = $row_edit['hist_id'];
        $gvid = $row_edit['govid'];
        $cmpid = $row_edit['comptrollerid'];
        $pbdnfm = $row_edit['PBDNF'];
        $gvtype = $row_edit['govtype'];
        $weburl = $row_edit['websiteurl'];
        $hqemail = $row_edit['hqemail'];
        $hqpaddress = $row_edit['hqphysicaladdress'];
        $hqpcity = $row_edit['hqphysicalcity'];
        $hqmzip = $row_edit['hqmailingzip'];
        $hqphone = $row_edit['hqphone'];
        $hqmaddress = $row_edit['hqmailingaddress'];
        $hqmcity = $row_edit['hqmailingcity'];
        $hqstate = $row_edit['hqstate'];
        $foiaemail = $row_edit['Femail'];
        $foiaeaddress = $row_edit['Fmailingaddress'];
        $foiaphone = $row_edit['Fphone'];
        $foiapaddress = $row_edit['Fphysicaladdress'];
        $foiamcity = $row_edit['Fmailingcity'];
        $foiastate = $row_edit['Fstate'];
        $foiamzip = $row_edit['Fmailingzip'];

        $bgrpid = $row_edit['ballotgroupid'];

        $investiture = $row_edit['investiture'];

        $webgrp = $row_edit['webgroup'];

        $othertypeid = $row_edit['otheridtype'];
    
        $othertypecode = $row_edit['othertypecode'];
     
         $rev = $row_edit['revenueid'];
     
         $ktyabb = $row_edit['ktyabb'];
     
         $fullspan = $row_edit['fullspan'];
     
         $sort_as = $row_edit['namesimple'];

         $gvtypename = $row_edit['govtypename'];
    
         $dept = "";
    
        $govfunction = "";

        $desc = "";     
    
       $parent = ""; 

        $timestamp = date("M-d-yy h:i:s A", strtotime($row_edit['timestamp']));
       
        $version_details = " <button style='font-weight: 600;' class='btn btn-md btn-danger'>This is not the latest version</button>";
    
        $version_link = ", Click " . "<a href='search-result.php?govid=$gvid' class='text-white'>" . "here" . "</a> " . " to bring up latest version";
    
       // $version_link =" ";
    
       }
?>

<!--no print div -->
<div class="noprint">
    <!--header image-->
<!--
    <img src="images/screenblue.jpg" alt="" class="back-image">

    <!-- page title-->
  <!--  <div class="container">
        <h2 class="page-title blue">
            Screen Mode
        </h2>
        <hr width="15%" class="page-title-line">

    </div>
</div>
<!--table for ballot-->
<div class="container-fluid">
    <form method="POST" class="screen-border search-result address">

        <!--row one-->
        <div class="row version">
            <div class="col-sm-2"></div>
            <div class="col-sm-10" style="font-weight: 600; ">
              <?php echo $version_details; ?>
                <span class="version-time">It is from <?php echo $timestamp . $version_link; ?> </span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <td width="15%" class="search-rgov">
                                <label for="gov" class="sr-only">GovID </label>
                                <input type="text" class="form-control" id="" value="<?php echo $gvid;?>" readonly>

                            </td>
                            <td class="search-res">
                                <label for="gov" class="sr-only">PublicBodyNameFormal </label>
                                <input type="text" class="form-control" id="" value="<?php echo $pbdnfm ;?>" readonly>

                            </td>

                        </tr>
                    </tbody>
                </table>

            </div>
        </div>

        <!--row two-->

        <div class="row">
            <!--sort as -->
            <div class="col-sm-12">
                <table class="table table-borderless text-white">
                    <tbody class="search-res">
                        <tr>
                            <td width="11%"></td>
                            <td width="26%"><span class="address-text">Alternate name</span>
                                <input type="text" class="form-control" id="" value="<?php echo $sort_as ;?>" readonly>
                                <td />

                            <td width="13%"><span class="address-text">GovType
                            <button type="button" class="btn btn-outline-light" data-toggle="modal"
                                                data-target="#govTypeName">
                                                <i class="fas fa-info-circle"></i>
                                            </button></label>       

                            </span>
                                <input type="text" class="form-control" id="" value="<?php echo $gvtype ;?>" readonly>
                            </td>

                            <td width="20%">
                                <h3 class="yellow-ballot"> <?php echo $gvtypename; ?> </h3>
                                <h3 class="yellow-ballot">WebGroup: <?php echo $webgrp; ?> </h3>

                            </td>
                            <td width="13%"><br>
                                <h3 class="yellow-ballot">BallotGroup: <?php echo $bgrpid; ?> </h3>

                            </td>
                            <td width="8%"><br>
                                <h3 class="yellow-ballot"> <?php echo $investiture; ?> </h3>
                            </td>
                            <td width="17%"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


        <!--row three-->

        <div class="row">
            <div class="col-sm-12">
                <table class="table table-borderless text-white">
                    <tbody class="search-res">
                        <tr>
                            <td width="11%"><span class="address-text">Physical</span></td>
                            <td width="54%">
                                <label for="gov" class="sr-only"> Physical Address </label>
                                <input type="text" class="form-control" id="" value="<?php echo $hqpaddress ;?>" readonly>
                                <td />

                            <td width="20%">
                                <label for="gov" class="sr-only">City </label>
                                <input type="text" class="form-control" id="" value="<?php echo $hqpcity ;?>" readonly>
                            </td>

                            <td width="6%">
                                <label for="gov" class="sr-only">State </label>
                                <input type="text" class="form-control" id="" value="<?php echo $hqstate ;?>" readonly>
                            </td>

                            <td width="10%">
                                <label for="gov" class="sr-only">Zip </label>
                                <input type="text" class="form-control" id="" value="<?php echo $hqmzip ;?>" readonly>
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


        <!--row five-->

        <div class="row">
            <div class="col-sm-12">
                <table class="table table-borderless text-white">
                    <tbody class="search-res">
                        <tr>
                            <td width="11%"></td>
                            <td width="20%"><span class="address-text">Phone</span>
                                <input type="text" class="form-control" id="" value="<?php echo $hqphone ;?>" readonly>
                            </td>
                            <td><span class="address-text">Email</span>
                                <input type="text" class="form-control" id="" value="<?php echo $hqemail ;?>" readonly>
                            </td>
                            <td width="35%"><span class="address-text">Website</span>
                                <input type="text" class="form-control" name="website" value="<?php echo $weburl ;?>" readonly>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


        <!--row four-->

        <div class="row">

            <div class="col-sm-12">
                <table class="table table-borderless text-white">
                    <tbody class="search-res">
                        <tr>
                            <td width="11%"><span class="address-text">Mailing</span></td>
                            <td width="54%">
                                <label for="gov" class="sr-only"> Mailing Address </label>
                                <input type="text" class="form-control" id="" value="<?php echo $hqmaddress ;?>" readonly>
                                <td />

                            <td width="20%">
                                <label for="gov" class="sr-only">City </label>
                                <input type="text" class="form-control" id="" value="<?php echo $hqmcity ;?>" readonly>
                            </td>

                            <td width="6%">
                                <label for="gov" class="sr-only">State </label>
                                <input type="text" class="form-control" id="" value="<?php echo $hqstate ;?>" readonly>
                            </td>

                            <td width="10%">
                                <label for="gov" class="sr-only">Zip </label>
                                <input type="text" class="form-control" id="" value="<?php echo $hqmzip ;?>" readonly>
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>



        <!--row six-->

        <div class="row">

            <div class="col-sm-12">
                <table class="table table-borderless text-white">
                    <tbody class="search-res">
                        <tr>
                            <td width="11%"><span class="address-text">FOIA</span></td>
                            <td width="74%">
                                <label for="gov" class="sr-only"> Mailing Address </label>
                                <input type="text" class="form-control" id="" value="<?php echo $foiaeaddress ;?>" readonly>
                                <td />

                            <td width="6%">
                                <label for="gov" class="sr-only">State </label>
                                <input type="text" class="form-control" id="" value="<?php echo $foiastate ;?>"
                                    readonly>
                            </td>

                            <td width="12%">
                                <label for="gov" class="sr-only">Zip </label>
                                <input type="text" class="form-control" id="" value="<?php echo $foiamzip ;?>" readonly>
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!--row Seven-->

        <div class="row">
            <div class="col-sm-12">

                <table class="table table-borderless text-white ">
                    <tbody class="search-res">
                        <tr>
                            <td width="11%"></td>
                            <td width="20%"><span class="address-text">FOIA Phone</span>
                                <input type="text" class="form-control" id="" value="<?php echo $foiaphone ;?>" readonly>
                            </td>
                            <td><span class="address-text">FOIA Email</span>
                                <input type="text" class="form-control" id="" value="<?php echo $foiaemail ;?>" readonly>
                            </td>
                            <td width="35%"><span class="address-text">FOIA Website</span>
                                <input type="text" class="form-control" name="website" value="<?php echo $weburl ;?>" readonly>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


        <!--row eight  first-->

        <div class="row">
            <div class="col-sm-12">
                <table class="table table-borderless text-white">
                    <tbody class="search-res">
                        <tr>
                            <td width="11%"><span class="address-text">Notes</span></td>
                            <td width="54%">
                                <textarea name="comments" id="" cols="30" rows="3" class="form-control"
                                    readonly placeholder=""><?php echo $desc; ?></textarea>
                            </td>
                            <td width="35%"></td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!--row eight-->

        <div class="row">
            <div class="col-sm-12">
                <table class="table table-borderless text-white">
                    <tbody class="search-res">
                        <tr>
                            <td width="11%"><span class="address-text">Cross References</span> </td>

                            <td width="18%">
                                <span class="address-text">Revenue</span>
                                <input type="text" class="form-control" id="" value="<?php echo $rev ;?>" readonly>
                            </td>

                            <td width="12%"><span class="address-text">Comptroller</span>
                                <input type="text" class="form-control" id="" value="<?php echo $cmpid ;?>" readonly>
                            </td>

                            <td width="7%"><span class="address-text"> <br></span>
                                <input type="text" class="form-control" id="" value="<?php echo $othertypeid ;?>"
                                    readonly>
                                    <span class="address-note"></span>
                            </td>

                            <td width="20%"><span class="address-text">Other</span>
                                <input type="text" class="form-control" id="" value="<?php echo $othertypecode ;?>"
                                    readonly>
                                <span class="address-note">State Board of Education</span>
                            </td>

                            <td width="12%"></td>
                            <td width="12%"><br>
                                <span class="address-text">Counties
                                    <button type="button" class="btn btn-outline-light" data-toggle="modal"
                                        data-target="#countyName">
                                        <i class="fas fa-info-circle"></i>
                                    </button>
                                </span></td>
                            <td width="8%">
                                <span class="address-text">SEI</span>
                                <input type="text" class="form-control" id="" value="<?php echo $ktyabb;?>" readonly>
                            </td>

                            <td width="8%">
                                <span class="address-text">Home</span>
                                <input type="text" class="form-control" id="" value="<?php echo $ktyabb;?>" readonly>

                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!--row eight-->

        <div class="row">
            <div class="col-sm-12">
                <table class="table table-borderless text-white">
                    <tbody class="search-res">
                        <tr>
                            <td width="11%"></td>

                            <td width="7%"><span class="address-text">Dept</span>
                                <input type="text" class="form-control" id="" value="<?php echo $dept ;?>" readonly>
                                <span class="address-note"><?php echo $govfunction; ?></span>
                            </td>

                            <td width="12%"><span class="address-text">Parent Gov</span>
                                <input type="text" class="form-control" id="" value="<?php echo $parent ;?>" readonly>
                            </td>

                            <td width="38%"></td>
                            <td width="8%">
                                <input type="text" class="form-control" id="" value="" readonly>
                                <input type="text" class="form-control" id="" value="" readonly>
                                <input type="text" class="form-control" id="" value="" readonly>
                                <input type="text" class="form-control" id="" value="" readonly>

                            </td>

                            <td width="8%">
                                <input type="text" class="form-control" id="" value="" readonly>
                                <input type="text" class="form-control" id="" value="" readonly>
                                <input type="text" class="form-control" id="" value="" readonly>
                                <input type="text" class="form-control" id="" value="" readonly>
                            </td>

                            <td width="8%">
                                <input type="text" class="form-control" id="" value="" readonly>
                                <input type="text" class="form-control" id="" value="" readonly>
                                <input type="text" class="form-control" id="" value="" readonly>
                                <input type="text" class="form-control" id="" value="" readonly>
                            </td>

                            <td width="8%">
                                <input type="text" class="form-control" id="" value="" readonly>
                                <input type="text" class="form-control" id="" value="" readonly>
                                <input type="text" class="form-control" id="" value="" readonly>
                                <input type="text" class="form-control" id="" placeholder="&#61442;" readonly>
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!--row ten-->

        <div class="row">
            <div class="col-md-10 mx-auto search-result-btn">
                <table class="table table-borderless text-white">
                    <tbody>
                        <tr>

                            <td>
                                <br> <br>
                                <a style="text-decoration: none;" class="btn btn-md btn-success" href="search.php"
                                    name="save">
                                    <i class="fas fa-times"></i> Cancel</a>
                            </td>

                            <td>
                                <br> <br>
                                <button onclick="window.print()" class="btn btn-md btn-warning">
                                    <i class="fas fa-print"></i> Print</button>
                            </td>

                            <td>

                                <?php

                                                $get_prevtime = "select timestamp from historytable WHERE govid ='$gvid' ORDER BY timestamp DESC";
                                                
                                                $run_prevtime = mysqli_query($con , $get_prevtime);

                                                if (mysqli_num_rows($run_prevtime) == 0){

                                                    $prev_timestamp = "";

                                                }
                                                else{

                                                $row_time=mysqli_fetch_array($run_prevtime);

                                                $prev_timestamp = date("M-d-yy h:i:s A", strtotime( $row_time['timestamp']));

                                                }
                                                ?>


                                <span class="version-time" style="font-style: italic;"><?php echo $prev_timestamp; ?>
                                </span><br><br>
                                <button class="btn btn-md btn-prev" name="previous">

                                    <i class="fas fa-backward"></i> Get Previous Version</button>
                            </td>

                            <td>
                                <br> <br>
                                <button class="btn btn-md btn-danger" name="unlock">
                                <i class="fas fa-unlock-alt"></i> Unlock</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


    </form>

</div>



<!-- Modal for counties-->
<div class="modal fade" id="countyName" tabindex="-1" role="dialog" aria-labelledby="countyNameTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="font-size: 13px;" id="ktynhead">County Name</th>
                            <th style="font-size: 13px;" id="ktyahead">County Abb</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                                                $get_kty = "select * from kountynbrs";
                                                $run_kty = mysqli_query($con , $get_kty);

                                                while ($row_kty=mysqli_fetch_array($run_kty)){

                                                    $kid = $row_kty['kid'];
                                                    $ktyname = $row_kty['namesimple'];
                                                    $ktyabb = $row_kty['ktyabb'];
                                                    $code = $row_kty['dptrevcounty'];

                                                ?>
                        <tr>
                            <td style="font-size: 13px;"><?php echo $ktyname;  ?></td>
                            <td style="font-size: 13px;"><?php echo $ktyabb . " " . "(". $code . ")"; ?></td>
                        </tr>

                        <?php } ?>
                    </tbody>
                </table>

            </div>

        </div>
    </div>
</div>

<!-- Modal for govtypename  -->
<div class="modal fade" id="govTypeName" tabindex="-1" role="dialog" aria-labelledby="countyNameTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="font-size: 13px;" id="ktynhead">Gov Type Name</th>
                            <th style="font-size: 13px;" id="ktyahead">Gov Type Code</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                                                $get_gov = "select DISTINCT govtypeid, govtypename from govtype ORDER BY govtypename ASC";
                                                $run_gov = mysqli_query($con , $get_gov);

                                                while ($row_gov=mysqli_fetch_array($run_gov)){

                                                
                                                    $govname = $row_gov['govtypename'];
                                                    $govcode = $row_gov['govtypeid'];

                                                ?>
                        <tr>
                            <td style="font-size: 13px;"><?php echo $govname;  ?></td>
                            <td style="font-size: 13px;"><?php echo $govcode;  ?></td>
                        </tr>

                        <?php } ?>
                    </tbody>
                </table>

            </div>

        </div>
    </div>
</div>


<?php include('footer.php'); ?>
 <?php  }  ?> 



<?php 

/* Code of Unlock Button */

if(isset($_POST['unlock'])){


   echo "<script>window.open('update.php?govid=$gvid', '_self')</script>";
    

}


/* code for Previous Button  */

if(isset($_POST['previous'])){

    
    $get_prev = "select * from historytable WHERE govid ='$gvid' ORDER BY timestamp DESC";
                                                
    $run_prev = mysqli_query($con , $get_prev);

    if (mysqli_num_rows($run_prev) == 0){

        echo '
        <script>
            swal({
                    title: "No Previous Data!",
                    icon: "error",
                 });
    </script>
    ';

    }
    else{

     /**    echo '
        <script>
            swal({
                    title: "Previous Data Available!",
                    icon: "success",
                 });
    </script>
    ';
    */

    echo "<script>window.open('search-result.php?previd=$gvid', '_self')</script>";

    }
   


}

?>