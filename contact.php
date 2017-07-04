
<html>
<head>
    <script src="dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
    </head>
    <body>
<?php
     $username = $_POST['name'];
      $email=$_POST['email'];
    $sub=$_POST['subject'];
    $msg  = $_POST['message'];
    $send1="Thank You For contacting Us. Will get back to you as soon as possible.\nThanks and Regards\nTEDxLPU\n\n+91-7087606428 | shantanu@tedxlpu.com\n\n";
    $send = "Name :- $username\n Subject :- $sub\n Email :- $email\n Message :- $msg";
        mail("praveensinghraghav96@gmail.com", "Contact", $send, $email);
       mail($email, "Thank You", $send1, "From: shantanu@tedxlpu.com");
		echo '<script>
    setTimeout(function() {
        swal({
            title: "Response Submitted",
            text: "",
            type: "success"
        }, function() {
            window.location = "index.html";
        });
    }, 1000);
</script>';
?>
</body>
</html>