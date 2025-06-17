<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="form-holder">
            <form action="include/formhandler.inc.php" method="post">
                <div class="inp-field">
                    <label for="username">Username</label>
                    <input type="text" name="username">
                </div>
                <div class="inp-field">
                    <label for="password">Password</label>
                    <input type="password " name="password">
                </div>
                <div class="inp-field">
                    <label for="email">Email</label>
                    <input type="text" name="email">
                </div>
                <div class="inp-field">
                    <button type="submit">Log in</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>