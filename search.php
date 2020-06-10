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
                                    <label for="part" class="search-three">Counties <i class="fas fa-info"></i></label>
                                </td>

                                <td width="35%">
                                    <input type="text" name="part" id="#" class="form-control"
                                        placeholder="&#61442;  &nbsp; Any of these as the HOME county">
                                </td>

                                <td width="50%">
                                    <input type="text" name="part" id="#" class="form-control"
                                        placeholder="&#61442; &nbsp; Any of these as the HOME or INCLUDED county">
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


<footer>
    <div class="container">
        <p class="text-center" style="font-size: 13px; color: darkred;"> &copy 2020 All right reserved Citizen
            Participation Institute</p>
    </div>
</footer>

<?php include('footer.php'); ?>

<?php 

    if(ISSET($_POST['search'])){

    $govid = $_POST['govid'];

    $_SESSION['govid'] = $govid;

      
        echo "<script>window.open('search-result.php?govid=$govid', '_self')</script>";  

    }
?>