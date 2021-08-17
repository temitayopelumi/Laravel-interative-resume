<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css"> 
    <title>Resume</title>

   
</head>
<body>
    
    <div class="contact-form">
        <h1>Contact me</h1>
        <form method="post" action="/" enctype="multipart/form-data">
        {{ csrf_field() }}
        <label for="name">Name: </label>
        <input name="name" type="text"><br><br>
        <label for="email">Email: </label>
        <input name="email" type="email"><br><br>
        <label for="subject">Subject: </label>
        <input name="subject" type="text"><br><br>
        <label for="Message">Message: </label>
        <input name="message" type="text"><br><br>
        <button>Submit</button>
        </form>
    </div>
   
</body>
</html>