<!DOCTYPE html>

<html lang="en">

    <head>
        <!-- <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
        <title> New Poll </title>
    </head>

    <body>
        <div class="form-wrapper">
            <form class="create-new-poll" method="POST" action="process-input.php">
                <label for="poll-name"> Poll Name: </label>
                <input type="text" id="poll-name" name="poll-name" />

                <br /><br />

                <?php
                    /**
                     * 
                     * For the options (see below), make it so its generated by PHP?
                     * Then when a user clicks the + to add another option, it just generates another?
                     * 
                     */
                ?>

                <label for="option"> Option: </label>
                <input type="text" id="option" name="option" />

                <br /><br />

                <label for="option"> Option: </label>
                <input type="text" id="option" name="option" />

                <br /><br />

                <label for="option"> Option: </label>
                <input type="text" id="option" name="option" />

                <br /><br />

                <p> -- + -- </p>
            </form>
        </div>
    </body>
</html>