<!DOCTYPE html>
<html>
    <head>
        <title>
            Simple Application
        </title>
    </head>
    <body>
        <h1> Login </h1>
        <div class="login container">
            <form action="#" method="post">
                <label for="name">Name</label>
                <input type="text" name="name" id="login-name" placeholder={{ $name }}>
                <br>
                <label for="passs">Password</label>
                <input type="password" name="password" id="login-password" placeholder="Enter Password">
                <br>
                <br>
                <input type="submit" value="submit">
            </form>
        </div>
    </body>
</html>