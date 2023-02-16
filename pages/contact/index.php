<?php

include("../../config/database.php");

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);
    $message = mysqli_real_escape_string($conn, $message);

    $sql = "INSERT INTO `message` (`name`, `email`, `message`) VALUES ('$name', '$email', '$message');";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Message sent successfully')</script>";
    } else {
        echo "<script>alert('Fail! Message not sent')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- link include -->
    <?php include '../../components/link.php'; ?>
    <style>
        .mini-profile-widget .image-container .avatar {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 50%;
            display: block;
            height: 180px;
            margin: 0 auto;
            padding: 4px;
            width: 180px
        }
    </style>

</head>

<body>

    <!-- header img -->
    <?php include '../../components/header_img.php'; ?>

    <!-- navber -->
    <?php include '../../components/navber.php'; ?>

    <!-- navber down space -->
    <div class="container content_wrap">
        <div class="row">
            <div class="pd-4"></div>
        </div>
    </div>


    <section>
        <div class="container content_wrap">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12">

                    <div class="row">
                        <div class="col-12">
                            <?php include '../../components/notice_mar.php'; ?>
                        </div>
                    </div>



                    <div class="row">

                        <div class="contact-wrap w-100 p-md-5 p-4">
                            <div id="form-message-warning" class="mb-4"></div>
                            <form method="POST" id="contactForm" name="contactForm" action="<?php echo $_SERVER['PHP_SELF'] ?>" class="contactForm">
                                <div class="row">
                                    <div class="col-md-6 p-3">
                                        <div class="form-group"><label for="name" class="label">Full Name</label> <input type="text" name="name" id="name" placeholder="Name" class="form-control"></div>
                                    </div>
                                    <div class="col-md-6 p-3">
                                        <div class="form-group"><label for="email" class="label">Email Address</label> <input type="email" name="email" id="email" placeholder="Email" class="form-control"></div>
                                    </div>
                                    <div class="col-md-12 p-3">
                                        <div class="form-group"><label for="subject" class="label">Subject</label> <input type="text" name="subject" id="subject" placeholder="Subject" class="form-control"></div>
                                    </div>
                                    <div class="col-md-12 p-3">
                                        <div class="form-group"><label for="#" class="label">Message</label> <textarea name="message" id="message" cols="30" rows="4" placeholder="Message" class="form-control"></textarea></div>
                                    </div>
                                    <center>
                                        <div class="col-md-12 p-3">
                                            <div class="form-group"><input type="submit" name="submit" value="Send Message" class="btn btn-primary">
                                                <div class="submitting"></div>
                                            </div>
                                        </div>
                                    </center>
                                </div>
                            </form>
                        </div>

                    </div>


                </div>

                <div class="col-lg-3 col-md-12 col-sm-12">
                    <?php include '../../components/sideber.php'; ?>

                    <div class="pd-4"></div>

                    <?php include '../../components/official_link.php'; ?>

                    <div class="pd-4"></div>

                    <?php include '../../components/admit_notice.php'; ?>

                    <div class="pd-4"></div>
                </div>
            </div>

        </div>

    </section>


    <div class="container content_wrap">
        <footer>
            <?php include '../../components/fotter.php'; ?>

        </footer>
    </div>






    <?php include '../../components/script.php'; ?>
</body>

</html>