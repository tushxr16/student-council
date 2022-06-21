<?php $root_path = ''; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Calendar | SC IIT Ropar</title>

    <?php include($root_path . 'assets/include/header-files.php'); ?>

</head>

<body>
    <!-- Navbar -->
    <?php
    $active = "CALENDAR";
    $trans = 0;
    include($root_path . 'assets/include/navbar.php');
    ?>

    <!-- Main Content -->
    <div class="content">
            <div class="row" style="width:100%; margin:auto">
                <iframe src="https://calendar.google.com/calendar/embed?height=700&amp;wkst=1&amp;bgcolor=%23E67C73&amp;ctz=Asia%2FKolkata&amp;src=aWl0cnByLmFjLmluXzN0YTRiNmxydnBtYzVvbWM0cmp2N2hlbzgwQGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%23F09300&amp;showCalendars=1" style="border:solid 1px #777; margin:auto" width="900" height="700" frameborder="0" scrolling="no"></iframe>
            </div>
    </div>

    <!-- Footer -->
    <?php include($root_path . 'assets/include/footer.php'); ?>

    <?php include($root_path . 'assets/include/footer-files.php'); ?>

</body>

</html>