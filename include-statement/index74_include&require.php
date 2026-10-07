<!-- include r require er kaj eki rokom. difference holo include e kono mistake thakleo code baki ta run korbe, require e kono mistake thakle code run korbei na -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Layout</title>
    <link rel="stylesheet" href ="css/main.css">
</head>
<body>

<div class="wrapper">
    <?php include('header.php'); ?>
    <!-- <?php include('header.php'); ?> -->

    <div class="content">
        <div class="main">
            <h2>Sub Heading</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, veniam eius architecto ullam
                cupiditate quam aspernatur quis facilis tempora vel! Aspernatur, consequatur, laborum.
            </p>

            <ul>
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Modi nihil in animi necessitatibus.</li>
                <li>Consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Modi nihil in animi dolore natus.</li>
            </ul>
        </div>

        <?php include("sidebar.php"); ?>
    </div>

    <?php require("footer.php") ?>
</div>

</body>
</html>

