<!-- php get header -->

<?php 
$title = "View Addresses";
include('dbcon.php');
include('header.php'); 

?>
<!--header image-->
    <!--header image-->

    <img src="images/screengold.jpg" alt="" class="back-image">

    <!-- page title-->
    <div class="container-fluid">
        <h2 class="page-title gold">
            View Addresses
        </h2>
        <hr width="15%" class="page-title-line">


        <!--table for ballot-->
        <div class="styled-border">
            <table class="table border-bottom border">
                <thead>
                    <tr class="county-tble-head">
                        <th></th>
                        <th></th>
                        <th>AId</th>
                        <th>GovId</th>
                        <th>ComptrollerID</th>
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
                       
                    </tr>
                </thead>
                <tbody>

                <?php
            $i = 0;
                $get_addresses = "select * from addresses  LIMIT 20";
                $run_addresses = mysqli_query($con, $get_addresses);
                while ($row = mysqli_fetch_array($run_addresses)){
                    $aid = $row['AddressId'];
                    $gvid = $row['GovId'];
                    $cmpid = $row['ComptrollerID'];
                    $pbdnfm = $row['PublicBodyNameFormal'];
                    $gvtype = $row['GovType'];
                    $weburl = $row['WebsiteURL'];
                    $hqemail = $row['HQemail'];
                    $hqpaddress = $row['HQphysicalAddress'];
                    $hqpcity = $row['HQphysicalCity'];
                    $hqmzip = $row['HQmailingZip'];
                    $hqphone = $row['HQphone'];
                    $hqmaddress = $row['HQmailingAddress'];
                    $hqmcity = $row['HQmailingCity'];
                    $hqstate = $row['HQState'];
                    $foiaemail = $row['FoiaEmail'];
                    $foiaeaddress = $row['FoiaMailingAddress'];
                    $foiaphone = $row['FoiaPhone'];
                    $foiapaddress = $row['FoiaPhysicalAddress'];
                    $foiamcity = $row['FoiaMailingCity'];
                    $foiastate = $row['FoiaState'];
                    $foiamzip = $row['FoiaMailingZip'];
                    $i++;
        ?>

                    <tr style="font-size:13px;">
                        <td><a style="text-decoration: none;" href="edit-address.php?aid=<?php echo $aid;?>"><i class="fas fa-edit"></i> Edit</a> </td>
                        <td><a style="text-decoration: none;" href="#" class="text-danger"><i
                                        class="fas fa-trash-alt"></i>
                                    Delete</a></td>
                        <td><b><?php echo $i; ?> </b></td>
                        <td><?php echo $gvid; ?> </td>
                        <td><?php echo $cmpid; ?> </td>
                        <td><?php echo $pbdnfm; ?> </td>
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
                       
                    </tr>

                    <?php } ?>

                </tbody>
            </table>
        </div>

    </div>



    <?php include('footer.php'); ?>