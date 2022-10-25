<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP Play</title>
</head>

<body>
    <div>
        <h1>Hello Playground</h1>
    </div>
    <?php
    session_start();
    function kill_session()
    {
        unset($_SESSION['user']);
        unset($_SESSION['pass']);
        session_destroy();
        echo '<hr>Session Destroyed<br>';
        echo  'Session ID : ' . session_id() . '<br>';
        var_dump($_SESSION);
    }
    if (count($_SESSION) > 0) {
        echo '<dl> ';
        foreach ($_SESSION as $key => $value) {
            echo "<dt>Key: $key";
            echo "<dd>Value: $value";
        }
        echo '</dl><hr>';
        echo 'Session ID : ' . session_id() . '<br>';
        var_dump($_SESSION);
        kill_session();
    } else {
        echo 'Please <a href="./mysql/login.php">Log In</a>';
    }
    ?>
</body>

</html>