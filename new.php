<!DOCTYPE html>

<html lang="en">

    <head>
        <link rel="stylesheet" href="style/style.css">
        <script type="text/javascript" src="js/index.js"></script>
        <title> New Poll </title>
    </head>

    <body>    
        <div class="form-wrapper">
            <h1 class="new-form-title"> New Poll </h1>
            <!-- <form class="create-new-poll" method="POST" action="process-input.php"> -->
            <form>
                <label for="poll-name"> Poll Name: </label>
                <br />
                <input type="text" id="poll-name" name="poll-name" />

                <br /><br />

                <hr>

                <div id="option-holder">
                    <label for="option1"> Option 1: </label> <br>
                    <input type="text" id="option1" name="option1"></input>
                    <br><br>

                    <label for="option2"> Option 2: </label> <br>
                    <input type="text" id="option2" name="option2"></input>
                    <br><br>

                    <label for="option3"> Option 3: </label> <br>
                    <input type="text" id="option3" name="option3" oninput="new_option();"></input>
                    <br><br>

                </div>

                <button type="submit"> Create Poll </button>

            </form>
            <br />
        </div>
    </body>
</html>