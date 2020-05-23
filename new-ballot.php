<?php 
$title = "New Ballot Group";
include('dbcon.php');
include('header.php'); 

?>
    <!--header image-->

    <img src="images/screengreen.jpg" alt="" class="back-image">

    <!-- page title-->
    <div class="container">
        <h2 class="page-title green">
            New Ballot Group
        </h2>
        <hr width="15%" class="page-title-line">


        <!--table for ballot-->

        <form method="POST" action="#" class="styled-border">
            <table class="table">
                <thead>
                    <tr>
                        <th>Group Name</th>
                        <th>Group Title</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td><input type="text" name="name" class="form-control" placeholder="GroupName"></td>
                        <td><input type="text" name="title" class="form-control" placeholder="GroupTitle"></td>
                        <td><a style="text-decoration: none;" class="btn btn-save" href="#" name="save"><i
                                    class="fas fa-save"></i> Save</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>

    </div>


    <?php include('footer.php'); ?>