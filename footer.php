<footer>
        <div class="container">
            <p class="text-center" style="font-size: 13px; color: darkred;"> &copy 2020 All right reserved Citizen
                Participation Institute</p>
        </div>
    </footer>

    <!-- JS, Popper.js, and jQuery -->
    <!--<script src="js/script.js"></script> -->
    <script type="text/javascript" src="js/script.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script type="text/javascript">
    //part of name script 

    $(document).ready(function () {
            $("#pbdnf").keyup(function () {

                var query =  $("#pbdnf").val();

                if(query.length > 1){
               
               $.ajax(
                   {
                       url:'search.php',
                       method:'POST',
                       data: {
                           checkdata: 1,
                           p: query
                       },
                       success: function(data) {
                          $("#bodyResponse").html(data);
                       },
                       dataType: 'text'
                   }
               );
      }
            });

            $(document).on('click', 'li.pbdnf', function() {
                var pbdnf = $(this).text();
                $("#pbdnf").val(pbdnf);
                $("#bodyResponse").html("");
            });
        });
       
    </script>


<script>
        //address script
        $(document).ready(function () {
            $("#address").keyup(function () {

                var query =  $("#address").val();

                if(query.length > 1){
               
                    $.ajax(
                        {
                            url:'search.php',
                            method:'POST',
                            data: {
                                checkaddress: 1,
                                a: query
                            },
                            success: function(data) {
                          $("#addResponse").html(data);
                       },
                            dataType: 'text'
                        }
                    );
           }
            });

             $(document).on('click', 'li.address', function() {
                var address = $(this).text();
                $("#address").val(address);
                $("#addResponse").html("");
            });
        });

      
    </script>


    <script>
//Name Simple Script
        $(document).ready(function () {
            $("#nameSimple").keyup(function () {

                var query =  $("#nameSimple").val();

                if(query.length > 1){
               
               $.ajax(
                   {
                       url:'search.php',
                       method:'POST',
                       data: {
                           checkBase: 1,
                           q: query
                       },
                       success: function(data) {
                          $("#response").html(data);
                       },
                       dataType: 'text'
                   }
               );
      }
            });

            $(document).on('click', 'li.name',  function() {
                var namesimple = $(this).text();
                $("#nameSimple").val(namesimple);
                $("#response").html("");
            });
        });

    </script>

<script>
        //govtype script
        $(document).ready(function () {
            $("#govType").keyup(function () {

                var query =  $("#govType").val();

                if(query.length > 1){
               
                    $.ajax(
                        {
                            url:'search.php',
                            method:'POST',
                            data: {
                                request: 1,
                                g: query
                            },
                            success: function(data) {
                          $("#govResponse").html(data);
                       },
                            dataType: 'text'
                        }
                    );
           }
            });

             $(document).on('click', 'li.gname', function() {
                var govtype = $(this).text();
                $("#govType").val(govtype);
                $("#govResponse").html("");
            });
        });

      
    </script>

<script type="text/javascript">

    //govid script 

    $(document).ready(function () {
            $("#sGovid").keyup(function () {

                var query =  $("#sGovid").val();

                if(query.length > 2){
               
               $.ajax(
                   {
                       url:'search-result.php',
                       method:'POST',
                       data: {
                           checkgov: 1,
                           s: query
                       },
                       success: function(data) {
                          $("#sResponse").html(data);
                       },
                       dataType: 'text'
                   }
               );
      }
            });

            $(document).on('click', 'li.sgovid', function() {
                var sgov = $(this).text();
                $("#sGovid").val(sgov);
                $("#sResponse").html("");
            });
        });
       
    </script>


<script>
$(document).ready(function(){   

    $('#checkMail').click(function(){
        // Print entered value in a div box
        $("#myAddress").on("input", function(){
        var same = $(this).val();
        $("#mAddress").val(same);
       
    });

    $("#myCity").on("input", function(){
        var same = $(this).val();
        $("#mCity").val(same);
       
    });

    $("#myZip").on("input", function(){
    var same = $(this).val();
    $("#mZip").val(same);

    });
});


$('#checkFoia').click(function(){
    $("#myAddress").on("input", function(){
    var same = $(this).val();
    $("#fAddress").val(same);

});

    $("#myZip").on("input", function(){
    var same = $(this).val();
    $("#mZip").val(same);

});


$("#myPhone").on("input", function(){
        var same = $(this).val();
        $("#Fphone").val(same);
       
    });

    $("#myEmail").on("input", function(){
        var same = $(this).val();
        $("#Femail").val(same);
       
    });

    $("#myWeburl").on("input", function(){
        var same = $(this).val();
        $("#Fweburl").val(same);
       
    });

});

});
</script>

    </body>

    </html>