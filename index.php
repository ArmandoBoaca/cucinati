<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .login-field {
    margin: 1rem 0;
    }
    label {
        display: block;
    }
    

    button[type="submit"] {
        display: block;
    }

    table {
        table-layout: fixed;
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid black;
    }

    </style>
    <title>Login</title>
</head>
<body>
    <form action="php/login.php" method="POST">
        <div class="login-field">
            <label for="username">Username</label>
            <input id="username" type="text" name="username">
        </div>
        
        <div class="login-field">
            <label for="password">Password</label>
            <input id="password" type="password" name="password">
        </div>
        

        <button type="submit">Submit</button>
    </form>
</body>
</html>