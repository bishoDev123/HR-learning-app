<!DOCTYPE html>
<html lang="en">


<!--plans:
            -add password and username form validation
            -make connection to the database
            -adjust validation to match database data (method is unkown)

--->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>HR concept</title>
</head>

<body>
    <form action="backend.php" method="post">
    <!--start of the username input field-->
    <input 
        id="name" 
        name="username"
        class="inputField" 
        type="text"
        placeholder="username"
        autocomplete="off"
        style="margin-bottom: 20px;"> </br>
    <!--end of the username input field-->
    <input 
        id="password"
        name="password"
        class="inputField" 
        type="text"
        placeholder="password"> </br>
    <button type="submit" class="submit-button">Submit</button>
    </form>

</body>
