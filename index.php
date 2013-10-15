<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Phone form</title>
    </head>
    <body>
        <?php
            /* Script name: buildForm
            * Description: Uses the form to create a simple HTML form
            */
        
            session_start();
            $_SESSION['accessTime'] = date("M/d/Y g:i:sa");
            print "This is page 1<br />";
            print "You accessed the application at: " . $_SESSION['accessTime'];
            print "<div><a href=\"testcookie.php\">Continue to next page</a></div>";
        
            require_once("Form1.php");
            $phone_form = new Form1("process.php","Submit Phone");
            $phone_form->addField("first_name","First Name");
            $phone_form->addField("last_name","Last Name");
            $phone_form->addField("phone","Phone");
            echo "<h3>Please fill out the following form:</h3>";
            $phone_form->displayForm();
        ?>
    </body>
</html>