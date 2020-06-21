<?php 
$title = "Screen Mode";
include('dbcon.php');
include('header.php'); 
session_destroy();

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

    $govfunction = $row['govfunction'];

    $investiture = $row['investiture'];

    $webgrp = $row['webgroup'];

    $gvtypename = $row['govtypename'];

    $get_governments = "select * from governments where GovId = '$gvid'";

    $run_governments = mysqli_query($con, $get_governments);

    $row_gov = mysqli_fetch_array($run_governments);

    $othertypeid = $row_gov['OtherIDtype'];

    $othertypecode = $row_gov['OtherID'];

    $dept = $row_gov['DeptId'];

    $rev = $row_gov['RevenueID'];

    $desc = $row_gov['Comments'];

    $sort_as = $row_gov['NameSimple'];

    $parent = $row_gov['ParentID'];

    $cmpid = $row_gov['ComptrollerID'];


    $kty = $row_gov['ElectionAuthority'];

    if(is_numeric($kty) != 1){
        $kty;
           
    }else{
        $sql = "SELECT * FROM kountynbrs WHERE eiauthority = $kty";
        $qry = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($qry);
        $kty = $row['ktyabb'];
            
    }

        $ktyone = $row_gov['EconInterests'];
        if(is_numeric($ktyone) != 1){
            $ktyone;
        }else{
            $sql = "SELECT * FROM kountynbrs WHERE eiauthority = $ktyone";
            $qry = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($qry);
            $ktyone = $row['ktyabb'];
        }
  

    $kty1 = $row_gov['kty1'];
    if(is_numeric($kty1) != 1){
        $kty1; 
    }else{
        $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty1'";
        $qry = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($qry);
        $kty1 = $row['ktyabb'];
    }

    $kty2 = $row_gov['kty2'];
    if(is_numeric($kty2) != 1){
        $kty2; 
    }else{
        $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty2'";
        $qry = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($qry);
        $kty2 = $row['ktyabb'];
    }

   $kty3 = $row_gov['kty3'];
   if(is_numeric($kty3) != 1){
    $kty3; 
    }else{
        $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty3'";
        $qry = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($qry);
        $kty3 = $row['ktyabb'];
    }

    $kty4 = $row_gov['kty4'];
    if(is_numeric($kty4) != 1){
        $kty4; 
    }else{
        $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty4'";
        $qry = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($qry);
        $kty4 = $row['ktyabb'];
    }

    $kty5 = $row_gov['kty5'];
    if(is_numeric($kty5) != 1){
        $kty5; 
    }else{
        $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty5'";
        $qry = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($qry);
        $kty5 = $row['ktyabb'];
    }

    $kty6 = $row_gov['kty6'];
    if(is_numeric($kty6) != 1){
        $kty6; 
    }else{
        $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty6'";
        $qry = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($qry);
        $kty6 = $row['ktyabb'];
    }

    $kty7 = $row_gov['kty7'];
    if(is_numeric($kty7) != 1){
        $kty7; 
    }else{
        $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty7'";
        $qry = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($qry);
        $kty7 = $row['ktyabb'];
    }

    $kty8 = $row_gov['kty8'];
    if(is_numeric($kty8) != 1){
        $kty8; 
    }else{
        $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty8'";
        $qry = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($qry);
        $kty8 = $row['ktyabb'];
    }

    $kty9 = $row_gov['kty9'];
    if(is_numeric($kty9) != 1){
        $kty9; 
    }else{
        $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty9'";
        $qry = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($qry);
        $kty9 = $row['ktyabb'];
    }

    $kty10 = $row_gov['kty10'];
    if(is_numeric($kty10) != 1){
        $kty10; 
    }else{
        $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty10'";
        $qry = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($qry);
        $kty10 = $row['ktyabb'];
    }
        
    $kty11 = $row_gov['kty11'];
    if(is_numeric($kty11) != 1){
        $kty11; 
     }else{
         $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty11'";
         $qry = mysqli_query($con, $sql);
         $row = mysqli_fetch_array($qry);
         $kty11 = $row['ktyabb'];
     }

    $kty12 = $row_gov['kty12'];
    if(is_numeric($kty12) != 1){
        $kty12; 
    }else{
        $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty12'";
        $qry = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($qry);
        $kty12 = $row['ktyabb'];
    }

    $kty13 = $row_gov['kty13'];
    if(is_numeric($kty13) != 1){
        $kty13; 
    }else{
        $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty13'";
        $qry = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($qry);
        $kty13 = $row['ktyabb'];
    }

    $kty14 = $row_gov['kty14'];
    if(is_numeric($kty14) != 1){
        $kty14; 
    }else{
        $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty14'";
        $qry = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($qry);
        $kty14 = $row['ktyabb'];
    }

   
    $kty15 = $row_gov['kty15'];
    if(is_numeric($kty15) != 1){
        $kty15; 
    }else{
        $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty15'";
        $qry = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($qry);
        $kty15 = $row['ktyabb'];
    }

    
    $kty16 = $row_gov['kty16'];
    if(is_numeric($kty16) != 1){
        $kty16; 
    }else{
        $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty16'";
        $qry = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($qry);
        $kty16 = $row['ktyabb'];
    }
 
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
     
         $sort_as = $row_edit['namesimple'];

         $gvtypename = $row_edit['govtypename'];

         $kty = $row_edit['electionauth'];

         if(is_numeric($kty) != 1){
            $kty;      
        }else{
            $sql = "SELECT * FROM kountynbrs WHERE eiauthority = $kty";
            $qry = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($qry);
            $kty = $row['ktyabb'];
                
        }
    
            $ktyone = $row_edit['econinterest'];
            if(is_numeric($ktyone) != 1){
                $ktyone;
            }else{
                $sql = "SELECT * FROM kountynbrs WHERE eiauthority = $ktyone";
                $qry = mysqli_query($con, $sql);
                $row = mysqli_fetch_array($qry);
                $ktyone = $row['ktyabb'];
            }
      
    
        $kty1 = $row_edit['kty1'];
        if(is_numeric($kty1) != 1){
            $kty1; 
        }else{
            $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty1'";
            $qry = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($qry);
            $kty1 = $row['ktyabb'];
        }
    
        $kty2 = $row_edit['kty2'];
        if(is_numeric($kty2) != 1){
            $kty2; 
        }else{
            $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty2'";
            $qry = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($qry);
            $kty2 = $row['ktyabb'];
        }
    
       $kty3 = $row_edit['kty3'];
       if(is_numeric($kty3) != 1){
        $kty3; 
        }else{
            $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty3'";
            $qry = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($qry);
            $kty3 = $row['ktyabb'];
        }
    
        $kty4 = $row_edit['kty4'];
        if(is_numeric($kty4) != 1){
            $kty4; 
        }else{
            $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty4'";
            $qry = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($qry);
            $kty4 = $row['ktyabb'];
        }
    
        $kty5 = $row_edit['kty5'];
        if(is_numeric($kty5) != 1){
            $kty5; 
        }else{
            $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty5'";
            $qry = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($qry);
            $kty5 = $row['ktyabb'];
        }
    
        $kty6 = $row_edit['kty6'];
        if(is_numeric($kty6) != 1){
            $kty6; 
        }else{
            $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty6'";
            $qry = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($qry);
            $kty6 = $row['ktyabb'];
        }
    
        $kty7 = $row_edit['kty7'];
        if(is_numeric($kty7) != 1){
            $kty7; 
        }else{
            $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty7'";
            $qry = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($qry);
            $kty7 = $row['ktyabb'];
        }
    
        $kty8 = $row_edit['kty8'];
        if(is_numeric($kty8) != 1){
            $kty8; 
        }else{
            $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty8'";
            $qry = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($qry);
            $kty8 = $row['ktyabb'];
        }
    
        $kty9 = $row_edit['kty9'];
        if(is_numeric($kty9) != 1){
            $kty9; 
        }else{
            $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty9'";
            $qry = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($qry);
            $kty9 = $row['ktyabb'];
        }
    
        $kty10 = $row_edit['kty10'];
        if(is_numeric($kty10) != 1){
            $kty10; 
        }else{
            $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty10'";
            $qry = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($qry);
            $kty10 = $row['ktyabb'];
        }
            
        $kty11 = $row_edit['kty11'];
        if(is_numeric($kty11) != 1){
            $kty11; 
         }else{
             $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty11'";
             $qry = mysqli_query($con, $sql);
             $row = mysqli_fetch_array($qry);
             $kty11 = $row['ktyabb'];
         }
    
        $kty12 = $row_edit['kty12'];
        if(is_numeric($kty12) != 1){
            $kty12; 
        }else{
            $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty12'";
            $qry = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($qry);
            $kty12 = $row['ktyabb'];
        }
    
        $kty13 = $row_edit['kty13'];
        if(is_numeric($kty13) != 1){
            $kty13; 
        }else{
            $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty13'";
            $qry = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($qry);
            $kty13 = $row['ktyabb'];
        }
    
        $kty14 = $row_edit['kty14'];
        if(is_numeric($kty14) != 1){
            $kty14; 
        }else{
            $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty14'";
            $qry = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($qry);
            $kty14 = $row['ktyabb'];
        }
    
       
        $kty15 = $row_edit['kty15'];
        if(is_numeric($kty15) != 1){
            $kty15; 
        }else{
            $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty15'";
            $qry = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($qry);
            $kty15 = $row['ktyabb'];
        }
    
        
        $kty16 = $row_edit['kty16'];
        if(is_numeric($kty16) != 1){
            $kty16; 
        }else{
            $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '$kty16'";
            $qry = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($qry);
            $kty16 = $row['ktyabb'];
        }
            $note = "";
         $dept = "";
    
        $govfunction = "";

        $desc = $row_edit['comments'];
    
       $parent = ""; 

        $timestamp = date("M-d-yy h:i:s A", strtotime($row_edit['timestamp']));
       
        $version_details = " <button style='font-weight: 600;' class='btn btn-md btn-danger'>This is not the latest version</button>";
    
        $version_link = ", Click " . "<a href='search-result.php?govid=$gvid' class='text-white'>" . "here" . "</a> " . " to bring up latest version";
    
       // $version_link =" ";
    
       }
?>

<!--no print div -->
<div class="col-md-10">
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
                            <td width="11%" class="search-rgov">
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
                                <input type="text" class="form-control" id="" value="<?php echo $hqpaddress ;?>"
                                    readonly>
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
                                <input type="tel" class="form-control" id="" value="<?php echo $hqphone ;?>" readonly>
                            </td>
                            <td><span class="address-text">Email</span>
                                <input type="text" class="form-control" id="" value="<?php echo $hqemail ;?>" readonly>
                            </td>
                            <td width="35%"><span class="address-text">Website</span>
                                <input type="url" class="form-control" name="website" value="<?php echo $weburl ;?>"
                                    readonly>
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
                                <input type="text" class="form-control" id="" value="<?php echo $hqmaddress ;?>"
                                    readonly>
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
                                <input type="text" class="form-control" id="" value="<?php echo $foiaeaddress ;?>"
                                    readonly>
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
                                <input type="text" class="form-control" id="" value="<?php echo $foiaphone ;?>"
                                    readonly>
                            </td>
                            <td><span class="address-text">FOIA Email</span>
                                <input type="text" class="form-control" id="" value="<?php echo $foiaemail ;?>"
                                    readonly>
                            </td>
                            <td width="35%"><span class="address-text">FOIA Website</span>
                                <input type="url" class="form-control" name="website" value="<?php echo $weburl ;?>"
                                    readonly>
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
                                <textarea name="comments" id="" cols="25" rows="2" class="form-control" readonly
                                    placeholder=""><?php echo $desc; ?></textarea>
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
                                <input type="text" class="form-control" id="" value="<?php echo $kty;?>" readonly>
                            </td>

                            <td width="6%">
                                <span class="address-text">Home</span>
                                <input type="text" class="form-control" id="" value="<?php echo $ktyone;?>" readonly>

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
                                <input type="text" class="form-control" id="" value="<?php echo $rev ;?>" readonly><br>


                                <div class="form-inline">
                                    <span class="address-text">Parent Gov</span> <span style="margin-left: 20%"
                                        class="address-text">Dept</span>
                                    <input type="text" style="width: 55%;" class="form-control" id=""
                                        value="<?php echo $parent ;?>" readonly>

                                    <input type="text" style="width: 40%;" class="form-control" id=""
                                        value="<?php echo $dept ;?>" readonly>
                                    <span style="margin-left: 57%"
                                        class="address-note"><?php echo $govfunction; ?></span>
                                </div>
                            </td>

                            <td width="12%"><span class="address-text">Comptroller</span>
                                <input type="text" class="form-control" id="" value="<?php echo $cmpid ;?>" readonly>
                            </td>

                            <td width="25%"><span class="address-text"> Type </span><span class="address-text">
                                    &nbsp;&nbsp; Other</span>
                                <div class="form-inline">
                                    <input type="text" class="form-control col-sm-2" id=""
                                        value="<?php echo $othertypeid ;?>" readonly>
                                    <input type="text" class="form-control col-sm-7" id=""
                                        value="<?php echo $othertypecode ;?>" readonly>
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
                                <input type="text" class="form-control" id="" value="<?php echo $kty1;?>" readonly>
                                <input type="text" class="form-control" id="" value="<?php echo $kty2;?>" readonly>
                                <input type="text" class="form-control" id="" value="<?php echo $kty3;?>" readonly>
                                <input type="text" class="form-control" id="" value="<?php echo $kty4;?>" readonly>
                            </td>
                            <td width="6%">
                                <input type="text" class="form-control" id="" value="<?php echo $kty5;?>" readonly>
                                <input type="text" class="form-control" id="" value="<?php echo $kty6;?>" readonly>
                                <input type="text" class="form-control" id="" value="<?php echo $kty7;?>" readonly>
                                <input type="text" class="form-control" id="" value="<?php echo $kty8;?>" readonly>
                            </td>

                            <td width="6%">
                                <input type="text" class="form-control" id="" value="<?php echo $kty9;?>" readonly>
                                <input type="text" class="form-control" id="" value="<?php echo $kty10;?>" readonly>
                                <input type="text" class="form-control" id="" value="<?php echo $kty11;?>" readonly>
                                <input type="text" class="form-control" id="" value="<?php echo $kty12;?>" readonly>
                            </td>

                            <td width="6%">
                                <input type="text" class="form-control" id="" value="<?php echo $kty13;?>" readonly>
                                <input type="text" class="form-control" id="" value="<?php echo $kty14;?>" readonly>
                                <input type="text" class="form-control" id="" value="<?php echo $kty15;?>" readonly>
                                <input type="text" class="form-control" id="" value="<?php echo $kty16;?>"
                                    placeholder="&#61442;" readonly>
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!--row ten-->
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-6 mx-auto">
                <span class="note-text"> <?php echo $note; ?></span>
            </div>
            <div class="col-md-2"></div>
        </div>

        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-7 mx-auto search-result-btn">
                <table class="table table-borderless text-white">
                    <tbody>

                        <tr>

                            <td>
                                <br>
                                <a style="text-decoration: none;" class="btn btn-md btn-success" href="search.php"
                                    name="save">
                                    <i class="fas fa-times"></i> Cancel</a>
                            </td>

                            <td>
                                <br>
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
                                </span><br>
                                <button class="btn btn-md btn-prev" name="previous">

                                    <i class="fas fa-backward"></i> Get Previous Version</button>
                            </td>

                            <td>
                                <br>
                                <button class="btn btn-md btn-danger" name="unlock">
                                    <i class="fas fa-unlock-alt"></i> Unlock</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-2"></div>
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
                                                            $code = $row_kty['eiauthority2'];

                                                        ?>
                        <tr>
                            <td style="font-size: 13px;"><?php echo $ktyabb . " " . "(". $code . ")"; ?></td>
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
                    title: "No Previous Version!",
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