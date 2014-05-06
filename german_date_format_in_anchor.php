/*  Code snippet by ewgenia
    Change an Anchor date to the German date format
    or another by following the instructions in readme.md */

  // Just insert this into anchor/functions/articles.php

function article_day() {
    if($created = Registry::prop('article', 'created')) {
        $myday=$created;
        list($year, $month, $dbday) = explode('-', $myday);
        list($day, $time) = explode(' ', $dbday); // strips the time off
        $day= ltrim ($day,'0');
        return $day;
    }
}

function article_month() {
    if($created = Registry::prop('article', 'created')) {
        $mymonth=$created;
        list($year, $month, $day) = explode('-', $mymonth);

        if(!isset($month_text)) $month_text='';
        switch($month)
        {
            case "01":
            $month_text = 'Januar'; // this in January in case you're wondering
            break;

            case "02":
            $month_text = 'Februar';
            break;

            case "03":
            $month_text = 'M&auml;rz';
            break;

            case "04":
            $month_text = 'April';
            break;

            case "05":
            $month_text = 'Mai';
            break;

            case "06":
            $month_text = 'Juni';
            break;

            case "07":
            $month_text = 'Juli';
            break;

            case "08":
            $month_text = 'August';
            break;

            case "09":
            $month_text = 'September';
            break;

            case "10":
            $month_text = 'Oktober';
            break;

            case "11":
            $month_text = 'November';
            break;

            case "12":
            $month_text = 'Dezember';
            break;
        }
    return $month_text;
    }
}

function article_year() {
    if($created = Registry::prop('article', 'created')) {
        $myyear=$created;
        list($year, $month, $day) = explode('-', $myyear);
        return $year;
    }
}
