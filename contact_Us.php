<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B a n t a y I T</title>
    <link rel="stylesheet" href="contact_Us.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="icon" href="./images/UBlogo.png">
</head>

<body>
    <header>
        <a href="index.php" class="logo">
            <img src="./images/UBlogo.png" alt="">
        </a>
        <h1 style="color: white; position: relative; right: 120px">

            Bantay IT : Graduate Tracer
        </h1>

        <h2 style="color: #F9AE3B; position: relative; left: 450px; bottom: 15px">ALUMNI</h2>
        <a style="text-decoration: none;" href="">
            <h3 style="color: white; position: relative; top: 20px; left: 95px;">Alumni</h3>
        </a>
        <a style="text-decoration: none;" href="admin_login.php">
            <h3 style="color: white; position: relative; top: 20px; left: 50px;">Admin</h3>
        </a>
        <a style="text-decoration: none;" href="partner_login.php">
            <h3 style="color: white; position: relative; top: 20px; ">Partner</h3>
        </a>


    </header>
    <div class="center">
        <h1>Contact Us</h1>
        <form action="https://formspree.io/f/mzbwkqjd" method="post">
            <div class="details">
                <div  class="row">
                    <div style="width: 300px; display:inline-block;margin-right:46px" class="txt_field">
                        <label for="FullName">Full Name</label>
                        <input type="text" name="Full Name" id="FullName" required>
                        <!-- <input type="text" name="name" id="full-name" placeholder="First and Last" required=""> -->
                    </div>
                    <div style="width: 300px; display:inline-block" class="txt_field">
                        <label for="EmailAdd">Email</label>
                        <input type="email" name="Email Address" id="EmailAdd" required>
                    </div>
                </div>

                <div class="txt_field">
                    <label for="Subject">Subject</label>
                    <input type="text" name="Subject" id="Subject" required>
                </div>
            </div>
            <label for="Message">Message</label>
            <div class="txt_field">

                <textarea style="width:650px; height:100px;" name="Message" id="Message" cols="30" rows="10" required></textarea>
            </div>
            <div class="row">
                <div class="button">
                    <input type="submit" placeholder="Send Message">
                </div>
            </div>
        </form>
        <!-- <form id="fs-frm" name="department-contact-form" accept-charset="utf-8" action="https://formspree.io/f/mzbwkqjd" method="post">
            <fieldset id="fs-frm-inputs">
                <label for="full-name">Full Name</label>
                <input type="text" name="name" id="full-name" placeholder="First and Last" required="">

                <label for="email-address">Email Address</label>
                <input type="email" name="_replyto" id="email-address" placeholder="email@domain.tld" required="">

                <label for="department">Department</label>
                <input type="text" name="department" id="department" required="">

                <label for="message">Message</label>
                <textarea rows="5" name="message" id="message" placeholder="Aenean lacinia bibendum nulla sed consectetur. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec ullamcorper nulla non metus auctor fringilla nullam quis risus." required=""></textarea>
                <input type="hidden" name="_subject" id="email-subject" value="Department Contact Form Submission">
            </fieldset>
            <input type="submit" value="Send Message">
        </form> -->
        <img style="width: 500px;height:350px;position:absolute;bottom:80px;left:760px" src="./images/111Transparent_Bantay_IT_logo.png" alt="">

    </div>
    <script>
        window.onbeforeunload = () => {
            for (const form of document.getElementsByTagName('form')) {
                form.reset();
            }
        }
    </script>
</body>

</html>