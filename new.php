<!DOCTYPE html>

<html lang="en">

    <head>
        <!-- <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
        <link rel="stylesheet" href="style/style.css">
        <script type="text/javascript" src="js/index.js"></script>
        <title> New Poll </title>
    </head>

    <body>    
        <div class="form-wrapper">
            <!-- <form class="create-new-poll" method="POST" action="process-input.php"> -->
            <form>
                <label for="poll-name"> Poll Name: </label>
                <input type="text" id="poll-name" name="poll-name" />

                <br /><br />

                <div id="option-holder"></div>

                <script>
                    new_option();
                    new_option();
                    new_option();
                </script>

                <button onclick="new_option();" type="button"> -- + -- </button> <!-- Want this to call new_section ; currently it just submits the form. --> 
            </form>
        </div>
    </body>
</html>