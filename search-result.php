<?php 
$title = "Search Result";
include('dbcon.php');
include('header.php'); 

?>

<?php

  if(isset($_GET['govid'])){

    $edit_id = $_GET['govid'];

    $get_a = "select * from addresses where GovId = '$edit_id'";

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
 
    $version_details = "This is not the latest version";

    //$version_link = ", Click " . "<a href='#' class='text-white'>" . "here" . "</a> " . " to bring up latest version";

    $version_link =" ";

?>
<!--no print div -->
<div class="noprint">
<!--header image-->

<img src="images/screenblue.jpg" alt="" class="back-image">

<!-- page title-->
<div class="container">
    <h2 class="page-title blue">
        Screen Result
    </h2>
    <hr width="15%" class="page-title-line">

  </div>
  </div>
    <!--table for ballot-->
<div class="container">
    <form method="POST" action="#" class="screen-border search-result address">

        <!--row one-->
        <div class="row version">
            <div class="col-sm-1"></div>
            <div class="col-sm-10" style="font-weight: 600;">
                <button style="font-weight: 600;" class="btn btn-md btn-danger"><?php echo $version_details; ?></button> 
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
                                <input type="text" class="form-control" id="" value="<?php echo $gvid;?>" disabled>

                            </td>
                            <td class="search-res">
                                <label for="gov" class="sr-only">PublicBodyNameFormal </label>
                                <input type="text" class="form-control" id="" value="<?php echo $pbdnfm ;?>">

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
                                <input type="text" class="form-control" id="" value="<?php echo $sort_as ;?>" disabled>
                                <td />

                            <td width="5%"><span class="address-text">GovType</span>
                                <input type="text" class="form-control" id="" value="<?php echo $gvtype ;?>" disabled>
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
                                <input type="text" class="form-control" id="" value="<?php echo $hqpaddress ;?>">
                                <td />

                            <td width="20%">
                                <label for="gov" class="sr-only">City </label>
                                <input type="text" class="form-control" id="" value="<?php echo $hqpcity ;?>">
                            </td>

                            <td width="5%">
                                <label for="gov" class="sr-only">State </label>
                                <input type="text" class="form-control" id="" value="<?php echo $hqstate ;?>" disabled>
                            </td>

                            <td width="10%">
                                <label for="gov" class="sr-only">Zip </label>
                                <input type="text" class="form-control" id="" value="<?php echo $hqmzip ;?>" disabled>
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
                                <input type="text" class="form-control" id="" value="<?php echo $hqphone ;?>">
                            </td>
                            <td><span class="address-text">Email</span>
                                <input type="text" class="form-control" id="" value="<?php echo $hqemail ;?>">
                            </td>
                            <td width="35%"><span class="address-text">Website</span>
                                <input type="text" class="form-control" id="" value="<?php echo $weburl ;?>">
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
                                <input type="text" class="form-control" id="" value="<?php echo $hqmaddress ;?>">
                                <td />

                            <td width="20%">
                                <label for="gov" class="sr-only">City </label>
                                <input type="text" class="form-control" id="" value="<?php echo $hqmcity ;?>">
                            </td>

                            <td width="5%">
                                <label for="gov" class="sr-only">State </label>
                                <input type="text" class="form-control" id="" value="<?php echo $hqstate ;?>" disabled>
                            </td>

                            <td width="10%">
                                <label for="gov" class="sr-only">Zip </label>
                                <input type="text" class="form-control" id="" value="<?php echo $hqmzip ;?>" disabled>
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
                                <input type="text" class="form-control" id="" value="<?php echo $foiaeaddress ;?>">
                                <td />

                            <td width="5%">
                                <label for="gov" class="sr-only">State </label>
                                <input type="text" class="form-control" id="" value="<?php echo $foiastate ;?>"
                                    disabled>
                            </td>

                            <td width="12%">
                                <label for="gov" class="sr-only">Zip </label>
                                <input type="text" class="form-control" id="" value="<?php echo $foiamzip ;?>" disabled>
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
                                <input type="text" class="form-control" id="" value="<?php echo $foiaphone ;?>">
                            </td>
                            <td><span class="address-text">FOIA Email</span>
                                <input type="text" class="form-control" id="" value="<?php echo $foiaemail ;?>">
                            </td>
                            <td width="35%"><span class="address-text">FOIA Website</span>
                                <input type="text" class="form-control" id="" value="<?php echo $weburl ;?>">
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
                                    disabled><?php echo $desc; ?></textarea>
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

                            <td width="15%">
                                <span class="address-text">Revenue</span>
                                <input type="text" class="form-control" id="" value="<?php echo $rev ;?>" disabled>
                            </td>

                            <td width="12%"><span class="address-text">Comptroller</span>
                                <input type="text" class="form-control" id="" value="<?php echo $cmpid ;?>" disabled>
                            </td>

                            <td width="2%"><span class="address-text"> <br></span>
                                <input type="text" class="form-control" id="" value="<?php echo $othertypeid ;?>"
                                    disabled>
                                <span class="address-note">&nbsp;State</span>
                            </td>

                            <td width="20%"><span class="address-text">Other</span>
                                <input type="text" class="form-control" id="" value="<?php echo $othertypecode ;?>"
                                    disabled>
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
                                <input type="text" class="form-control" id="" value="<?php echo $ktyabb;?>" disabled>
                            </td>

                            <td width="8%">
                                <span class="address-text">Home</span>
                                <input type="text" class="form-control" id="" value="<?php echo $ktyabb;?>" disabled>

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
                                <input type="text" class="form-control" id="" value="<?php echo $dept ;?>" disabled>
                                <span class="address-note"><?php echo $govfunction; ?></span>
                            </td>

                            <td width="12%"><span class="address-text">Parent Gov</span>
                                <input type="text" class="form-control" id="" value="<?php echo $parent ;?>" disabled>
                            </td>

                            <td width="38%"></td>
                            <td width="8%">
                                <input type="text" class="form-control" id="" value="" disabled>
                                <input type="text" class="form-control" id="" value="" disabled>
                                <input type="text" class="form-control" id="" value="" disabled>
                                <input type="text" class="form-control" id="" value="" disabled>

                            </td>

                            <td width="8%">
                                <input type="text" class="form-control" id="" value="" disabled>
                                <input type="text" class="form-control" id="" value="" disabled>
                                <input type="text" class="form-control" id="" value="" disabled>
                                <input type="text" class="form-control" id="" value="" disabled>
                            </td>

                            <td width="8%">
                                <input type="text" class="form-control" id="" value="" disabled>
                                <input type="text" class="form-control" id="" value="" disabled>
                                <input type="text" class="form-control" id="" value="" disabled>
                                <input type="text" class="form-control" id="" value="" disabled>
                            </td>

                            <td width="8%">
                                <input type="text" class="form-control" id="" value="" disabled>
                                <input type="text" class="form-control" id="" value="" disabled>
                                <input type="text" class="form-control" id="" value="" disabled>
                                <input type="text" class="form-control" id="" placeholder="&#61442;" disabled>
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
                                <a style="text-decoration: none;" class="btn btn-md btn-success" href="search.php" name="save">
                                    <i class="fas fa-times"></i> Cancel</a>
                            </td>

                            <td>
                                <br> <br>
                                <button  onclick="window.print()" class="btn btn-md btn-warning">
                                    <i class="fas fa-times"></i> Print</button>
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


                            <span class="version-time" style="font-style: italic;"><?php echo $prev_timestamp; ?> </span><br><br>
                                <a style="text-decoration: none;" class="btn btn-md btn-prev" href="#" name="save">

                                    <i class="fas fa-backward"></i> Get Previous Version</a>
                            </td>

                            <td>
                                <br> <br>
                                <a style="text-decoration: none;" class="btn  btn-md btn-danger" href="#" name="save">
                                    <i class="fas fa-upload"></i> Publish This</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


    </form>

</div>



<!-- Modal -->
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


<?php include('footer.php'); ?>

<?php  } ?>