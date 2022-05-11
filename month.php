<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/style.css">
</head>

<body>
    <header>
        萬年曆
    </header>
    <aside>

    </aside>
    <section>
        <div class="week">
            <div>日</div>
            <div>一</div>
            <div>二</div>
            <div>三</div>
            <div>四</div>
            <div>五</div>
            <div>六</div>
        </div>
        <?php
        $month = 4; //以幾月為標準
        $firstday = date("Y-") . $month . "-1"; //這個標準月的第一天
        $today = date("Y-m-d"); //今天(日期)
        $totalday = date("t", strtotime($firstday)); //這個標準月有幾天(值)
        $weekday = date("w", strtotime($today)); //今天星期幾(值)
        $firstweek = date("w", strtotime($firstday)); //這個月第一天星期幾(值)
        $lastday = date("Y-") . $month . "-" . $totalday; //標準月的最後一天
        $lastweek = date("w", strtotime($lastday)); //最後一天星期幾(值)
        // echo $lastday;
        // echo $lastweek;
        $datehouse = [];

        for ($i = 0; $i < $firstweek; $i++) {
            $datehouse[] = "";
        }

        for ($i = 0; $i < $totalday; $i++) {
            $date = date("Y-m-j", strtotime("+$i days", strtotime($firstday)));
            $datehouse[] = $date;
        }

        for ($i = 0; $i < (6 - $lastweek); $i++) {
            $datehouse[] = "";
        }

        // echo "<pre>";
        // print_r($datehouse);
        // echo "</pre>";
        // 月份的陣列
        foreach ($datehouse as $key => $day) {

            if ($key % 7 == 0) {
                echo "<tr>";
            }

            if (!empty($day)) {
                $dayFormat = date("j", strtotime($day));
            } else {
                $dayFormat = "";
            }

            //$dayFormat=(!empty($day))?date("d",strtotime($day)):"";

            echo "<td>{$dayFormat}</td>";

            if ($key % 7 == 6) {
                echo "</tr>";
            }
        }
        ?>
    </section>
    <footer>
        
    </footer>
</body>

</html>