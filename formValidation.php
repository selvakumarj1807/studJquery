<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jquery Form Validation</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
        }

        button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>

    <h1>Jquery Form Validation</h1>

    <form id="myForm" autocomplete="off">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" placeholder="Enter your name" required>
        <br>
        <label>D.O.B :</label>
        <input type="date" name="dob" id="dob" placeholder="yyyy-mm-dd">
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="Enter your email">
        <br>
        <label>Password :</label>
        <input type="password" name="pass" id="pass" placeholder="Enter Password">
        <br>
        <label>Confirm Password :</label>
        <input type="password" name="cpass" id="cpass" placeholder="Enter ConfirmPassword">
        <br>
        <label>Contact :</label>
        <input type="text" name="contact" id="contact" placeholder="Enter Mobile number">

        <br>

        <!-- Add other form fields as needed -->

        <button type="submit">Submit</button>
    </form>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Include jQuery Validation Plugin -->
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

    <script>
        $(document).ready(function () {
            // Validate the form
            $("#myForm").validate({
                rules: {
                    name: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    dob: {
                        required: true,
                        date: true
                    },
                    pass:{
                        required:true,
                        minlength:5
                    },
                    cpass:{
                        required:true,
                        minlength:5,
                        equalTo:"#pass"
                    },
                    contact:{
                        required:true,
                        digits:true,
                        minlength:10,
                        maxlength:10
                    }

                    // Add other rules for additional fields
                },
                messages: {
                    name: "Please enter your name",
                    email: {
                        required: "Please enter your email",
                        email: "Please enter a valid email address"
                    },
                    dob: {
                        required: "Pls enter your date of birth",
                        date: "Pls enter correct format yyyy-mm-dd"
                    },
                    pass:{
                        required:"pls enter your password",
                        minlength:"pls enter minimum 5 digit"
                    },
                    cpass:{
                        required:"pls enter confirm password",
                        minlength:"pls enter minimum 5 digit",
                        equalTo:"pls enter correct password"
                    },
                    contact:{
                        required:"pls Enter your contact number",
                        digits:"Enter number only",
                        minlength:"pls enter 10 digit number",
                        maxlength:"pls enter 10 digit number"
                    }
                    // Add other messages for additional fields
                },
                submitHandler: function () {
                    // Handle the form submission here (e.g., AJAX request or regular form submission)
                    // alert("Form submitted successfully!");

                    $.ajax({
                        url:"formValidationDb.php",
                        type:"post",
                        data:$("#myForm").serialize(),
                        success:function(){
                            alert("Subitted successfully");
                        }
                    });
                }
            });
        });
    </script>



</body>

</html>