<?php
// Option A: Using DateTime (best practice - handles timezones cleanly)
$date = new DateTime('now', new DateTimeZone('America/New_York'));
echo $date1 = $date->format('Y-m-d H:i:s');          // 2026-03-02 23:15:42
echo $date->format('F j, Y g:i:s A');       // March 2, 2026 11:15:42 PM
echo $date->format('l, F j, Y \a\t g:i A'); // Sunday, March 2, 2026 at 11:15 PM

echo "HighWing Innovations @ ".$date1;
