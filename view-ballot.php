<!-- php get header -->

<?php 
$title = "View Ballot Group";
include('dbcon.php');
include('header.php'); 

?>
<!--header image-->

<img src="images/screengold.jpg" alt="" class="back-image">

<!-- page title-->
<div class="container">
    <h2 class="page-title gold">
        View Ballot Group
    </h2>
    <hr width="15%" class="page-title-line">


    <!--table for ballot-->
    <div class="styled-border">
        <table class="table">
            <thead>
                <tr>
                    <th>Ballot Group Id</th>
                    <th>Group Name</th>
                    <th>Group Title</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
        <?php
            $i = 0;
                $get_ballot = "select * from ballotgroup";
                $run_ballot = mysqli_query($con, $get_ballot);
                while ($row = mysqli_fetch_array($run_ballot)){
                    $bid = $row['BallotGroupId'];
                    $gname = $row['GroupName'];
                    $gtitle = $row['GroupTitle'];
                    $i++;
        ?>
                <tr>
                    <td><b><?php echo $i; ?></b></td>
                    <td><?php echo $gname; ?></td>
                    <td><?php echo $gtitle; ?></td>
                    <td>
                        <a style="text-decoration: none;" href="edit-ballot.php?bid=<?php echo $bid;?>"><i class="fas fa-edit"></i> Edit</a>
                    </td>
                    <td>
                        <a style="text-decoration: none;" href="#" class="text-danger"><i class="fas fa-trash-alt"></i>
                            Delete</a>
                    </td>
                </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>

</div>


<?php include('footer.php'); ?>