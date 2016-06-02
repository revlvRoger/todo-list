<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="normalize.css">
</head>
<body>
<?php
?>
   <!--  <header class="clearfix">
        <div class="header-wrapper">
        <p>TO DO-LIST</p>
        </div>
    </header> -->

    <div class="content">
        <div class="content-wrapper">
        <!-- forms -->
            <form action = "post.php" method="POST">
                <div class = "input-title">
                    <label for="title">Title:</label><br>
                    <input type="text" name="title" placeholder="Title">
                </div>
                <div class = "input-description">
                    <label for="description">Description:</label><br>
                    <textarea rows="8" cols="40" type="text" name="description" placeholder="Description"></textarea>
                </div>
                <input type="submit">
            </form>
        </div>
            <!-- output -->
            <div class = "content-bottom">
                <div class = "wrapper">
                </div>
            </div>

    </div>

    <footer>
    </footer>

</body>
</html>