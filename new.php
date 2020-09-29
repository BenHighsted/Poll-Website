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

                <?php
                    $counter = 0;

                    // Creates a new option section with the correlating number (UPDATE THIS TO JAVASCRIPT)
                    function new_option(&$count){
                        $count++;
                        echo "<label for='option".$count."'> Option ".$count.": </label>";
                        echo "<input type='text' id='option".$count."' name='option".$count."' />";
                        echo "<br><br>";
                    }

                    new_option($counter);
                    new_option($counter);
                    new_option($counter);

                    //NOTE: Might need to make it so theres a max options number? (e.g. 10?)
                ?>

                <script>
                    new_option();
                    new_option();
                    new_option();
                </script>

                <button onclick="new_option();"> -- + -- </button> <!-- Want this to call new_section ; currently it just submits the form. --> 
                                           <!-- UPDATE: Thinking that this would be much better as a javascript function. Make the transition soon. -->
            </form>
        </div>
    </body>
</html>