<!-- Let’s assume that you run a store of some kind (a gym, a donut shop, a farm stand, used
car lot, whatever), and the hours it is open vary each day. Saturdays and Sundays are the
busiest days, so it is open from 9 AM – 9 PM. Monday is your day off, and the rest of
the week, the hours are 10 AM – 6 PM, except in the summer (July and August) when
you stay open until 7 PM -->

<html>
    <body>
        <h1>Ambe's Farm Stand</h1>
        <?php 
            date_default_timezone_set("GMT");    //set timezone
            $current_month = date("n");     //returns numeric representation of month
            $current_day = date("l"); //returns full textual representation of day.
            if ( $current_day =='Sunday' || $current_day == 'Saturday') {
                echo "Hello, my store opens from 9 AM to 9 PM today.";
            } else if ( $current_day == 'Monday') {
                echo "Hello, sorry we are closed for the day";
            } else {
                if ($current_month == 7 || $current_month == 8) {
                    echo "Hello, my store opens from 10 AM to 7 PM today.";
                } else {
                    echo "Hello, my store opens from 10 AM to 6 PM today.";
                }
            }
        ?>
    </body>
</html>