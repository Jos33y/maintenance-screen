<?php 
$title = "New County";
include('dbcon.php');
include('header.php'); 

?>
    <!--header image-->

    <img src="images/screengreen.jpg" alt="" class="back-image">

    <!-- page title-->
    <div class="container-fluid">
        <h2 class="page-title green">
            New County
        </h2>
        <hr width="15%" class="page-title-line">


        <!--table for ballot-->

        <form method="POST" action="#" class="styled-border">
            <table class="table">
                <thead>
                    <tr class="county-tble-head">
                        <th>DptRevCounty</th>
                        <th>ElAuthority</th>
                        <th>NameSimple</th>
                        <th>KtyAbb</th>
                        <th>ElAurhority2</th>
                        <th>Also Include</th>
                        <th>email</th>
                        <th>ElPhone</th>
                        <th width="9%"></th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td><input type="text" name="name" class="form-control"></td>
                        <td><input type="text" name="title" class="form-control"></td>
                        <td><input type="text" name="name" class="form-control"></td>
                        <td><input type="text" name="title" class="form-control"></td>
                        <td><input type="text" name="name" class="form-control"></td>
                        <td><input type="text" name="title" class="form-control"></td>
                        <td><input type="text" name="name" class="form-control"></td>
                        <td><input type="text" name="title" class="form-control"></td>
                        <td><a style="text-decoration: none; font-size: 12px;" class="btn btn-save" href="#" name="save">
                            <i class="fas fa-save"></i> save</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>

    </div>


    <?php include('footer.php'); ?>