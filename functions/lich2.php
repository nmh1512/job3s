
<?php

function build_calendar2($month,$year) {

    // Create array containing abbreviations of days of week.
    $daysOfWeek = array('CN','Thứ 2','Thứ 3','Thứ 4','Thứ 5','Thứ 6','Thứ 7');

    // What is the first day of the month in question?
    $firstDayOfMonth = mktime(0,0,0,$month,1,$year);

    // How many days does this month contain?
    $numberDays = date('t',$firstDayOfMonth);

    // Retrieve some information about the first day of the
    // month in question.
    $dateComponents = getdate($firstDayOfMonth);

    // What is the name of the month in question?
    $monthName = $dateComponents['month'];

    // What is the index value (0-6) of the first day of the
    // month in question.
    $dayOfWeek = $dateComponents['wday'];

    // Create the table tag opener and day headers

    $calendar = "<table class='calendar'>";
    // $calendar .= "<caption>$monthName $year</caption>";
    $calendar .= "<tr>";

    // Create the calendar headers

    foreach($daysOfWeek as $day) {
         $calendar .= "<th class='header'>$day</th>";
    }

    // Create the rest of the calendar

    // Initiate the day counter, starting with the 1st.

    $currentDay = 1;

    $calendar .= "</tr><tr>";

    // The variable $dayOfWeek is used to
    // ensure that the calendar
    // display consists of exactly 7 columns.

    if ($dayOfWeek > 0) {
         $calendar .= "<td colspan='$dayOfWeek'>&nbsp;</td>";
    }

    $month = str_pad($month, 2, "0", STR_PAD_LEFT);

    while ($currentDay <= $numberDays) {

         // Seventh column (Saturday) reached. Start a new row.

         if ($dayOfWeek == 7) {

              $dayOfWeek = 0;
              $calendar .= "</tr><tr>";

         }

         $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);

         $date = "$year-$month-$currentDayRel";

         $calendar .= "<td class='day' rel='$date'>
         <div class='the_div_padding'>
                <div class='dayday'>$currentDay</div>

                    <div class='khung_div_thang_sub2_div flex jus_sb mr_b4px hi_top1'>
                        <div class='khung_div_thang_sub2_div1 flex'>
                            <div class='khung_div_thang_sub2_div1_img mr_r8px'>
                                <img src='../images/img_sdn/tronnau.png' alt=''>
                            </div>
                            <div class='khung_div_thang_sub2_div1_tex'>12:00</div>
                        </div>
                        
                        <div class='khung_div_thang_sub2_div1_img'>
                            <svg width='20' height='20' viewBox='0 0 20 20' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                <ellipse cx='9.58398' cy='4.58337' rx='1.25' ry='1.25' fill='#3691D9'/>
                                <circle cx='9.58398' cy='9.58337' r='1.25' fill='#3691D9'/>
                                <ellipse cx='9.58398' cy='14.5834' rx='1.25' ry='1.25' fill='#3691D9'/>
                            </svg>
                        </div>
                    </div>
                    <div class='khung_div_thang_sub2_div flex jus_sb mr_b4px hi_top2'>
                        <div class='khung_div_thang_sub2_div1 flex'>
                            <div class='khung_div_thang_sub2_div1_img mr_r8px'>
                                <img src='../images/img_sdn/tronlam.png' alt=''>
                            </div>
                            <div class='khung_div_thang_sub2_div1_tex'>12:00</div>
                        </div>
                        
                        <div class='khung_div_thang_sub2_div1_img'>
                            <svg width='20' height='20' viewBox='0 0 20 20' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                <ellipse cx='9.58398' cy='4.58337' rx='1.25' ry='1.25' fill='#3691D9'/>
                                <circle cx='9.58398' cy='9.58337' r='1.25' fill='#3691D9'/>
                                <ellipse cx='9.58398' cy='14.5834' rx='1.25' ry='1.25' fill='#3691D9'/>
                            </svg>
                        </div>
                    </div>
                    <div class='khung_div_thang_sub2_div flex jus_sb mr_b4px hi_top3'>
                        <div class='khung_div_thang_sub2_div1 flex'>
                            <div class='khung_div_thang_sub2_div1_img mr_r8px'>
                                <img src='../images/img_sdn/tronxanh.png' alt=''>
                            </div>
                            <div class='khung_div_thang_sub2_div1_tex'>12:00</div>
                        </div>
                        
                        <div class='khung_div_thang_sub2_div1_img'>
                            <svg width='20' height='20' viewBox='0 0 20 20' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                <ellipse cx='9.58398' cy='4.58337' rx='1.25' ry='1.25' fill='#3691D9'/>
                                <circle cx='9.58398' cy='9.58337' r='1.25' fill='#3691D9'/>
                                <ellipse cx='9.58398' cy='14.5834' rx='1.25' ry='1.25' fill='#3691D9'/>
                            </svg>
                        </div>
                    </div>
                    <div class='khung_div_thang_sub2_div flex jus_sb mr_b4px hi_top4'>
                        <div class='cong3'>+ 3 bài viết</div>
                    </div>
            </div>
         </td>";

         // Increment counters

         $currentDay++;
         $dayOfWeek++;

    }

    // Complete the row of the last week in month, if necessary

    if ($dayOfWeek != 7) {

         $remainingDays = 7 - $dayOfWeek;
         $calendar .= "<td colspan='$remainingDays'>&nbsp;</td>";

    }

    $calendar .= "</tr>";

    $calendar .= "</table>";

    return $calendar;

}

?>