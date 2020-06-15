<footer>
        <div class="container">
            <p class="text-center" style="font-size: 13px; color: darkred;"> &copy 2020 All right reserved Citizen
                Participation Institute</p>
        </div>
    </footer>

    <!-- JS, Popper.js, and jQuery -->
    <!--<script src="js/script.js"></script> -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script type="text/javascript">
    //part of name script 

    $(document).ready(function () {
            $("#pbdnf").keyup(function () {

                var query =  $("#pbdnf").val();

                if(query.length > 2){
               
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

            $(document).on('click', 'li', function() {
                var pbdnf = $(this).text();
                $("#pbdnf").val(pbdnf);
                $("#bodyResponse").html("");
            });
        });
        // name simple script 
    </script>

    <script>

        $(document).ready(function () {
            $("#nameSimple").keyup(function () {

                var query =  $("#nameSimple").val();

                if(query.length > 2){
               
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

            $(document).on('click', 'li', function() {
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

                if(query.length > 2){
               
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

             $(document).on('click', 'li', function() {
                var govtype = $(this).text();
                $("#govType").val(govtype);
                $("#govResponse").html("");
            });
        });

      
    </script>

    </body>

    </html>