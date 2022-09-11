<html>
    <head>
        <title>Form for entering full name</title>
    </head>
    <body>
        <?php if (!isset($_POST['submit'])) {?>
            <h2>Enter Full Name</h2>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                First name: <br/>
                <input name="first_name"/><br/>
                Last name: <br/>
                <input name="last_name"/><br/>
                <p>
                <input type="submit" name="submit" value="Submit Name"/>
            </form>
            <?php } else { ?>
                <h2>Greetings!</h2>
                <?php  
                    $last_name = $_POST['last_name'];
                    $first_name = $_POST['first_name'];
                    $dbc = mysqli_connect('localhost', 'student', 'student', 'jhaefner')
                            or trigger_error('Error connecting to MySQL server.', E_USER_ERROR);
                    $query = "INSERT INTO fullname (first_name, last_name)"
                            . "VALUES ('$first_name', '$last_name')";
                    $result = mysqli_query($dbc, $query)
                            or trigger_error('Error querying database.', E_USER_WARNING);
                    if (!$result)
                    {
                        trigger_error("Query Error Description: " . mysqli_error($dbc), E_USER_WARNING);

                    }
                    mysqli_close(($dbc));
                    ?> 
                    <br/><br/>Hello <?= $first_name . " " . $last_name; ?>
                            Thanks for submitting the form!
                <?php } ?>
    </body>
</html>