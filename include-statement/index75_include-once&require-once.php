<!-- include_once r include er difference holo include_once ekbari kaj korbe koyekbar dileo, kintu prottekbarei include_once likte hobe -->
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
    <?php include_once('header.php'); ?>
    <?php include_once('header.php'); ?>
    <?php include_once('header.php'); ?>

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

    <?php require_once("footer.php") ?>
    <?php require_once("footer.php") ?>
</div>

</body>
</html>

