<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>

        <h1>Hi master,This's your schedule.</h1>

    </header>
    <?php
    include "./month/start_month.php";
    ?>

    <span class="last"><a href="index.php?year=<?= $prevyear; ?>&month=<?= $prevmonth; ?>"> 上個月</a></span>
    <span class="tittle"><?= $year . "-" . $month; ?></span>
    <span class="next"><a href="index.php?year=<?= $nextyear; ?>&month=<?= $nextmonth; ?>"> 下個月</a></span>

    <aside>

    </aside>
    <section>
        <div class="weekend">SUN</div>
        <div class="week">MON</div>
        <div class="week">TUE</div>
        <div class="week">WED</div>
        <div class="week">THU</div>
        <div class="week">FRI</div>
        <div class="weekend">SAT</div>

        <?php
         
           include "./month/month.php";
           
        ?>
    </section>
    <footer>

    </footer>
</body>

</html>