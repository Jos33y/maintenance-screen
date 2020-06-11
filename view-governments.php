<!-- php get header -->

<?php 
$title = "View Governments";
include('dbcon.php');
include('header.php'); 

?>

<!--no print div class -->
<div class="noprint">

    <!--header image-->

    <img src="images/screengold.jpg" alt="" class="back-image">

    <!-- page title-->
    <div class="container-fluid">
        <h2 class="page-title gold">
            View Governments
        </h2>
        <hr width="15%" class="page-title-line">

</div>
</div>

<div class="container-fluid">
        <!--table for ballot-->
        <div class="sty">
        <button style="margin: 20px; font-weight: 600;" onclick="window.print()" class="btn btn-md btn-danger">Print this page</button>
  
            <table class="table border-bottom border">
                <thead>
                    <tr class="county-tble-head">
                        <th></th>
                        <th></th>
                        <th>id</th>
                        <th>GovId</th>
                        <th>ComptrollerID</th>
                        <th>DptRevType</th>
                        <th>RevenueID</th>
                        <th>OtherID</th>
                        <th>ParentID</th>
                        <th>DeptId</th>
                        <th>OldGovType</th>
                        <th>NameSimple</th>
                        <th>KtyAbb</th>
                        <th>NameFormal</th>
                        <th>ElectionAuthority</th>
                        <th>EconInterests</th>
                        <th>FullSpan</th> 
                        <th>KtyHomeNbr</th> 
                        <th>KtyNyb1</th> 
                        <th>KtyHomeAbb</th> 
                        <th>Kty1Abb</th> 
                        <th>Comments</th> 
                        <th>HomeRule</th>
                    
                       
                    </tr>
                </thead>
                <tbody>

                <?php
            $i = 0;
                $get_governments = "select * from governments  LIMIT 20";
                $run_governments = mysqli_query($con, $get_governments);
                while ($row = mysqli_fetch_array($run_governments)){
                    $gid = $row['id'];
                    $gvid = $row['GovId'];
                    $cmpid = $row['ComptrollerID'];
                    $drt = $row['DptRevType'];
                    $revid = $row['RevenueID'];
                    $otid = $row['OtherID'];
                    $ptid = $row['ParentID'];
                    $deptid = $row['DeptId'];
                    $ogvty = $row['OldGovType'];
                    $nmsimp = $row['NameSimple'];
                    $ktyabb = $row['KtyAbb'];
                    $nmfrm = $row['NameFormal'];
                    $eauth = $row['ElectionAuthority'];
                    $einterest = $row['EconInterests'];
                    $fulspan = $row['FullSpan'];
                    $khnbr = $row['KtyHomeNbr'];
                    $knby = $row['KtyNyb1'];
                    $khab = $row['KtyHomeAbb'];
                    $ktab = $row['Kty1Abb'];
                    $cm = $row['Comments'];
                    $hr = $row['HomeRule'];
                    $i++;
        ?>

                    <tr style="font-size:13px;">
                        <td><a style="text-decoration: none;" href="edit-government.php?gid=<?php echo $gid;?>"><i class="fas fa-edit"></i> Edit</a> </td>
                        <td><a style="text-decoration: none;" href="#" class="text-danger"><i
                                        class="fas fa-trash-alt"></i>
                                    Delete</a></td>
                        <td><b><?php echo $i; ?> </b></td>
                        <td><?php echo $gvid; ?> </td>
                        <td><?php echo $cmpid; ?> </td>
                        <td><?php echo $drt; ?> </td>
                        <td><?php echo $revid; ?> </td>
                        <td><?php echo $otid; ?> </td>
                        <td><?php echo $ptid; ?> </td>
                        <td><?php echo $deptid; ?> </td>
                        <td><?php echo $ogvty; ?> </td>
                        <td><?php echo $nmsimp; ?> </td>
                        <td><?php echo $ktyabb; ?> </td>
                        <td><?php echo $nmfrm; ?> </td>
                        <td><?php echo $eauth; ?> </td>
                        <td><?php echo $einterest; ?> </td>
                        <td><?php echo $fulspan; ?> </td>
                        <td><?php echo $khnbr; ?> </td>
                        <td><?php echo $knby; ?> </td>
                        <td><?php echo $khab; ?> </td>
                        <td><?php echo $ktab; ?> </td>
                        <td class="govtype-desc"><?php echo $cm; ?> </td>
                        <td><?php echo $hr; ?> </td>   
                    </tr>

                    <?php } ?>

                </tbody>
            </table>
        </div>

    </div>



    <?php include('footer.php'); ?>