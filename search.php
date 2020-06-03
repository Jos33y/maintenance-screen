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
                    <div class="col-md-6 mx-auto">
                        <div class="form-inline">
                            <label for="gov" class="search-one">Enter Record ID: </label>
                            <input type="text" name="govid" class="form-control" id="" placeholder="GovID">
                        </div>
                    </div>
                </div>

                <!--row two-->
                <div class="row">
                    <div class="col-md-6 mx-auto">
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
                        <div class="form-inline">
                            <label for="part" class="col-md-3 search-three">Part of Name</label>
                            <input type="text" name="part" id="#" class="col-md-9 form-control">
                        </div>
                    </div>
                </div>
                <br>
                <!-- fourth row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-inline">
                            <label for="part" class="col-md-2 search-three">Sort as</label>
                            <input type="text" name="part" id="#" class="col-md-3 form-control">

                            <label for="part" class="col-md-2 search-three">GovType</label>
                            <input type="text" name="part" id="#" class="col-md-5 form-control">
                        </div>
                    </div>
                </div>

                <!-- fifth row-->
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-10">
                        <p class="note-info">
                            A 3-letter county abbreviation code can also be a clue, and one or more may be placeholder
                            in a county search box. if ANY of the specified county codes are found, this records will be
                            shown. Click on the counties
                            info icon for a list of county codes.
                        </p>
                    </div>

                    <div class="col-md-12">
                        <div class="form-inline search-counties">

                            <label for="part" class="col-md-2 search-three">Counties <i class="fas fa-info-circle"></i></label>
                            <input type="text" name="part" id="#" class="col-md-4 form-control"
                                placeholder="Any of these as the HOME county">

                            <label for="part" class="sr-only">GovType</label> &nbsp;&nbsp;&nbsp;
                            <input type="text" name="part" id="#" class="col-md-5 form-control"
                                placeholder="Any of these as the HOME or INCLUDED county">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="form-inline search-btn">
                            <a href="#" class="btn btn-danger btn-small">Cancel</a>

                            <button type="submit"  name="search" class="btn btn-warning btn-small">Search</button>
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