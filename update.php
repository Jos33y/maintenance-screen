<?php 
$title = "Update Mode";
include('dbcon.php');
include('header.php'); 

?>
<?php
//GET SESSION OF OLD VARIABLES 
 
//$oldWebsite =  $_SESSION["oldWebsite"];

//GOVID OR PREVIOUS DATA ID
  if(!empty(isset($_GET['govid']) OR isset($_GET['previd']))){


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
    $note = $row_edit['note'];

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

    $kty = $row_gov['ElectionAuthority'];

    $ktyone = $row_gov['EconInterests'];

    $sort_as = $row_gov['NameSimple'];

    $parent = $row_gov['ParentID'];

    $kty = $row_gov['ElectionAuthority'];
    if(empty($kty) == 1){
        echo " ";
    }else{
            $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty'";
            $qry = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($qry);
            $kty = $row['ktyabb'];
    }

    $ktyone = $row_gov['EconInterests'];
    if(empty($ktyone) == 1){
        echo " ";
    }else{
        $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$ktyone'";
        $qry = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($qry);
        $ktyone = $row['ktyabb'];
    }
    $sort_as = $row_gov['NameSimple'];

    $parent = $row_gov['ParentID'];

    $kty1 = $row_gov['kty1'];
    if(empty($kty1) == 1){
        echo " ";
    }else{
        $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty1'";
        $qry = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($qry);
        $kty1 = $row['ktyabb'];
    }

    $kty2 = $row_gov['kty2'];
    if(empty($kty2) == 1){
        echo " ";
    }else{
        $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty2'";
        $qry = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($qry);
        $kty2 = $row['ktyabb'];
    }

   $kty3 = $row_gov['kty3'];
   if(empty($kty3) == 1){
    echo " ";
    }else{
        $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty3'";
        $qry = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($qry);
        $kty3 = $row['ktyabb'];
    }

    $kty4 = $row_gov['kty4'];
    if(empty($kty4) == 1){
        echo " ";
    }else{
        $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty4'";
        $qry = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($qry);
        $kty4 = $row['ktyabb'];
    }

    $kty5 = $row_gov['kty5'];
    if(empty($kty5) == 1){
        echo " ";
    }else{
        $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty5'";
        $qry = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($qry);
        $kty5 = $row['ktyabb'];
    }

    $kty6 = $row_gov['kty6'];
    if(empty($kty6) == 1){
        echo " ";
    }else{
        $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty6'";
        $qry = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($qry);
        $kty6 = $row['ktyabb'];
    }

    $kty7 = $row_gov['kty7'];
    if(empty($kty7) == 1){
        echo " ";
    }else{
        $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty7'";
        $qry = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($qry);
        $kty7 = $row['ktyabb'];
    }

    $kty8 = $row_gov['kty8'];
    if(empty($kty8) == 1){
        echo " ";
    }else{
        $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty8'";
        $qry = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($qry);
        $kty8 = $row['ktyabb'];
    }

    $kty9 = $row_gov['kty9'];
    if(empty($kty9) == 1){
        echo " ";
    }else{
        $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty9'";
        $qry = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($qry);
        $kty9 = $row['ktyabb'];
    }

    $kty10 = $row_gov['kty10'];
    if(empty($kty10) == 1){
        echo " ";
    }else{
        $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty10'";
        $qry = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($qry);
        $kty10 = $row['ktyabb'];
    }
        
    $kty11 = $row_gov['kty11'];
    if(empty($kty11) == 1){
     echo " ";
     }else{
         $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty11'";
         $qry = mysqli_query($con, $sql);
         $row = mysqli_fetch_array($qry);
         $kty11 = $row['ktyabb'];
     }

    $kty12 = $row_gov['kty12'];
    if(empty($kty12) == 1){
        echo "";
    }else{
        $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty12'";
        $qry = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($qry);
        $kty12 = $row['ktyabb'];
    }

    $kty13 = $row_gov['kty13'];
    if(empty($kty13) == 1){
        echo " ";
    }else{
        $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty13'";
        $qry = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($qry);
        $kty13 = $row['ktyabb'];
    }

    $kty14 = $row_gov['kty14'];
    if(empty($kty14) == 1){
        echo " ";
    }else{
        $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty14'";
        $qry = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($qry);
        $kty14 = $row['ktyabb'];
    }

    
    $kty15 = $row_gov['kty15'];
    if(empty($kty15) == 1){
        echo " ";
    }else{
        $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty15'";
        $qry = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($qry);
        $kty15 = $row['ktyabb'];
    }

    
    $kty16 = $row_gov['kty16'];
    if(empty($kty16) == 1){
        echo " ";
    }else{
        $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty16'";
        $qry = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($qry);
        $kty16 = $row['ktyabb'];
    }
 
    $version_details = " <button style='font-weight: 600;' class='btn btn-sm btn-success'>This is the latest version</button>";
    
    //$version_link = ", Click " . "<a href='search-result.php?govid=$gvid' class='text-white'>" . "here" . "</a> " . " to bring up latest version";

    $version_link =" ";

     /** COde to get Session  
     if(isset($_POST['cancel'])){
     $pbdnf  = $_SESSION["newpbdnf"];  
     $hqpaddress  = $_SESSION["newpaddress"];   
     $hqpcity  = $_SESSION["newpcity"];  
     $hqphone  = $_SESSION["newpphone"];   
     $hqemail  = $_SESSION["newpemail"];   
     $weburl  = $_SESSION["newweburl"];   
     $hqmaddress  = $_SESSION["newmaddress"];   
     $hqmcity  = $_SESSION["newmcity"];  
     $foiaeaddress  = $_SESSION["newfaddress"];   
     $foiaphone  = $_SESSION["newfphone"];   
     $foiaemail  = $_SESSION["newfemail"];   
     $weburl  = $_SESSION["newweburl"];   

     }
     */

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
    
        $version_link = ", Click " . "<a href='update.php?govid=$gvid' class='text-white'>" . "here" . "</a> " . " to bring up latest version";
    
       // $version_link =" ";

    
       }
?>

<!--no print div -->
<div class="col-md-10">
    <form method="POST" class="update-border update search-result address">

        <!--row one-->
        <div class="row version">
            <div class="col-sm-2"></div>
            <div class="col-sm-10 time">
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
                                <input type="text" class="form-control" id="" value="<?php echo $gvid;?>" readonly required placeholder="">

                            </td>
                            <td width="80%"class="search-res">
                                <label for="gov" class="sr-only">PublicBodyNameFormal </label>
                                <input type="text" class="form-control" name="pbdnf" value="<?php echo $pbdnfm ;?>" required pattern="\S+.*" placeholder="">

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
                            <td width="26%"><span class="address-text">Sort as</span>
                                <input type="text" class="form-control" id="" name="sort-as" value="<?php echo $sort_as ;?>" placeholder="">
                                <td />

                            <td width="13%"><span class="address-text">GovType
                                    <button type="button" class="btn btn-outline-light" data-toggle="modal"
                                        data-target="#govTypeName">
                                        <i class="fas fa-info-circle"></i>
                                    </button></label>

                                </span>
                                <input type="text" class="form-control" id="" name="gvtype" value="<?php echo $gvtype ;?>" required placeholder="">
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
                                <input type="text" id="myAddress" class="form-control"name="paddress"value="<?php echo $hqpaddress ;?>" required placeholder="">
                                <td />

                            <td width="20%">
                                <label for="gov" class="sr-only">City </label>
                                <input type="text" id="myCity" class="form-control" name="pcity" value="<?php echo $hqpcity ;?>" required placeholder="">
                            </td>

                            <td width="6%">
                                <label for="gov" class="sr-only">State </label>
                                <input type="text" class="form-control" id="" value="<?php echo $hqstate ;?>" readonly placeholder="">
                            </td>

                            <td width="10%">
                                <label for="gov" class="sr-only">Zip </label>
                                <input type="text" class="form-control" id="" value="<?php echo $hqmzip ;?>" readonly placeholder="">
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
                                <input type="tel" id="myPhone" class="form-control" name="pphone" id="phoneNumber" value="<?php echo $hqphone ;?>" required placeholder="">
                            </td>
                            <td><span class="address-text">Email</span>
                                <input type="text" id="myEmail" class="form-control" name="pemail"  value="<?php echo $hqemail ;?>" required placeholder="">
                            </td>
                            <td width="35%"><span class="address-text">Website</span>
                                <input type="text" id="myWeburl" class="form-control" name="weburl" value="<?php echo $weburl ;?>" placeholder="">
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
                            <td width="11%"><span class="address-text">Mailing

                            <div class="form-check">
                                <label class="form-check-label">
                                <input type="checkbox" id="checkMail" class="form-check-input"  value="">same as physical
                                </label>
                            </div>
                            </span></td>
                            <td width="54%">
                                <label for="gov" class="sr-only"> Mailing Address </label>
                                <input type="text" id="mAddress"  class="form-control" name="Maddress"  value="<?php echo $hqmaddress ;?>" required placeholder="">
                                <td />

                            <td width="20%">
                                <label for="gov" class="sr-only">City </label>
                                <input type="text" id="mCity" class="form-control" name="Mcity"  value="<?php echo $hqmcity ;?>" required placeholder=" ">
                            </td>

                            <td width="6%">
                                <label for="gov" class="sr-only">State </label>
                                <input type="text" class="form-control" id="" value="<?php echo $hqstate ;?>" readonly placeholder=" ">
                            </td>

                            <td width="10%">
                                <label for="gov" class="sr-only">Zip </label>
                                <input type="text" class="form-control" id="" value="<?php echo $hqmzip ;?>" readonly placeholder=" ">
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
                            <td width="11%"><span class="address-text">FOIA
                            <div class="form-check">
                                <label class="form-check-label">
                                <input type="checkbox" id="checkFoia" class="form-check-input"  value="">same as Mailing
                                </label>
                            </div>
                            </span></td>
                            <td width="74%">
                                <label for="gov" class="sr-only"> Mailing Address </label>
                                <input type="text" id="fAddress"  class="form-control" name="Faddress"  value="<?php echo $foiaeaddress ;?>" required placeholder="">
                                <td />

                            <td width="6%">
                                <label for="gov" class="sr-only">State </label>
                                <input type="text" class="form-control"  value="<?php echo $foiastate ;?>"
                                    readonly placeholder="">
                            </td>

                            <td width="12%">
                                <label for="gov" class="sr-only">Zip </label>
                                <input type="text" class="form-control" value="<?php echo $foiamzip ;?>" readonly placeholder="">
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
                                <input type="text" id="Fphone" class="form-control" name="Fphone"  value="<?php echo $foiaphone ;?>" required placeholder="">
                            </td>
                            <td><span class="address-text">FOIA Email</span>
                                <input type="text" id="Femail" class="form-control" name="Femail"  value="<?php echo $foiaemail ;?>" required placeholder="">
                            </td>
                            <td width="35%"><span class="address-text">FOIA Website</span>
                                <input type="text" id="Fweburl" class="form-control" name="weburl" value="<?php echo $weburl ;?>" placeholder="">
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
                                <textarea name="comments" id="" cols="25" rows="2" class="form-control"
                                    readonly placeholder=""><?php echo $desc; ?></textarea>
                            </td>
                            <td width="9%"></td>
                                <td width="12%"><br>
                                    <span class="address-text">Counties
                                        <button type="button" class="btn btn-outline-light" data-toggle="modal"
                                            data-target="#countyName">
                                            <i class="fas fa-info-circle"></i>
                                        </button>
                                    </span></td>
                                <td width="6%">
                                    <span class="address-text">SEI</span>
                                    <input type="text" class="form-control" id=""name="kty" value="<?php echo $kty;?>"
                                     placeholder="">
                                </td>

                                <td width="6%">
                                    <span class="address-text">Home</span>
                                    <input type="text" class="form-control" id="" name="ktyone" value="<?php echo $ktyone;?>"
                                     placeholder="">

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
                            <td width="11%"><span class="address-text">Cross References</span> </td>

                            <td width="18%">
                                    <span class="address-text">Revenue</span>
                                    <input type="text" class="form-control" id="" name="revenue" value="<?php echo $rev ;?>" placeholder=""><br>
                               
                               
                                <div class="form-inline">
                                <span class="address-text">Parent Gov</span>  <span style="margin-left: 20%" class="address-text">Dept</span>
                                    <input type="text" style="width: 55%;" class="form-control" name ="parent"id="" value="<?php echo $parent ;?>"
                                        placeholder="">
                               
                                    <input type="text" style="width: 40%;" class="form-control" id="" value="<?php echo $dept ;?>" readonly placeholder="">
                                    <span style="margin-left: 57%" class="address-note"><?php echo $govfunction; ?></span>
            </div>
                                </td>


                            <td width="12%"><span class="address-text">Comptroller</span>
                                <input type="text" class="form-control" id="" name="comptroller" value="<?php echo $cmpid ;?>" placeholder="">
                            </td>

                            <td width="25%"><span class="address-text"> Type </span><span class="address-text">
                                        &nbsp;&nbsp; Other</span>
                                    <div class="form-inline">
                                        <input type="text" class="form-control col-sm-2" id="" name="type"
                                            value="<?php echo $othertypeid ;?>" placeholder="">
                                        <input type="text" class="form-control col-sm-7" id="" name="othertype"
                                            value="<?php echo $othertypecode ;?>" placeholder="">
                                    </div>
                                    <?php if(empty($othertypeid) == 0){

                                    echo "
                                    <span class='address-note'>State Board of Education</span>";
                                }else{
                                    echo "";
                                }
                                ?>
                                </td>
           
                            <td width="6%">
                                <input type="text" class="form-control" id="" name="kty1" value="<?php echo $kty1;?>" >
                                <input type="text" class="form-control" id="" name="kty2" value="<?php echo $kty2;?>">
                                <input type="text" class="form-control" id="" name="kty3" value="<?php echo $kty3;?>">
                                <input type="text" class="form-control" id="" name="kty4" value="<?php echo $kty4;?>">
                            </td>
                            <td width="6%">
                                <input type="text" class="form-control" id="" name="kty5" value="<?php echo $kty5;?>" >
                                <input type="text" class="form-control" id="" name="kty6" value="<?php echo $kty6;?>">
                                <input type="text" class="form-control" id="" name="kty7" value="<?php echo $kty7;?>">
                                <input type="text" class="form-control" id="" name="kty8" value="<?php echo $kty8;?>">
                            </td>

                            <td width="6%">
                                <input type="text" class="form-control" id="" name="kty9" value="<?php echo $kty9;?>" >
                                <input type="text" class="form-control" id="" name="kty10" value="<?php echo $kty10;?>">
                                <input type="text" class="form-control" id="" name="kty11" value="<?php echo $kty11;?>">
                                <input type="text" class="form-control" id="" name="kty12" value="<?php echo $kty12;?>">
                            </td>

                            <td width="6%">
                                <input type="text" class="form-control" id="" name="kty13" value="<?php echo $kty13;?>">
                                <input type="text" class="form-control" id="" name="kty14" value="<?php echo $kty14;?>">
                                <input type="text" class="form-control" id="" name="kty15" value="<?php echo $kty15;?>">
                                <input type="text" class="form-control" id="" name="kty16" value="<?php echo $kty16;?>" placeholder="&#61442;">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!--row ten-->

        <div class="row">
        <div class="col-md-2"></div>
            <div class="col-md-8 mx-auto search-result-btn">
                <table class="table table-borderless text-white">
                    <tbody>

                    <tr>
                         
                         <td>
                         <span class="note-text" style="margin-left:100%;"> <?php echo $note; ?></span></td>

                     </tr>
                        <tr>

                            <td>
                                <br> 
                                <a style="text-decoration: none;" class="btn btn-md btn-success"
                                    href="search-result.php?govid=<?php echo $gvid ;?>">
                                    <i class="fas fa-times"></i> Cancel</a>
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
                                </span><br>
                                <button class="btn btn-md btn-prev" name="previous">

                                    <i class="fas fa-backward"></i> Get Previous Version</button>
                            </td>

                            <td>
                                <br>
                                <button class="btn btn-md btn-warning" name="publish">
                                    <i class="fas fa-upload"></i> Publish This</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-md-2"></div>
        </div>
        </div>


    </form>

</div>

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
                            <th style="font-size: 13px;" id="ktyahead">County Abb</th>
                            <th style="font-size: 13px;" id="ktynhead">County Name</th>
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
                            <td style="font-size: 13px;"><?php echo $ktyabb . " " . "(". $code . ")";  ?></td>
                            <td style="font-size: 13px;"><?php echo $ktyname;  ?></td>                        
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
                            <th style="font-size: 13px;" id="ktyahead">Gov Type Code</th>
                            <th style="font-size: 13px;" id="ktynhead">Gov Type Name</th>
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
                            <td style="font-size: 13px;"><?php echo $govcode;  ?></td>
                            <td style="font-size: 13px;"><?php echo $govname;  ?></td>
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

/* Code for Publish Button */

if($_GET['govid']){

if(isset($_POST['publish'])){

    $_SESSION["newpbdnf"]   = $_POST['pbdnf'];
    $_SESSION["newpaddress"]   = $_POST['paddress'];
    $_SESSION["newpcity"]   = $_POST['pcity'];
    $_SESSION["newpphone"]   = $_POST['pphone'];
    $_SESSION["newpemail"]   = $_POST['pemail'];
    $_SESSION["newweburl"]   = $_POST['weburl'];
    $_SESSION["newmaddress"]   = $_POST['Maddress'];
    $_SESSION["newmcity"]   = $_POST['Mcity'];
    $_SESSION["newfaddress"]   = $_POST['Faddress'];
    $_SESSION["newfphone"]   = $_POST['Fphone'];
    $_SESSION["newfemail"]   = $_POST['Femail'];
    $_SESSION["newweburl"]   = $_POST['weburl'];
    $_SESSION["newsortas"]   = $_POST['sort-as'];
    $_SESSION["newgvtype"]   = $_POST['gvtype'];
    $_SESSION["newrevenue"]   = $_POST['revenue'];
    $_SESSION["newcomptroller"]   = $_POST['comptroller'];
    $_SESSION["newtype"]   = $_POST['type'];
    $_SESSION["newothertype"]   = $_POST['othertype'];
    $_SESSION["newparent"]   = $_POST['parent'];

    $_SESSION["nkty"] = $_POST['kty'];
    $_SESSION["nktyone"] = $_POST['ktyone'];

    $_SESSION["nkty1"] = $_POST['kty1'];
    $_SESSION["nkty2"] = $_POST['kty2'];
    $_SESSION["nkty3"] = $_POST['kty3'];
    $_SESSION["nkty4"] = $_POST['kty4'];
    $_SESSION["nkty5"] = $_POST['kty5'];
    $_SESSION["nkty6"] = $_POST['kty6'];
    $_SESSION["nkty7"] = $_POST['kty7'];
    $_SESSION["nkty8"] = $_POST['kty8'];
    $_SESSION["nkty9"] = $_POST['kty9'];
    $_SESSION["nkty10"] = $_POST['kty10'];
    $_SESSION["nkty11"] = $_POST['kty11'];
    $_SESSION["nkty12"] = $_POST['kty12'];
    $_SESSION["nkty13"] = $_POST['kty13'];
    $_SESSION["nkty14"] = $_POST['kty14'];
    $_SESSION["nkty15"] = $_POST['kty15'];
    $_SESSION["nkty16"] = $_POST['kty16'];


echo "<script>window.open('publish.php?govid=$gvid', '_self')</script>";
}
}

 elseif($_GET['previd']){
 if(isset($_POST['publish'])){


    $_SESSION["newpbdnf"]   = $_POST['pbdnf'];
    $_SESSION["newpaddress"]   = $_POST['paddress'];
    $_SESSION["newpcity"]   = $_POST['pcity'];
    $_SESSION["newpphone"]   = $_POST['pphone'];
    $_SESSION["newpemail"]   = $_POST['pemail'];
    $_SESSION["newweburl"]   = $_POST['weburl'];
    $_SESSION["newmaddress"]   = $_POST['Maddress'];
    $_SESSION["newmcity"]   = $_POST['Mcity'];
    $_SESSION["newfaddress"]   = $_POST['Faddress'];
    $_SESSION["newfphone"]   = $_POST['Fphone'];
    $_SESSION["newfemail"]   = $_POST['Femail'];
    $_SESSION["newweburl"]   = $_POST['weburl'];

    $_SESSION["newsortas"]   = $_POST['sort-as'];
    $_SESSION["newgvtype"]   = $_POST['gvtype'];
    $_SESSION["newrevenue"]   = $_POST['revenue'];
    $_SESSION["newcomptroller"]   = $_POST['comptroller'];
    $_SESSION["newtype"]   = $_POST['type'];
    $_SESSION["newothertype"]   = $_POST['othertype'];
    $_SESSION["newparent"]   = $_POST['parent'];

    $_SESSION["nkty"] = $_POST['kty'];
    $_SESSION["nktyone"] = $_POST['ktyone'];

    $_SESSION["nkty1"] = $_POST['kty1'];
    $_SESSION["nkty2"] = $_POST['kty2'];
    $_SESSION["nkty3"] = $_POST['kty3'];
    $_SESSION["nkty4"] = $_POST['kty4'];
    $_SESSION["nkty5"] = $_POST['kty5'];
    $_SESSION["nkty6"] = $_POST['kty6'];
    $_SESSION["nkty7"] = $_POST['kty7'];
    $_SESSION["nkty8"] = $_POST['kty8'];
    $_SESSION["nkty9"] = $_POST['kty9'];
    $_SESSION["nkty10"] = $_POST['kty10'];
    $_SESSION["nkty11"] = $_POST['kty11'];
    $_SESSION["nkty12"] = $_POST['kty12'];
    $_SESSION["nkty13"] = $_POST['kty13'];
    $_SESSION["nkty14"] = $_POST['kty14'];
    $_SESSION["nkty15"] = $_POST['kty15'];
    $_SESSION["nkty16"] = $_POST['kty16'];

    echo "<script>window.open('publish.php?previd=$gvid', '_self')</script>"; 

    }

}


/* Code for Get Previous Button */
if(isset($_POST['previous'])){

    
    $get_prev = "select * from historytable WHERE govid ='$gvid' ORDER BY timestamp DESC";
                                                
    $run_prev = mysqli_query($con , $get_prev);

    if (mysqli_num_rows($run_prev) == 0){

        echo '
        <script>
            swal({
                    title: "No Previous Version!",
                    icon: "error",
                 });
    </script>
    ';

    }
    else{

    echo "<script>window.open('update.php?previd=$gvid', '_self')</script>";

    }

}

?>