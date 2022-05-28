<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './inlcudes/header.php'; ?>
</head>

<body>
    <div class="container">
        <!-- ASIDE START -->
        <?php include './inlcudes/sidebar.php'; ?>
        <!-- ASIDE END -->

        <!-- MAIN START -->
        <main>
            <h1>Dashboard</h1>

            <div class="date">
                <p><?php echo date("l - d/m/Y") ?></p>
            </div>

            <!-- MAIN CARDS -->
            <?php include './inlcudes/cards.php'; ?>

            <!-- MAIN TABLE -->
            <?php include './inlcudes/mainTable.php'; ?>
        </main>
        <!-- MAIN END -->

        <!-- RIGHT SECTION START -->
        <div class="right">
            <!-- TOP START -->
            <?php include './inlcudes/rightTop.php'; ?>
            <!-- TOP END -->

            <!-- RIGHT MIDDLE - RECENT UPDATES START -->
            <?php include './inlcudes/rightMiddle.php'; ?>
            <!-- RIGHT MIDDLE - RECENT UPDATES END -->

            <!-- RIGHT BOTTOM START -->
            <?php include './inlcudes/rightBottom.php'; ?>
            <!-- RIGHT BOTTOM END -->
        </div>
        <!-- RIGHT SECTION END -->

    </div>

    <?php include './inlcudes/scripts.php'; ?>
</body>

</html>