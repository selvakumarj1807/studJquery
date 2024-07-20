<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live search</title>
</head>

<body>

    <h1>Live search using jquery</h1>

    <form id="frm" autocomplete="off">

        <label>Enter Your name values : </label>
        <input type="text" id="txt">
    </form>


    <br><br>

    <div id="box"></div>

    <!--<script src="jquery/jquery.js"></script>-->

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Include jQuery Validation Plugin -->
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#txt").keyup(function() {
                var txt = $("#txt").val();

                if (txt != "") {
                    $.post("liveSearchDb.php", {
                        s: txt
                    }, function(data) {
                        $("#box").html(data);
                    });
                }
            });
        });
    </script>

</body>

</html>