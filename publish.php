<?php 
$title = "Publish Mode";
include('dbcon.php');
include('header.php'); 

?>

<?php
//GET SESSION OF NEW VARIABLES 
 





//GOVID OR PREVIOUS DATA ID
  if(!empty(isset($_GET['govid']) OR isset($_GET['previd'] ))){


    //BELOW IS THE CODE TO GET THE PRESENT ID
    $edit_gov = (!empty($_GET['govid'])?$_GET['govid']:null);
    if($edit_gov) {

    $get_a = "select * from addresses where GovId = '$edit_gov'";

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
   
    $version_link =" ";


    /** COde to get Session  */
  $newpbdnf  = $_SESSION["newpbdnf"];  
  $newpaddress  = $_SESSION["newpaddress"];   
  $newpcity  = $_SESSION["newpcity"];  
  $newpphone  = $_SESSION["newpphone"];   
  $newpemail  = $_SESSION["newpemail"];   
  $newweburl  = $_SESSION["newweburl"];   
  $newmaddress  = $_SESSION["newmaddress"];   
  $newmcity  = $_SESSION["newmcity"];  
  $newfaddress  = $_SESSION["newfaddress"];   
  $newfphone  = $_SESSION["newfphone"];   
  $newfemail  = $_SESSION["newfemail"];   
  $newweburl  = $_SESSION["newweburl"];   

  


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

        /** COde to get Session  */
        $newpbdnf  = $_SESSION["newpbdnf"];  
        $newpaddress  = $_SESSION["newpaddress"];   
        $newpcity  = $_SESSION["newpcity"];  
        $newpphone  = $_SESSION["newpphone"];   
        $newpemail  = $_SESSION["newpemail"];   
        $newweburl  = $_SESSION["newweburl"];   
        $newmaddress  = $_SESSION["newmaddress"];   
        $newmcity  = $_SESSION["newmcity"];  
        $newfaddress  = $_SESSION["newfaddress"];   
        $newfphone  = $_SESSION["newfphone"];   
        $newfemail  = $_SESSION["newfemail"];   
        $newweburl  = $_SESSION["newweburl"];   

  
    
       }
?>


<div class="col-md-10">
    <form method="POST" class="publish-mod-border publish search-result address">

        <!--row one-->
        <h6 style="font-weight: 700;" class="text-center text-white">New Changes are indicated in red </h6>
        <div class="row version">
           
            <div class="col-sm-2"></div>
            <div class="col-sm-10" style="font-weight: 600;">
            <?php echo $version_details; ?>
              <span class="version-time">It is from <?php echo $timestamp . $version_link; ?> </span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <td width="12%" class="search-rgov">
                                <label for="gov" class="sr-only">GovID </label>
                                <input type="text" class="form-control" id="" value="<?php echo $gvid;?>" readonly
                                    required placeholder="" readonly>

                            </td>
                            <td class="search-res">
                                <label for="gov" class="sr-only">PublicBodyNameFormal </label>
                                <input type="text" class="form-control" id="" value="<?php echo $pbdnfm ;?>" required
                                    pattern="\S+.*" placeholder=" "readonly>    
                              
                                    <div  class="<?php  if($pbdnfm == $newpbdnf){ echo "empty"; }else{echo "changed";} ?>"> 

                                    <input type="text" class="form-control" name="newpbdnf" value="<?php echo $newpbdnf ;?>"
                                        required pattern="\S+.*" placeholder=" ">
                                </div>
                            </td>

                        </tr>
                    </tbody>
                </table>

            </div>
        </div>

        <!--row two-->

        <!--   <div class="row">
            <!--sort as -->
        <!--
            <div class="col-sm-12">
                <table class="table table-borderless text-white">
                    <tbody class="search-res">
                        <tr>
                            <td width="11%"></td>
                            <td width="26%"><span class="address-text">Sort as</span>
                                <input type="text" class="form-control" id="" value="<?php echo $sort_as ;?>" readonly placeholder="" readonly>
                                <td />

                            <td width="10%"><span class="address-text">GovType
                                    <button type="button" class="btn btn-outline-light" data-toggle="modal"
                                        data-target="#govTypeName">
                                        <i class="fas fa-info"></i>
                                    </button></label>

                                </span>
                                <input type="text" class="form-control" id="" value="<?php echo $gvtype ;?>" readonly required placeholder="" readonly>
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
                                    required placeholder="" readonly>
                                    <div  class="<?php  if($hqpaddress == $newpaddress){ echo "empty"; }else{echo "changed";} ?>"> 
                                    <input type="text" class="form-control" name="newpaddress" value="<?php echo $newpaddress ;?>"
                                        required placeholder="">
                                </div>
                                <td />

                            <td width="20%">
                                <label for="gov" class="sr-only">City </label>
                                <input type="text" class="form-control" id="" value="<?php echo $hqpcity ;?>" required
                                    placeholder="" readonly>

                                    <div  class="<?php  if($hqpcity == $newpcity){ echo "empty"; }else{echo "changed";} ?>"> 
                                    <input type="text" class="form-control" name="newpcity" value="<?php echo $newpcity ;?>"
                                        required placeholder="">
                                </div>
                            </td>

                            <td width="5%">
                                <label for="gov" class="sr-only">State </label>
                                <input type="text" class="form-control" id="" value="<?php echo $hqstate ;?>" readonly
                                    placeholder="" readonly>

                            </td>

                            <td width="10%">
                                <label for="gov" class="sr-only">Zip </label>
                                <input type="text" class="form-control" value="<?php echo $hqmzip ;?>" readonly
                                    placeholder="" readonly>
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
                                <input type="text" class="form-control" id="" value="<?php echo $hqphone ;?>" required
                                    placeholder="" readonly>
                                    <div  class="<?php  if($hqphone == $newpphone){ echo "empty"; }else{echo "changed";} ?>"> 
                                    <input type="text" class="form-control" name="newpphone" value="<?php echo $newpphone ;?>"
                                        required placeholder="" readonly>
                                </div>
                            </td>
                            <td><span class="address-text">Email</span>
                                <input type="text" class="form-control" id="" value="<?php echo $hqemail ;?>" required
                                    placeholder="" readonly>
                                    <div  class="<?php  if($hqemail == $newpemail){ echo "empty"; }else{echo "changed";} ?>"> 
                                    <input type="text" class="form-control" name="newpemail" value="<?php echo $newpemail ;?>"
                                        required placeholder="">
                                </div>
                            </td>
                            <td width="35%"><span class="address-text">Website</span>
                                <input type="text" class="form-control" name="website" value="<?php echo $weburl ;?>"
                                    placeholder="" readonly>
                                    <div  class="<?php  if($weburl == $newweburl){ echo "empty"; }else{echo "changed";} ?>"> 
                                    <input type="text" class="form-control" name="website"
                                        value="<?php echo $newweburl;?>" placeholder="">
                                </div>
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
                                    required placeholder="" readonly>
                                    <div  class="<?php  if($hqmaddress == $newmaddress){ echo "empty"; }else{echo "changed";} ?>"> 
                                    <input type="text" class="form-control" name="newmaddress" value="<?php echo $newmaddress ;?>"
                                        required placeholder="" >
                                </div>
                                <td />

                            <td width="20%">
                                <label for="gov" class="sr-only">City </label>
                                <input type="text" class="form-control" id="" value="<?php echo $hqmcity ;?>" required
                                    placeholder=" "readonly>
                                    <div  class="<?php  if($hqmcity == $newmcity){ echo "empty"; }else{echo "changed";} ?>"> 
                                    <input type="text" class="form-control" name="newmcity" value="<?php echo $newmcity ;?>"
                                        required placeholder="">
                                </div>
                            </td>

                            <td width="5%">
                                <label for="gov" class="sr-only">State </label>
                                <input type="text" class="form-control" id="" value="<?php echo $hqstate ;?>" readonly
                                    placeholder=" "readonly>
                            </td>

                            <td width="10%">
                                <label for="gov" class="sr-only">Zip </label>
                                <input type="text" class="form-control" id="" value="<?php echo $hqmzip ;?>" readonly
                                    placeholder=" "readonly>
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
                                    required placeholder="" readonly>
                                    <div  class="<?php  if($foiaeaddress == $newfaddress){ echo "empty"; }else{echo "changed";} ?>"> 
                                    <input type="text" class="form-control" name="newfaddress" value="<?php echo $newfaddress;?>"
                                        required placeholder="">
                                </div>
                                <td />

                            <td width="5%">
                                <label for="gov" class="sr-only">State </label>
                                <input type="text" class="form-control" id="" value="<?php echo $foiastate ;?>" readonly
                                    placeholder="" readonly>
                            </td>

                            <td width="12%">
                                <label for="gov" class="sr-only">Zip </label>
                                <input type="text" class="form-control" id="" value="<?php echo $foiamzip ;?>" readonly
                                    placeholder="" readonly>
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
                                <input type="text" class="form-control" id="" value="<?php echo $foiaphone ;?>" required
                                    placeholder="" readonly>
                                    <div  class="<?php  if($foiaphone == $newfphone){ echo "empty"; }else{echo "changed";} ?>"> 
                                    <input type="text" class="form-control" id="" value="<?php echo $newfphone ;?>"
                                        required placeholder="">
                                </div>
                            </td>
                            <td><span class="address-text">FOIA Email</span>
                                <input type="text" class="form-control" id="" value="<?php echo $foiaemail ;?>" required
                                    placeholder="" readonly>
                                    <div  class="<?php  if($foiaemail == $newfemail){ echo "empty"; }else{echo "changed";} ?>"> 
                                    <input type="text" class="form-control" name="newfemail" value="<?php echo $newfemail ;?>"
                                        required placeholder="" >
                                </div>
                            </td>
                            <td width="35%"><span class="address-text">FOIA Website</span>
                                <input type="text" class="form-control" name="website" value="<?php echo $weburl ;?>"
                                    placeholder="" readonly>
                                    <div  class="<?php  if($weburl == $newweburl){ echo "empty"; }else{echo "changed";} ?>"> 
                                    <input type="text" class="form-control" name="website"
                                        value="<?php echo $newweburl;?>" placeholder="">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


        <!--row eight  first-->
        <!--
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-borderless text-white">
                    <tbody class="search-res">
                        <tr>
                            <td width="11%"><span class="address-text">Notes</span></td>
                            <td width="54%">
                                <textarea name="comments" id="" cols="30" rows="3" class="form-control"
                                    readonly placeholder="" readonly><?php// echo $desc; ?></textarea>
                            </td>
                            <td width="35%"></td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!--row eight-->
        <!--
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-borderless text-white">
                    <tbody class="search-res">
                        <tr>
                            <td width="11%"><span class="address-text">Cross References</span> </td>

                            <td width="15%">
                                <span class="address-text">Revenue</span>
                                <input type="text" class="form-control" id="" value="<?php echo $rev ;?>" readonly placeholder="" readonly>
                            </td>

                            <td width="12%"><span class="address-text">Comptroller</span>
                                <input type="text" class="form-control" id="" value="<?php echo $cmpid ;?>" readonly placeholder="" readonly>
                            </td>

                            <td width="2%"><span class="address-text"> <br></span>
                                <input type="text" class="form-control" id="" value="<?php echo $othertypeid ;?>"
                                    readonly placeholder="" readonly>
                                <span class="address-note">&nbsp;State</span>
                            </td>

                            <td width="20%"><span class="address-text">Other</span>
                                <input type="text" class="form-control" id="" value="<?php echo $othertypecode ;?>"
                                    readonly placeholder="" readonly>
                                <span class="address-note">Board of Education</span>
                            </td>

                            <td width="12%"></td>
                            <td width="12%"><br>
                                <span class="address-text">Counties
                                    <button type="button" class="btn btn-outline-light" data-toggle="modal"
                                        data-target="#countyName">
                                        <i class="fas fa-info"></i>
                                    </button>
                                </span></td>
                            <td width="8%">
                                <span class="address-text">SEI</span>
                                <input type="text" class="form-control" id="" value="<?php echo $ktyabb;?>" readonly placeholder="" readonly>
                            </td>

                            <td width="8%">
                                <span class="address-text">Home</span>
                                <input type="text" class="form-control" id="" value="<?php echo $ktyabb;?>" readonly placeholder="" readonly>

                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!--row eight-->
        <!--
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-borderless text-white">
                    <tbody class="search-res">
                        <tr>
                            <td width="11%"></td>

                            <td width="7%"><span class="address-text">Dept</span>
                                <input type="text" class="form-control" id="" value="<?php echo $dept ;?>" readonly placeholder="" readonly>
                                <span class="address-note"><?php echo $govfunction; ?></span>
                            </td>

                            <td width="12%"><span class="address-text">Parent Gov</span>
                                <input type="text" class="form-control" id="" value="<?php echo $parent ;?>" readonly placeholder="" readonly>
                            </td>

                            <td width="70%"></td>
                       <!--     <td width="8%">
                                <input type="text" class="form-control" id="" value="" readonly placeholder="" readonly>
                                <input type="text" class="form-control" id="" value="" readonly placeholder="" readonly>
                                <input type="text" class="form-control" id="" value="" readonly placeholder="" readonly>
                                <input type="text" class="form-control" id="" value="" readonly placeholder="" readonly>

                            </td>

                            <td width="8%">
                                <input type="text" class="form-control" id="" value="" readonly placeholder="" readonly>
                                <input type="text" class="form-control" id="" value="" readonly placeholder="" readonly>
                                <input type="text" class="form-control" id="" value="" readonly placeholder="" readonly>
                                <input type="text" class="form-control" id="" value="" readonly placeholder="" readonly>
                            </td>

                            <td width="8%">
                                <input type="text" class="form-control" id="" value="" readonly placeholder="" readonly>
                                <input type="text" class="form-control" id="" value="" readonly placeholder="" readonly>
                                <input type="text" class="form-control" id="" value="" readonly placeholder="" readonly>
                                <input type="text" class="form-control" id="" value="" readonly placeholder="" readonly>
                            </td>

                            <td width="8%">
                                <input type="text" class="form-control" id="" value="" readonly placeholder="" readonly>
                                <input type="text" class="form-control" id="" value="" readonly placeholder="" readonly>
                                <input type="text" class="form-control" id="" value="" readonly placeholder="" readonly>
                                <input type="text" class="form-control" id="" placeholder="&#61442;" readonly placeholder="" readonly>
                            </td>
  
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!--row ten-->

        <!-- send mail-->
        <div class="row send-email">
            <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" value=""> Send Email Confirmation
                </label>
              </div>
        </div>

        <div class="row">
            <div class="col-md-10 mx-auto search-result-btn">
                <table class="table table-borderless text-white">
                    <tbody>
                        <tr>

                            <td>
                                <br> <br>
                                <button class="btn btn-md btn-success" name="cancel">
                                    <i class="fas fa-times"></i> Cancel</button>
                            </td>

                            <td>

                                </span><br><br>
                                <button  onclick="window.print()"class="btn btn-md btn-warning">

                                    <i class="fas fa-print"></i> Print</button>
                            </td>

                            <td>
                                <br> <br>
                                <button class="btn btn-md btn-danger" name="confirm">
                                    <i class="far fa-check-circle"></i> Confirm</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


    </form>

</div>

    </div>

<!-- Modal for counties-->
<!--
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

                                                ?>
                        <tr>
                            <td style="font-size: 13px;"><?php echo $ktyname;  ?></td>
                            <td style="font-size: 13px;"><?php echo $ktyabb;  ?></td>
                        </tr>

                        <?php } ?>
                    </tbody>
                </table>

            </div>

        </div>
    </div>
</div>

<!-- Modal for govtypename  -->
<!--
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

                                                -->

<?php include('footer.php'); ?>

<?php  }  ?>


<?php

/* Code for Cancel Button */

if($_GET['govid']){

if(isset($_POST['cancel'])){

    $_SESSION["newpbdnf"]   = $_POST['pbdnf'];
    $_SESSION["newpaddress"]   = $_POST['paddress'];
    $_SESSION["newpcity"]   = $_POST['pcity'];
    $_SESSION["newpphone"]   = $_POST['pphone'];
    $_SESSION["newpemail"]   = $_POST['pemail'];
    $_SESSION["newweburl"]   = $_POST['website'];
    $_SESSION["newmaddress"]   = $_POST['Maddress'];
    $_SESSION["newmcity"]   = $_POST['Mcity'];
    $_SESSION["newfaddress"]   = $_POST['Faddress'];
    $_SESSION["newfphone"]   = $_POST['Fphone'];
    $_SESSION["newfemail"]   = $_POST['Femail'];
    $_SESSION["newweburl"]   = $_POST['website'];

echo "<script>window.open('update.php?govid=$gvid', '_self')</script>";
}
}

 elseif($_GET['previd']){
 if(isset($_POST['cancel'])){


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
    
    echo "<script>window.open('update.php?previd=$gvid', '_self')</script>"; 

    }

}



?>

<?php
if(isset($_POST['confirm'])){

   /* $newpbdnf;   
    $newpaddress;
    $newpcity;  
    $newpphone;
    $newpemail;
    $newweburl;
    $newmaddress;  
    $newmcity ;  
    $newfaddress; 
    $newfphone;
    $newfemail;
    $newweburl;
    */
//update statement for address table

    $sql_update = "UPDATE addresses 
   SET PublicBodyNameFormal = '$newpbdnf', 	WebsiteURL = '$newweburl',
   HQemail = '$newpemail', HQphysicalAddress = '$newpaddress', HQphysicalCity = '$newpcity', HQphone = '$newpphone',
   HQmailingAddress = '$newmaddress', HQmailingCity = '$newmcity', FoiaEmail = '$newfemail',
   FoiaMailingAddress = '$newfaddress', FoiaPhone = '$newfphone', FoiaPhysicalAddress = '$newfaddress',
   FoiaMailingCity = '$newmcity', timestamp = NOW()
   WHERE GovId = '$gvid'
    ";

$query_update = mysqli_query($con, $sql_update) or  die(mysqli_error($con));

//Insert Statement for History Table
    $sql_insert = "INSERT INTO historytable (govid, comptrollerid, revenueid, otheridtype, othertypecode, namesimple, PBDNF, govtype, websiteurl, 
    hqemail, hqphysicaladdress, hqphysicalcity, hqmailingzip, hqphone, hqmailingaddress, hqmailingcity, hqstate, Femail, Fmailingaddress,
     Fphone, Fphysicaladdress, Fmailingcity, Fstate, Fmailingzip, govtypename, webgroup, ballotgroupid, investiture, ktyabb, fullspan) 

     VALUES ('$gvid', '$cmpid', '$rev', '$othertypeid', '$othertypecode', '$sort_as', '$pbdnfm', '$gvtype', '$weburl', '$hqemail',
     '$hqpaddress', '$hqpcity', '$hqmzip', '$hqphone', '$hqmaddress', '$hqmcity', '$hqstate', '$foiaemail', '$foiaeaddress', 
     '$foiaphone', '$foiapaddress', '$foiamcity', '$foiastate', '$foiamzip', '$gvtypename', '$webgrp', '$bgrpid', '$investiture', '$ktyabb', '$fullspan')
    ";

$query_insert = mysqli_query($con, $sql_insert) or  die(mysqli_error($con));

    if ($query_update AND $query_insert == 1) 
    {
       
        echo '
        <script>
            swal({
                    title: "Updated Successfully!",
                    icon: "success",
                 });
                
                </script>';

      }
       else
       {
        echo '
        <script>
            swal({
                    title: "Update Not Successful",
                    icon: "error",
                 });
    </script>';

      }


}
?>