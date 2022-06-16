<?php
    if (isset($_GET['month'])) {
        $month = $_GET['month'];
        $year = $_GET['year'];
    } else {
        $month = date('n');
        $_GET['month'] = date('m');
        $year = date("Y");
    }

    switch ($month) {
        case 1:
            $prevmonth = 12;
            $prevyear = $year - 1;
            $nextmonth = $month + 1;
            $nextyear = $year;
            break;
        case 12:
            $prevmonth = $month - 1;
            $prevyear = $year;
            $nextmonth = 1;
            $nextyear = $year + 1;
            break;

        default:
            $prevmonth = $month - 1;
            $prevyear = $year;
            $nextmonth = $month + 1;
            $nextyear = $year;
    }
    // echo "顯示年月為" . $year ."年". $month."月";
    ?>