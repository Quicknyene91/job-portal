<?php
include 'connect.php';



if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $qlf = $_POST["qlf"];
    $dob = $_POST["dob"];
    $skills = $_POST["skills"];



    $sql = "INSERT INTO seeker (name,email,password,qualification,dob,skills,resume)
VALUES ('$name', '$email', '$password','$qlf', '$dob', '$skills','$fileName')";

    if ($conn->query($sql) === TRUE) {
?>

        <html>

        <head>

            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title> Jobseeker Registered</title>

            <link href="css/simpleGridTemplate.css" rel="stylesheet" type="text/css">
            <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
            <link href="css/Animate.css" rel="stylesheet" type="text/css">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        </head>

     <!--body style="background: url(img/rgback.jpg);"-->
            <div>

            </div>

            <!-- Trigger the modal with a button -->
            <button id="modalBtn" type="button" style="display:none" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

            <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">

                            <h3>Thanks for Registering with us.. <br>Login to continue using our services</h3>
                            <br>
                            <a href="index.php?msg=login">Login</a>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#modalBtn').trigger("click");
            </script>
        </body>

        </html>

<?php
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    header("location : index.php");
}
