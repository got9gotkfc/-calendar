<?php
        $month = $_GET['month'];
        $today = date("Y-m-d"); //今天(日期)
        $firstday = $year . "-" . $month . "-1"; //這個標準月的第一天 
        $totalday = date("t", strtotime($firstday)); //這個標準月有幾天(值)
        $weekday = date("w", strtotime($today)); //今天星期幾(值)
        $firstweek = date("w", strtotime($firstday)); //這個月第一天星期幾(值)
        $lastday = $year . "-" . $month . "-" . $totalday; //標準月的最後一天
        $lastweek = date("w", strtotime($lastday)); //最後一天星期幾(值)
        $lastmonthday = date("w", strtotime("-1 days", strtotime($firstday)));
        // echo $firstday;
        // echo $lastday;
        // echo $lastweek;
        // echo $lastmonthday;
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

        //datehouse有"空值" 和 "數字(日期)"
        //找出假日
        // 1.key%7找六日

        // 月份的陣列
        foreach ($datehouse as $key => $day) {


            switch ($month) {
                case '1':
                    if (!empty($day)) {
                        $dayFormat = date("j", strtotime($day));
                        if ($dayFormat == 1) {
                            $festival = "元旦";
                        } else if ($dayFormat == 11) {
                            $festival = "司法節";
                        } else if ($dayFormat == 19) {
                            $festival = "阿咪生日";
                        } else if ($dayFormat == 15) {
                            $festival = "藥師節";
                        } else {
                            $festival = "";
                        }
                    } else {
                        $dayFormat = "";
                        $festival = "";
                    }
                    if (!empty($dayFormat)) {
                        if ($key % 7 == 6 || $key % 7 == 0 || $dayFormat == 1) {
                            echo "<div class='weekends'>{$dayFormat}<br>{$festival}</div>";
                        } else {
                            echo "<div class='weekday'>{$dayFormat}<br>{$festival}</div>";
                        }
                    } else {
                        echo "<div class='no'>{$dayFormat}</div>";
                    }
                    break;
                case '2':
                    if (!empty($day)) {
                        $dayFormat = date("j", strtotime($day));
                        if ($dayFormat == 14) {
                            $festival = "情人節";
                        } else if ($dayFormat == 28) {
                            $festival = "和平紀年日";
                        } else {
                            $festival = "";
                        }
                    } else {
                        $dayFormat = "";
                        $festival = "";
                    }
                    if (!empty($dayFormat)) {
                        if ($key % 7 == 6 || $key % 7 == 0 || $dayFormat == 28) {
                            echo "<div class='weekends'>{$dayFormat}<br>{$festival}</div>";
                        } else {
                            echo "<div class='weekday'>{$dayFormat}<br>{$festival}</div>";
                        }
                    } else {
                        echo "<div class='no'>{$dayFormat}</div>";
                    }
                    break;
                case '3':
                    if (!empty($day)) {
                        $dayFormat = date("j", strtotime($day));
                        if ($dayFormat == 8) {
                            $festival = "婦女節";
                        } else  if ($dayFormat == 14) {
                            $festival = "白色情人節";
                        } else if ($dayFormat == 29) {
                            $festival = "青年節";
                        } else {
                            $festival = "";
                        }
                    } else {
                        $dayFormat = "";
                        $festival = "";
                    }
                    if (!empty($dayFormat)) {
                        if ($key % 7 == 6 || $key % 7 == 0) {
                            echo "<div class='weekends'>{$dayFormat}<br>{$festival}</div>";
                        } else {
                            echo "<div class='weekday'>{$dayFormat}<br>{$festival}</div>";
                        }
                    } else {
                        echo "<div class='no'>{$dayFormat}</div>";
                    }
                    break;
                case '4':
                    if (!empty($day)) {
                        $dayFormat = date("j", strtotime($day));
                        if ($dayFormat == 1) {
                            $festival = "愚人節";
                        } else   if ($dayFormat == 4) {
                            $festival = "兒童節";
                        } else if ($dayFormat == 17) {
                            $festival = "復活節";
                        } else if ($dayFormat == 22) {
                            $festival = "世界地球日";
                        } else {
                            $festival = "";
                        }
                    } else {
                        $dayFormat = "";
                        $festival = "";
                    }
                    if (!empty($dayFormat)) {
                        if ($key % 7 == 6 || $key % 7 == 0||$dayFormat==4) {
                            echo "<div class='weekends'>{$dayFormat}<br>{$festival}</div>";
                        } else {
                            echo "<div class='weekday'>{$dayFormat}<br>{$festival}</div>";
                        }
                    } else {
                        echo "<div class='no'>{$dayFormat}</div>";
                    }
                    break;
                case '5':
                    if (!empty($day)) {
                        $dayFormat = date("j", strtotime($day));
                        if ($dayFormat == 1) {
                            $festival = "勞動節";
                        } else if (($dayFormat==8&&$key == 7) OR ($dayFormat!=15&&$key==14)) {
                            $festival = "母親節";
                        }else{
                            $festival = "";
                        }
                    } else {
                        $dayFormat = "";
                        $festival = "";
                    }
                    if (!empty($dayFormat)) {
                        if ($key % 7 == 6 || $key % 7 == 0 || $dayFormat == 1) {
                            echo "<div class='weekends'>{$dayFormat}<br>{$festival}</div>";
                        } else {
                            echo "<div class='weekday'>{$dayFormat}<br>{$festival}</div>";
                        }
                    } else {
                        echo "<div class='no'>{$dayFormat}</div>";
                    }
                    break;
                case '6':
                    if (!empty($day)) {
                        $dayFormat = date("j", strtotime($day));
                        if ($dayFormat == 6) {
                            $festival = "工程師節";
                        } else  if ($dayFormat == 15) {
                            $festival = "警察節";
                        } else {
                            $festival = "";
                        }
                    } else {
                        $dayFormat = "";
                        $festival = "";
                    }
                    if (!empty($dayFormat)) {
                        if ($key % 7 == 6 || $key % 7 == 0) {
                            echo "<div class='weekends'>{$dayFormat}<br>{$festival}</div>";
                        } else {
                            echo "<div class='weekday'>{$dayFormat}<br>{$festival}</div>";
                        }
                    } else {
                        echo "<div class='no'>{$dayFormat}</div>";
                    }
                    break;
                case '7':
                    if (!empty($day)) {
                        $dayFormat = date("j", strtotime($day));
                        $festival = "";
                    } else {
                        $dayFormat = "";
                        $festival = "";
                    }
                    if (!empty($dayFormat)) {
                        if ($key % 7 == 6 || $key % 7 == 0) {
                            echo "<div class='weekends'>{$dayFormat}<br>{$festival}</div>";
                        } else {
                            echo "<div class='weekday'>{$dayFormat}<br>{$festival}</div>";
                        }
                    } else {
                        echo "<div class='no'>{$dayFormat}</div>";
                    }
                    break;
                case '8':
                    if (!empty($day)) {
                        $dayFormat = date("j", strtotime($day));
                        if ($dayFormat == 8) {
                            $festival = "父親節";
                        } else {
                            $festival = "";
                        }
                    } else {
                        $dayFormat = "";
                        $festival = "";
                    }
                    if (!empty($dayFormat)) {
                        if ($key % 7 == 6 || $key % 7 == 0) {
                            echo "<div class='weekends'>{$dayFormat}<br>{$festival}</div>";
                        } else {
                            echo "<div class='weekday'>{$dayFormat}<br>{$festival}</div>";
                        }
                    } else {
                        echo "<div class='no'>{$dayFormat}</div>";
                    }
                    break;
                    case '9':
                        if (!empty($day)) {
                            $dayFormat = date("j", strtotime($day));
                            if ($dayFormat == 3) {
                                $festival = "軍人節";
                            } else  if ($dayFormat == 28) {
                                $festival = "教師節";
                            } else{
                                $festival = "";
                            }
                        } else {
                            $dayFormat = "";
                            $festival = "";
                        }
                        if (!empty($dayFormat)) {
                            if ($key % 7 == 6 || $key % 7 == 0) {
                                echo "<div class='weekends'>{$dayFormat}<br>{$festival}</div>";
                            } else {
                                echo "<div class='weekday'>{$dayFormat}<br>{$festival}</div>";
                            }
                        } else {
                            echo "<div class='no'>{$dayFormat}</div>";
                        }
                        break;
                        case '10':
                            if (!empty($day)) {
                                $dayFormat = date("j", strtotime($day));
                                if ($dayFormat == 10) {
                                    $festival = "雙十節";
                                } else  if ($dayFormat == 25) {
                                    $festival = "台灣光復節";
                                } else if ($dayFormat == 31) {
                                    $festival = "萬聖節";
                                } else {
                                    $festival = "";
                                }
                            } else {
                                $dayFormat = "";
                                $festival = "";
                            }
                            if (!empty($dayFormat)) {
                                if ($key % 7 == 6 || $key % 7 == 0||$dayFormat==10) {
                                    echo "<div class='weekends'>{$dayFormat}<br>{$festival}</div>";
                                } else {
                                    echo "<div class='weekday'>{$dayFormat}<br>{$festival}</div>";
                                }
                            } else {
                                echo "<div class='no'>{$dayFormat}</div>";
                            }
                            break;
                            case '11':
                                if (!empty($day)) {
                                    $dayFormat = date("j", strtotime($day));
                                    if ($dayFormat == 1) {
                                        $festival = "商人節";
                                    } else  if ($dayFormat == 24) {
                                        $festival = "感恩節";
                                    } else {
                                        $festival = "";
                                    }
                                } else {
                                    $dayFormat = "";
                                    $festival = "";
                                }
                                if (!empty($dayFormat)) {
                                    if ($key % 7 == 6 || $key % 7 == 0) {
                                        echo "<div class='weekends'>{$dayFormat}<br>{$festival}</div>";
                                    } else {
                                        echo "<div class='weekday'>{$dayFormat}<br>{$festival}</div>";
                                    }
                                } else {
                                    echo "<div class='no'>{$dayFormat}</div>";
                                }
                                break;
                                case '12':
                                    if (!empty($day)) {
                                        $dayFormat = date("j", strtotime($day));
                                        if ($dayFormat == 12) {
                                            $festival = "憲兵節";
                                        } else  if ($dayFormat == 25) {
                                            $festival = "聖誕節";
                                        } else if ($dayFormat == 31) {
                                            $festival = "跨年";
                                        } else {
                                            $festival = "";
                                        }
                                    } else {
                                        $dayFormat = "";
                                        $festival = "";
                                    }
                                    if (!empty($dayFormat)) {
                                        if ($key % 7 == 6 || $key % 7 == 0) {
                                            echo "<div class='weekends'>{$dayFormat}<br>{$festival}</div>";
                                        } else {
                                            echo "<div class='weekday'>{$dayFormat}<br>{$festival}</div>";
                                        }
                                    } else {
                                        echo "<div class='no'>{$dayFormat}</div>";
                                    }
                                    break;
            }
        }
        ?>