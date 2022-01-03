<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BABY TOYS</title>
    <!-- link css -->
    <?php include_once './client/views/layouts/style.php'; ?>
    <!-- ------------------ -->
</head>

<body>

    <div class="wrapper_container">
        <!-- header -->
        <?php include_once './client/views/layouts/header.php'; ?>

        <!-- ------------------ -->

        <div>
            <?php include_once $view; ?>
        </div>

        <!-- footer -->
        <?php include_once './client/views/layouts/footer.php'; ?>
        <!-- ---------------------- -->
    </div>


    <!-- script -->
    <?php include_once './client/views/layouts/script.php'; ?>
    <!-- ----------------- -->
</body>

</html>