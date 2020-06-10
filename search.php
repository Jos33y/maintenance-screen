<?php 
include('dbcon.php');
$title = "Search Database";

include('header.php'); 

?>

<!--header image-->

<img src="images/search.jpg" alt="" class="back-image">

<!-- page title-->
<div class="container">
    <h2 class="page-title blue">
        Search Database
    </h2>
    <hr width="15%" class="page-title-line">


    <!--table for ballot-->

    <div class="search-screen">
        <form method="POST" class="screen-border">

            <h1 class="search-head">ILGov Database</h1>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-5">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td width="57%" <label for="gov" class="search-one">Enter Record ID:</label>

                                </td>
                                <td width="40%" class="search-gov">
                                    <input type="text" name="govid" class="form-control" id="" maxlength="5"
                                        placeholder="GovID">
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
                        <tbody class="search-part">
                            <tr>
                                <td width="15%">
                                    <label for="part" class="search-three">Part of Name</label>
                                </td>
                                <td width="85%">
                                    <input type="text" name="part" id="#" class="form-control" placeholder="&#61442;">
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
                        <tbody class="search-part">
                            <tr>
                                <td width="15%">
                                    <label for="part" class="search-three">Sort as</label>
                                </td>
                                <td width="35%">
                                    <input type="text" name="part" id="#" class="form-control" placeholder="&#61442;">
                                </td>

                                <td width="15%">
                                    <label for="part" class="search-three">GovType</label>
                                </td>
                                <td width="35%">
                                    <input type="text" name="part" id="#" class="form-control" placeholder="&#61442;">
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
                        <tbody class="search-part">
                            <tr>
                                <td width="15%">
                                    <label for="counties" class="search-three">Counties
                                        <button type="button" class="btn btn-outline-light" data-toggle="modal"
                                            data-target="#countyName">
                                            <i class="fas fa-info"></i>
                                        </button></label>


                                </td>

                                <!-- Button trigger modal -->



                                <td width="35%">

                                    <select name="home_kty" class="form-control">

                                        <option> Any of these as the HOME county </option>

                                        <?php

                                                $get_kty = "select * from kountynbrs";
                                                $run_kty = mysqli_query($con , $get_kty);

                                                while ($row_kty=mysqli_fetch_array($run_kty)){

                                                    $kid = $row_kty['kid'];
                                                    $ktyabb = $row_kty['ktyabb'];

                                                    echo "
                                                    
                                        <option value='$kid'> $ktyabb </option>
                                                    
                                                    ";
                                                }

                                                ?>
                                    </select>
                                </td>

                                <td width="50%">

                                    <select name="fullspan_kty" class="form-control">

                                        <option> Any of these as the HOME or INCLUDED county </option>

                                        <?php

                                                $get_kty = "select * from kountynbrs";
                                                $run_kty = mysqli_query($con , $get_kty);

                                                while ($row_kty=mysqli_fetch_array($run_kty)){

                                                    $kid = $row_kty['kid'];
                                                    $ktyabb = $row_kty['ktyabb'];

                                                    echo "
                                                    
                                        <option value='$kid'> $ktyabb </option>
                                                    
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
                        <a href="#" class="btn btn-success btn-small">Cancel</a>

                        <button type="submit" name="search" class="btn btn-warning btn-lg">Search</button>
                    </div>
                </div>
            </div>
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

<?php 

    if(ISSET($_POST['search'])){

    $govid = $_POST['govid'];

    $_SESSION['govid'] = $govid;

      
        echo "<script>window.open('search-result.php?govid=$govid', '_self')</script>";  

    }
?>