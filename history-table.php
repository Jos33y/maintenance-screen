<!-- php get header -->

<?php 
$title = "View History";
include('dbcon.php');
include('header.php'); 

?>
<!--header image-->
<!--header image-->

<img src="images/screengold.jpg" alt="" class="back-image">

<!-- page title-->
<div class="container-fluid">
    <h2 class="page-title gold">
        Edit History
    </h2>
    <hr width="15%" class="page-title-line">


    <!--table for ballot-->
    <div class="sty">
        <table class="table border-bottom border">
            <thead>
                <tr class="county-tble-head">
                    <th></th>
                    <th>Date</th>
                    <th>id</th>
                    <th>GovId</th>
                    <th>ComptrollerID</th>
                    <th>RevenueID</th>
                    <th>OtherIDtype</th>
                    <th>OtherID</th>
                    <th>NameSimple</th>
                    <th>PublicBodyNameFormal</th>
                    <th>GovType</th>
                    <th>WebsiteURL</th>
                    <th>HQemail</th>
                    <th>HQphysicalAddress</th>
                    <th>HQphysicalCity</th>
                    <th>HQmailingZip</th>
                    <th>HQphone</th>
                    <th>HQmailingAddress</th>
                    <th>HQmailingCity</th>
                    <th>HQState</th>
                    <th>FoiaEmail</th>
                    <th>FoiaMailingAddress</th>
                    <th>FoiaPhone</th>
                    <th>FoiaPhysicalAddress</th>
                    <th>FoiaMailingCity</th>
                    <th>FoiaState</th>
                    <th>FoiaMailingZip</th>
                    <th>GovTypeName</th>
                    <th>WebGroup</th>
                    <th>BallotGroupId</th>
                    <th>Investiture</th>
                    <th>KtyAbb</th>
                    <th>FullSpan</th>



                </tr>
            </thead>
            <tbody>

                <?php
            $i = 0;
                $get_history = "select * from historytable LIMIT 100";
                $run_history = mysqli_query($con, $get_history);
                while ($row = mysqli_fetch_array($run_history)){
                    
                        $id = $row['hist_id'];
                        $gvid = $row['govid'];
                        $cmpid = $row['comptrollerid'];
                        $revid = $row['revenueid'];
                        $othertypeid = $row['otheridtype'];
                        $otid = $row['othertypecode'];
                        $nmsimp = $row['namesimple'];
                        $ktyabb = $row['ktyabb']; 
                        $fulspan = $row['fullspan'];
                        $pbdnfm = $row['PBDNF'];
                        $gvtype = $row['govtype'];
                        $weburl = $row['websiteurl'];
                        $hqemail = $row['hqemail'];
                        $hqpaddress = $row['hqphysicaladdress'];
                        $hqpcity = $row['hqphysicalcity'];
                        $hqmzip = $row['hqmailingzip'];
                        $hqphone = $row['hqphone'];
                        $hqmaddress = $row['hqmailingaddress'];
                        $hqmcity = $row['hqmailingcity'];
                        $hqstate = $row['hqstate'];
                        $foiaemail = $row['Femail'];
                        $foiaeaddress = $row['Fmailingaddress'];
                        $foiaphone = $row['Fphone'];
                        $foiapaddress = $row['Fphysicaladdress'];
                        $foiamcity = $row['Fmailingcity'];
                        $foiastate = $row['Fstate'];
                        $foiamzip = $row['Fmailingzip'];
                        $gvtn = $row['govtypename'];
                        $webgrp = $row['webgroup'];
                        $bltgid = $row['ballotgroupid'];
                        $invst = $row['investiture'];
                        $timestamp = $row['timestamp'];


                    $i++;                  
                        
                   
        ?>

                <tr style="font-size:13px;">
                    <td><a style="text-decoration: none;" href="restore-data.php?hist_id=<?php echo $id;?>"><i
                                class="fas fa-edit"></i> Restore</a> </td>
                    <td class="text-danger"><?php echo $timestamp; ?> </td>
                    <td><b><?php echo $i; ?> </b></td>
                    <td><?php echo $gvid; ?> </td>
                    <td><?php echo $cmpid; ?> </td>
                    <td><?php echo $revid; ?> </td>
                    <td><?php echo $othertypeid; ?> </td>
                    <td><?php echo $otid; ?> </td>
                    <td><?php echo $nmsimp; ?> </td>
                    <td><?php echo $pbdnfm ?> </td>
                    <td><?php echo $gvtype; ?> </td>
                    <td><?php echo $weburl; ?> </td>
                    <td><?php echo $hqemail; ?> </td>
                    <td><?php echo $hqpaddress; ?> </td>
                    <td><?php echo $hqpcity; ?> </td>
                    <td><?php echo $hqmzip; ?> </td>
                    <td><?php echo $hqphone; ?> </td>
                    <td><?php echo $hqmaddress; ?> </td>
                    <td><?php echo $hqmcity; ?> </td>
                    <td><?php echo $hqstate; ?> </td>
                    <td><?php echo $foiaemail; ?> </td>
                    <td><?php echo $foiaeaddress; ?> </td>
                    <td><?php echo $foiaphone; ?> </td>
                    <td><?php echo $foiapaddress; ?> </td>
                    <td><?php echo $foiamcity; ?> </td>
                    <td><?php echo $foiastate; ?> </td>
                    <td><?php echo $foiamzip; ?> </td>
                    <td><?php echo $gvtn; ?> </td>
                    <td><?php echo $webgrp; ?> </td>
                    <td><?php echo $bltgid; ?> </td>
                    <td><?php echo $invst; ?> </td>
                    <td><?php echo $ktyabb; ?> </td>
                    <td><?php echo $fulspan; ?> </td>
                </tr>

                <?php } ?>

            </tbody>
        </table>
    </div>

</div>



<?php include('footer.php'); ?>