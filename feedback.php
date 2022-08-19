<?php $root_path = ''; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Feedback | SC IIT Ropar</title>

    <?php include($root_path . 'assets/include/header-files.php'); ?>

</head>

<body>
    <!-- Navbar -->
    <?php
    $active = "FEEDBACK";
    $trans = 0;
    include($root_path . 'assets/include/navbar.php');
    ?>

    <!-- Main Content -->
    <div class="content">
        <div class="row" style="width:100%; margin:auto;">
            <!-- Mail sent to president.sc@iitrpr.ac.in -->
            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdVkkprAeN5lEQf_eVXTWAqMCa6G2W4sB_4WTrDUK_1MsKbjA/viewform?embedded=true" width="640" height="2000" frameborder="0" marginheight="0" marginwidth="0" style="margin:auto">Loading…</iframe>
        </div>
    </div>

    <!-- Footer -->
    <?php include($root_path . 'assets/include/footer.php'); ?>

    <?php include($root_path . 'assets/include/footer-files.php'); ?>

</body>

</html>