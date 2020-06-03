<!-- php get header -->

<?php 
$title = "View GovType";
include('dbcon.php');
include('header.php'); 

?>
<!--header image-->
    <!--header image-->

    <img src="images/screengold.jpg" alt="" class="back-image">

    <!-- page title-->
    <div class="container-fluid">
        <h2 class="page-title gold">
            View GovType
        </h2>
        <hr width="15%" class="page-title-line">


        <!--table for ballot-->
        <div class="sty">
            <table class="table border-bottom border">
                <thead>
                    <tr class="county-tble-head">
                        <th></th>
                        <th></th>
                        <th>id</th>
                        <th>GovTypeCode</th>
                        <th>GovTypeId</th>
                        <th>CompTypeCode</th>
                        <th>DRevClass</th>
                        <th>SBE</th>
                        <th>GovFunction</th>
                        <th>GovImplementation</th>
                        <th>GovVariety</th>
                        <th>GovFlavor</th>
                        <th>GovHomeRule</th>
                        <th>GovTypeName</th>
                        <th>WebGroup</th>
                        <th>BallotGroupId</th>
                        <th>Investiture</th>
                        <th>FileWith</th>
                        <th>LawElection</th>
                        <th>LawCreation</th>
                        <th>Comments</th>
                        <th>Description</th>                       
                       
                    </tr>
                </thead>
                <tbody>

                <?php
            $i = 0;
                $get_govtype = "select * from govtype";
                $run_govtype = mysqli_query($con, $get_govtype);
                while ($row = mysqli_fetch_array($run_govtype)){
                    $gtid = $row['id'];
                    $gtcd = $row['govtypecode'];
                    $gvtid = $row['govtypeid'];
                    $ctcd = $row['comptypecode'];
                    $drclass = $row['drevclass'];
                    $sbe = $row['sbe'];
                    $gfunc = $row['govfunction'];
                    $gvimp = $row['govimplementation'];
                    $gvvty = $row['govvariety'];
                    $gflv = $row['govflavor'];
                    $ghm = $row['govhomerule'];
                    $gvtn = $row['govtypename'];
                    $webgrp = $row['webgroup'];
                    $bltgid = $row['ballotgroupid'];
                    $invst = $row['investiture'];
                    $fw = $row['filewith'];
                    $le = $row['lawelection'];
                    $lc = $row['lawcreation'];
                    $cm = $row['comments'];
                    $desc = $row['description'];
                    $i++;
        ?>

                    <tr style="font-size:13px;">
                        <td><a style="text-decoration: none;" href="edit-govtype.php?gtid=<?php echo $gtid;?>"><i class="fas fa-edit"></i> Edit</a> </td>
                        <td><a style="text-decoration: none;" href="#" class="text-danger"><i
                                        class="fas fa-trash-alt"></i>
                                    Delete</a></td>
                        <td><b><?php echo $gtid; ?> </b></td>
                        <td><?php echo $gtcd; ?> </td>
                        <td><?php echo $gvtid; ?> </td>
                        <td><?php echo $ctcd; ?> </td>
                        <td><?php echo $drclass; ?> </td>
                        <td><?php echo $sbe; ?> </td>
                        <td><?php echo $gfunc; ?> </td>
                        <td><?php echo $gvimp; ?> </td>
                        <td><?php echo $gvvty; ?> </td>
                        <td><?php echo $gflv; ?> </td>
                        <td><?php echo $ghm; ?> </td>
                        <td><?php echo $gvtn; ?> </td>
                        <td><?php echo $webgrp; ?> </td>
                        <td><?php echo $bltgid; ?> </td>
                        <td><?php echo $invst; ?> </td>
                        <td><?php echo $fw; ?> </td>
                        <td><?php echo $le; ?> </td>
                        <td><?php echo $lc; ?> </td>
                        <td><?php echo $cm; ?> </td>
                        <td class="govtype-desc"><?php echo $desc; ?> </td>      
                    </tr>

                    <?php } ?>

                </tbody>
            </table>
        </div>

    </div>



    <?php include('footer.php'); ?>