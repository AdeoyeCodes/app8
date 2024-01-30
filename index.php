<!DOCTYPE html>
<html lang= "en">
<head>
 <meta charset="UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0"> 
    <meta name="description" content="PHP">
    <meta name="keywords" content="HTML, CSS, PHP">
    <meta name="author" content="Bolux"> 
  <!-- Latest compiled and minified CSS -->
  <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <!-- jQuery library -->
  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    
 <!-- Popper JS -->
  <script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <!-- Latest compiled JavaScript -->
  <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>    
  <script src="https://kit.fontawesome.com/965b829563.js" crossorigin="anonymous"></script>
  <link rel= "stylesheet" type= "text/css" href= "css/style.css">
</head>

<style>
    @keyframes gradientAnimation {
    0%, 100% {
        background-size: 150% 150%;
        background-position: center center;
    }
    50% {
        background-size: 100% 100%;
        background-position: center center;
    
    }
</style>

<body style= " overflow: hidden;
    background: radial-gradient(circle, #0099cc, #003366, #336699, #003366);
    animation: gradientAnimation 15s infinite alternate;">
 <h2 style= "color: pink; text-align: center; margin-bottom: 8dvh; margin-top: 4dvh;"> <b> EMAIL SENDER </b> </h2>

 <div class= "container">
  <form action= "email.php" method= "post">
    <label style= "color: yellow;" for= "to"> <b>To:</b> </label>
    <input type= "email" class= "form-control" name= "to" required />

    <label style= "color:yellow; margin-top: 4dvh;" for= "subject"> <b>Subject:</b> </label>
    <input type="text" class= "form-control" name= "subject" required />

    <label style= "color:yellow; margin-top: 4dvh;" for= "message"> <b>Message:</b> </label>
    <textarea name= "message" class= "form-control" required> </textarea><br />

    <button class= "btn btn-primary"> <b>Send Email</b></button>

 </form>

 </div>

</body>