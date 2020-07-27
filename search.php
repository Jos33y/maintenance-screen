
<?php 


include('dbcon.php');

if (isset($_POST['checkBase'])){
    $response = '<ul><li>No data found</li><ul>';

    $q = $con->real_escape_string($_POST['q']);

    $sql = $con->query("SELECT DISTINCT NameSimple from governments WHERE NameSimple LIKE '%$q%'");
    if($sql->num_rows > 0) {

        $response = "<ul>";

        while($data = $sql->fetch_array())
        $response .= "<li class='name'>".$data['NameSimple']."</li>";

        $response .= "</ul>";
    }

    exit($response);
}

elseif(isset($_POST['request'])){
    $response = '<ul><li>No data found</li><ul>';

    $q = $con->real_escape_string($_POST['g']);

    $sql = $con->query("SELECT DISTINCT govtypename from govtype  WHERE govtypename LIKE '%$q%'");
    if($sql->num_rows > 0) {

        $response = "<ul>";

        while($data = $sql->fetch_array())
        $response .= "<li class='gname'>".$data['govtypename']."</li>";

        $response .= "</ul>";
    }

    exit($response);
}



elseif(isset($_POST['checkdata'])){
    $response = '<ul><li>No data found</li><ul>';

    $q = $con->real_escape_string($_POST['p']);

    $sql = $con->query("SELECT DISTINCT PublicBodyNameFormal from addresses  WHERE PublicBodyNameFormal LIKE '%$q%'");
    if($sql->num_rows > 0) {

        $response = "<ul>";

        while($data = $sql->fetch_array())
        $response .= "<li class='pbdnf'>".$data['PublicBodyNameFormal']."</li>";

        $response .= "</ul>";
    }

    exit($response);
}

elseif(isset($_POST['checkaddress'])){
    $response = '<ul><li>No data found</li><ul>';

    $q = $con->real_escape_string($_POST['a']);

    $sql = $con->query("SELECT DISTINCT HQphysicalAddress from addresses  WHERE HQphysicalAddress LIKE '%$q%'");
    if($sql->num_rows > 0) {

        $response = "<ul>";

        while($data = $sql->fetch_array())
        $response .= "<li class='address'>".$data['HQphysicalAddress']."</li>";

        $response .= "</ul>";
    }

    exit($response);
}




?>
<?php 

$title = "Search Database";

include('header.php'); 

?>



<div class="col-md-10">
    <div class="container">
        <!--  <h2 class="page-title blue">
            Search Database
        </h2>
        <hr width="15%" class="page-title-line">


        <!--table for ballot-->

        <div class="search-screen">
            <form method="POST" class="search-border">

                <h1 class="search-head">ILGov Database</h1>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-6">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td width="57%" <label for="gov" class="search-one">Enter Record ID:</label>

                                    </td>
                                    <td width="50%" class="search-gov">
                                        <input type="text" name="govid" class="form-control" id="" maxlength="5"
                                            placeholder="">
                                    </td>
                                </tr>

                            </tbody>
                        </table>


                    </div>
                </div>


                <!--row two-->
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <h4 class="search-two">Or Search by Clues:</h4>
                        <p class="search-note">
                            A clue is a string of characters that may appear anywhere in that field of the
                            record.<br>
                            A search box may contain multiple clues, separated by a spaces. <br>
                            More than one search box may contain clues. <br>
                            Only records where all clues are true will be shown.
                        </p>
                    </div>
                </div>

                <!--row threee-->
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td width="15%" class="search-label">
                                        <label for="part" class="search-three">Part of Name</label>
                                    </td>
                                    <td width="85%" class="search-input">
                                        <input type='text' name='pbdnf' class='form-control' placeholder="&#61442;" id="pbdnf">
                                        <div id="bodyResponse"></div>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                
                <!--row three BEE-->
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td width="15%" class="search-label">
                                        <label for="part" class="search-three">Address</label>
                                    </td>
                                    <td width="85%" class="search-input">
                                        <input type='text' name='address' class='form-control' placeholder="&#61442;" id="address">
                                        <div id="addResponse"></div>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>


                <!-- fourth row-->
                <div class="row">
                    <div class="col-md-12">

                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td width="15%" class="search-label">
                                        <label for="sort-as" class="search-three">Alternate name</label>
                                    </td>
                                    <td width="90%" class="search-input">
                                    <input type="text" name="nameSimple" class="form-control"
                                            placeholder="&#61442;" id="nameSimple" >
                                    <div id="response"></div>
                                    </td>

                                    <td class="search-label">
                                        <label for="part" class="search-three">GovType</label>
                                    </td>
                                    <td width="90%" class="search-input">
                                        <input type="text" name="govType" class="form-control"
                                            placeholder="&#61442;" id="govType">
                                            <div id="govResponse"></div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- fifth row-->
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-10">
                        <p class="search-note">
                            A 3-letter county abbreviation code can also be a clue, and one or more may be placeholder
                            in a county search box. if ANY of the specified county codes are found, this records will be
                            shown. Click on the counties
                            info icon for a list of county codes.
                        </p>
                    </div>

                    <div class="col-md-12">

                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td width="15%" class="search-label">
                                        <label for="counties" class="search-three">Counties
                                            <button type="button" class="btn btn-outline-light" data-toggle="modal"
                                                data-target="#countyName">
                                                <i class="fas fa-info-circle"></i>
                                            </button></label>


                                    </td>

                                    <!-- Button trigger modal -->



                                    <td width="45%" class="search-input">

                                        <select name="home_kty" class="form-control">

                                            <option> Any of these as the HOME county </option>

                                            <?php

                                                $get_kty = "select * from kountynbrs";
                                                $run_kty = mysqli_query($con , $get_kty);

                                                while ($row_kty=mysqli_fetch_array($run_kty)){

                                                    $kid = $row_kty['kid'];
                                                    $ktyabb = $row_kty['ktyabb'];
                                                   

                                                    echo "
                                                    
                                        <option value='$ktyabb'> $ktyabb </option>
                                                    
                                                    ";
                                                }

                                                ?>
                                        </select>
                                    </td>

                                    <td width="45%" class="search-input">

                                        <select name="fullspan_kty" class="form-control">

                                            <option> Any of these as the HOME or INCLUDED county </option>

                                            <?php

                                                $get_kty = "select * from kountynbrs";
                                                $run_kty = mysqli_query($con , $get_kty);

                                                while ($row_kty=mysqli_fetch_array($run_kty)){

                                                    $kid = $row_kty['kid'];
                                                    $ktyabb = $row_kty['ktyabb'];

                                                    echo "
                                                    
                                        <option value='$ktyabb'> $ktyabb </option>
                                                    
                                                    ";
                                                }

                                                ?>
                                        </select>

                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>

                <!--buttons -->
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="form-inline search-btn">
                            <a href="search.php" class="btn btn-success btn-small">Cancel</a>

                            <button type="submit" name="search" class="btn btn-warning btn-lg">Search</button>
                        </div>
                    </div>
                </div>
                <!-- end of form -->
            </form>

        </div>

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
                                <th style="font-size: 13px;" id="ktyahead">County Abb</th>
                                <th style="font-size: 13px;" id="ktynhead">County Name</th>                            </tr>
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

    <!--print end-->
</div>

                                                </div>

<?php 

    if(ISSET($_POST['search'])){

    $govid = $_POST['govid'];

    $pbdnf = $_POST['pbdnf'];

    $address = $_POST['address'];

    $govType = $_POST['govType'];

    $nameSimple = $_POST['nameSimple'];

    $home_kty = $_POST['home_kty'];

    $fullspan_kty = $_POST['fullspan_kty'];

    $_SESSION['govid'] = $govid;
    /* Govid Search */

    if($govid){

        $check = "select * from addresses where GovId = '$govid'";
        $run_check = mysqli_query($con, $check);

        if (mysqli_num_rows($run_check) == 1) {

        
        echo "<script>window.open('search-result.php?govid=$govid', '_self')</script>";
        }
        else{

            echo '
            <script>
                swal({
                        title: "No GovId Found!",
                        icon: "error",
                     });
        </script>
        ';
        }

    }
    elseif($pbdnf){
        $get_address = "select * from addresses where PublicBodyNameFormal ='$pbdnf'";

        $run_address = mysqli_query($con, $get_address);

            if (mysqli_num_rows($run_address) == 1) {

                $row = mysqli_fetch_array($run_address);
                    $gvid = $row['GovId'];

                    echo "<script>window.open('search-result.php?govid=$gvid', '_self')</script>";
            }
            else{
                echo '
                <script>
                    swal({
                            title: "No Public Body Formal Name Found!",
                            icon: "error",
                         });
            </script>
            ';

            }


    }

    elseif($address){
        $get_address = "select * from addresses where HQphysicalAddress ='$address'";

        $run_address = mysqli_query($con, $get_address);

            if (mysqli_num_rows($run_address) == 1) {

                $row = mysqli_fetch_array($run_address);
                    $gvid = $row['GovId'];

                    echo "<script>window.open('search-result.php?govid=$gvid', '_self')</script>";
            }
            else{
                echo '
                <script>
                    swal({
                            title: "No Public Body Formal Name Found!",
                            icon: "error",
                         });
            </script>
            ';

            }


    }

    else{
    
    ?>


<div class="sty">
    <button style="margin: 20px; font-weight: 600;" onclick="window.print()" class="btn btn-sm btn-danger">Print this
        page</button>
    <table class="table border-bottom border">
        <thead>
            <tr class="county-tble-head">
                <th></th>
                <th>id</th>
                <th>GovId</th>
                <th>ComptrollerID</th>
                <th>DptRevType</th>
                <th>NameSimple</th>
                <th>KtyAbb</th>
                <th>NameFormal</th>
                <th>FullSpan</th>
                <th>KtyHomeNbr</th>
                <th>KtyHomeAbb</th>

            </tr>
        </thead>
        <tbody>

            <!--GovType Search -->

            <?php 
                if($govType){
                   
                    $get_govtype = "select * from govtype where govtypename = '$govType'";
        
                    $run_govtype = mysqli_query($con, $get_govtype);

            if(mysqli_num_rows($run_govtype) >= 1) { 
                $i = 0;
                    $row = mysqli_fetch_array($run_govtype);
        
                    $gvtypeid = $row['govtypeid'];

                   $get_govid = "select * from addresses where GovType = '$gvtypeid'";
                   $run_govid = mysqli_query($con, $get_govid);

                   while($row = mysqli_fetch_array($run_govid)){
                   
                    $gvid = $row['GovId'];
                  
                    $get_governments = "select * from governments where GovId = '$gvid'";
                    $run_governments = mysqli_query($con, $get_governments);                             

                        while ($row = mysqli_fetch_array($run_governments)){
                            $gid = $row['id'];
                            $gvid = $row['GovId'];
                            $cmpid = $row['ComptrollerID'];
                            $drt = $row['DptRevType'];
                            $nmsimp = $row['NameSimple'];
                            $ktyabb = $row['KtyAbb'];
                            $nmfrm = $row['NameFormal'];
                            $fulspan = $row['FullSpan'];
                            $khnbr = $row['ElectionAuthority'];
                            $khab = $row['EconInterests'];
                           
                        }
                        $i++;
        ?>
            <tr style="font-size:13px;">
                <td><a style="text-decoration: none;" href="search-result.php?govid=<?php echo $gvid;?>"><i
                            class="fas fa-edit"></i> Edit</a> </td>
                <td><b><?php echo $i; ?> </b></td>
                <td><?php echo $gvid; ?> </td>
                <td><?php echo $cmpid; ?> </td>
                <td><?php echo $drt; ?> </td>
                <td><?php echo $nmsimp; ?> </td>
                <td><?php echo $ktyabb; ?> </td>
                <td><?php echo $nmfrm; ?> </td>
                <td><?php echo $fulspan; ?> </td>
                <td><?php echo $khnbr; ?> </td>
                <td><?php echo $khab; ?> </td>
            </tr>
        <?php      }       
            
              }
            else{
                        
                echo '
                <script>
                    swal({
                            title: "No Gov Type Name Found!",
                            icon: "error",
                        });
            </script>
            ';
            }

        } 

         //--sort as search -->
            
         elseif($nameSimple){
            $i = 0;

            $get_governments = "select * from governments where NameSimple = '$nameSimple'";
            $run_governments = mysqli_query($con, $get_governments);         
            
            if (mysqli_num_rows($run_governments) >= 1) {        

            while ($row = mysqli_fetch_array($run_governments)){

                $rowcount=mysqli_num_rows($run_governments);
                $gid = $row['id'];
                $gvid = $row['GovId'];
                $cmpid = $row['ComptrollerID'];
                $drt = $row['DptRevType'];
                $nmsimp = $row['NameSimple'];
                $ktyabb = $row['KtyAbb'];
                $nmfrm = $row['NameFormal'];
                $fulspan = $row['FullSpan'];
                $khnbr = $row['ElectionAuthority'];
                $khab = $row['EconInterests'];
                $i++;

                if($rowcount >= '2'){  
        
           
    ?>
        <tr style="font-size:13px;">
            <td><a style="text-decoration: none;" href="search-result.php?govid=<?php echo $gvid;?>"><i
                        class="fas fa-edit"></i> Edit</a> </td>
            <td><b><?php echo $i; ?> </b></td>
            <td><?php echo $gvid; ?> </td>
            <td><?php echo $cmpid; ?> </td>
            <td><?php echo $drt; ?> </td>
            <td><?php echo $nmsimp; ?> </td>
            <td><?php echo $ktyabb; ?> </td>
            <td><?php echo $nmfrm; ?> </td>
            <td><?php echo $fulspan; ?> </td>
            <td><?php echo $khnbr; ?> </td>
            <td><?php echo $khab; ?> </td>
        </tr>

        <?php }
    
    elseif($rowcount == 1){

        echo "<script>window.open('search-result.php?govid=$gvid', '_self')</script>";
        
    }
    
    } }
    else{
        echo '
        <script>
            swal({
                    title: "No Alternate Name Found!",
                    icon: "error",
                 });
    </script>
    ';

    }

    }

                //Counties search
            
              elseif($home_kty OR $fullspan_kty){
                $i = 0;
                  $get_governments = "select * from governments where KtyAbb = '$home_kty' OR FullSpan = '$fullspan_kty'";
                $run_governments = mysqli_query($con, $get_governments);

                if (mysqli_num_rows($run_governments) >= 1) {

                while ($row = mysqli_fetch_array($run_governments)){
                    $gid = $row['id'];
                    $gvid = $row['GovId'];
                    $cmpid = $row['ComptrollerID'];
                    $drt = $row['DptRevType'];
                    $nmsimp = $row['NameSimple'];
                    $ktyabb = $row['KtyAbb'];
                    $nmfrm = $row['NameFormal'];
                    $fulspan = $row['FullSpan'];
                    $khnbr = $row['ElectionAuthority'];
                    $khab = $row['EconInterests'];
                    $i++;

              ?> 
            <tr style="font-size:13px;">
                <td><a style="text-decoration: none;" href="search-result.php?govid=<?php echo $gvid;?>"><i
                            class="fas fa-edit"></i> Edit</a> </td>
                <td><b><?php echo $i; ?> </b></td>
                <td><?php echo $gvid; ?> </td>
                <td><?php echo $cmpid; ?> </td>
                <td><?php echo $drt; ?> </td>
                <td><?php echo $nmsimp; ?> </td>
                <td><?php echo $ktyabb; ?> </td>
                <td><?php echo $nmfrm; ?> </td>
                <td><?php echo $fulspan; ?> </td>
                <td><?php echo $khnbr; ?> </td>
                <td><?php echo $khab; ?> </td>
            </tr>

            <?php }
              }
            
            else{
                        
                echo '
                <script>
                    swal({
                            title: "No County Found!",
                            icon: "error",
                        });
            </script>
            ';
            }

        }
                  
        ?>


        </tbody>
    </table>



    <?php
       }  

}

                
            /* echo "<script>window.open('searchtwo.php', '_self')</script>";  

 echo "<script>window.open('search-result.php?govid=$govid', '_self')</script>";  */

   
?>

<?php include('footer.php');?>
   