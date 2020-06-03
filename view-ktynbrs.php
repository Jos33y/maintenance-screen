<!-- php get header -->

<?php 
$title = "View Counties";
include('dbcon.php');
include('header.php'); 

?>
<!--header image-->
    <!--header image-->

    <img src="images/screengold.jpg" alt="" class="back-image">

    <!-- page title-->
    <div class="container-fluid">
        <h2 class="page-title gold">
            View Counties
        </h2>
        <hr width="15%" class="page-title-line">


        <!--table for ballot-->
        <div class="styled-border">
            <table class="table border-bottom border">
                <thead>
                    <tr class="county-tble-head">
                        <th>Id</th>
                        <th>DptRevCounty</th>
                        <th>ElAuthority</th>
                        <th>NameSimple</th>
                        <th>KtyAbb</th>
                        <th>ElAurhority2</th>
                        <th>Also Include</th>
                        <th>email</th>
                        <th>ElPhone</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                <?php
            $i = 0;
                $get_ktynbrs = "select * from kountynbrs";
                $run_ktynbrs = mysqli_query($con, $get_ktynbrs);
                while ($row = mysqli_fetch_array($run_ktynbrs)){
                    $kid = $row['kid'];
                    $dpkty = $row['dptrevcounty'];
                    $eiauth = $row['eiauthority'];
                    $namesimp = $row['namesimple'];
                    $ktyabb = $row['ktyabb'];
                    $eiauth2 = $row['eiauthority2'];
                    $alsoinc = $row['alsoinclude'];
                    $email = $row['email'];
                    $ephone = $row['eiphone'];
                    $i++;
        ?>

                    <tr style="font-size:13px;">
                        <td><b><?php echo $kid; ?> </b></td>
                        <td><?php echo $dpkty; ?> </td>
                        <td><?php echo $eiauth; ?> </td>
                        <td><?php echo $namesimp; ?> </td>
                        <td><?php echo $ktyabb; ?> </td>
                        <td><?php echo $eiauth2; ?> </td>
                        <td><?php echo $alsoinc; ?> </td>
                        <td><?php echo $email; ?> </td>
                        <td><?php echo $ephone; ?> </td>
                        <td><a style="text-decoration: none;" href="edit-kty.php?kid=<?php echo $kid;?>"><i class="fas fa-edit"></i> Edit</a> </td>
                        <td><a style="text-decoration: none;" href="#" class="text-danger"><i
                                    class="fas fa-trash-alt"></i>
                                Delete</a></td>
                    </tr>

                    <?php } ?>

                </tbody>
            </table>
        </div>

    </div>



    <?php include('footer.php'); ?>