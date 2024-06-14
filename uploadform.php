<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image uploader</title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    <section id="banner" class="banner">
        <div class="bg-color">
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="col-md-12">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <h1 class="Com_Name">Naidu Hospital</h1>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="index.php">Home</a></li> <!-- Home link -->
                                <li class=""><a href="index.php">Services</a></li>
                                <li class=""><a href="index.php">About</a></li>
                                <li class=""><a href="index.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </nav>
            <div class="container image-upload-container">
                <!--<form action="upload.php" method="post" enctype="multipart/form-data">
                    <label for="Image" class="block">Image</label>
                    <input type="file" class="file-input" />
                    <button class="final-btn">submit</button>
                </form>-->
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <label for="patientName">Patient Name:</label>
                    <input type="text" name="patientName" id="patientName" class="form-control" required>

                    <label for="birthdate">Birthdate:</label>
                    <input type="date" name="birthdate" id="birthdate" class="form-control" required>

                    <label for="age">Age:</label>
                    <input type="number" name="age" id="age" class="form-control" required>

                    <label for="appointmentDate">Appointment Date:</label>
                    <input type="date" name="appointmentDate" id="appointmentDate" class="form-control" required>

                    <label for="contactNumber">Contact Number:</label>
                    <input type="tel" name="contactNumber" id="contactNumber" class="form-control" required>

                    Select image to upload:
                    <input type="file" name="fileToUpload" id="fileToUpload" class="file-input" required>

                    <input type="submit" value="Upload Image" name="submit" class="final-btn">
                </form>



            </div>
        </div>


    </section>


</body>

</html>