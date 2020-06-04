<!-- php get header -->

<?php 
$title = "View Data";
include('dbcon.php');
include('header.php'); 

?>
<!--header image-->
    <!--header image-->

    <img src="images/screengold.jpg" alt="" class="back-image">

    <!-- page title-->
    <div class="container-fluid">
        <h2 class="page-title gold">
            View Data
        </h2>
        <hr width="15%" class="page-title-line">


        <!--table for ballot-->
        <div class="sty">
            <table class="table border-bottom border">
                <thead>
                    <tr class="county-tble-head">
                        <th></th>
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
                $get_governments = "select * from governments LIMIT 100";
                $run_governments = mysqli_query($con, $get_governments);
                while ($row = mysqli_fetch_array($run_governments)){
                    
                    $did = $row['id'];
                    $gvid = $row['GovId'];
                    $cmpid = $row['ComptrollerID'];
                    $revid = $row['RevenueID'];
                    $othertypeid = $row['OtherIDtype'];
                    $otid = $row['OtherID'];
                    $nmsimp = $row['NameSimple'];
                    $ktyabb = $row['KtyAbb']; 
                    $fulspan = $row['FullSpan'];
                   
                    $i++;
               

                    $get_a = "select * from addresses where GovId = '$gvid'";
                    $run_a = mysqli_query($con, $get_a);
                    while($row_add = mysqli_fetch_array($run_a)){

                    

                        $pbdnfm = $row_add['PublicBodyNameFormal'];
                        $gvtype = $row_add['GovType'];
                        $weburl = $row_add['WebsiteURL'];
                        $hqemail = $row_add['HQemail'];
                        $hqpaddress = $row_add['HQphysicalAddress'];
                        $hqpcity = $row_add['HQphysicalCity'];
                        $hqmzip = $row_add['HQmailingZip'];
                        $hqphone = $row_add['HQphone'];
                        $hqmaddress = $row_add['HQmailingAddress'];
                        $hqmcity = $row_add['HQmailingCity'];
                        $hqstate = $row_add['HQState'];
                        $foiaemail = $row_add['FoiaEmail'];
                        $foiaeaddress = $row_add['FoiaMailingAddress'];
                        $foiaphone = $row_add['FoiaPhone'];
                        $foiapaddress = $row_add['FoiaPhysicalAddress'];
                        $foiamcity = $row_add['FoiaMailingCity'];
                        $foiastate = $row_add['FoiaState'];
                        $foiamzip = $row_add['FoiaMailingZip'];

                        $get_govtype = "select * from govtype where govtypeid = '$gvtype'";

                        $run_govtype = mysqli_query($con, $get_govtype);

                        $row_gvtype = mysqli_fetch_array($run_govtype);


                        $gvtn = $row_gvtype['govtypename'];
                        $webgrp = $row_gvtype['webgroup'];
                        $bltgid = $row_gvtype['ballotgroupid'];
                        $invst = $row_gvtype['investiture'];

                    }


                

                    
                        
                   
        ?>

                    <tr style="font-size:13px;">
                        <td><a style="text-decoration: none;" href="edit-data.php?did=<?php echo $did;?>"><i class="fas fa-edit"></i> Edit</a> </td>
                        <td><b><?php echo $did; ?> </b></td>
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