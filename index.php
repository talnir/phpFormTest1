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