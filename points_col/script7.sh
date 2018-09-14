#!/bin/bash
{
echo '<?php'
echo 'echo "<h2>";'
echo 'echo "Колледж";'
echo 'echo "<br>";'
echo 'echo "<b>1</b> пара:    08:30 — 09:15, 09:20 — 10:05";'
echo 'echo "<br>";'
echo 'echo "<b>2</b> пара:    10:25 — 11:10, <b><font color = \"#ff4500\">11:15</font></b> — 12:00";'
echo 'echo "<br>";'
echo 'echo "<b>3</b> пара:    12:40 — 13:25, 13:30 — 14:15";'
echo 'echo "<br>";'
echo 'echo "<b>4</b> пара:    14:25 — 15:10, 15:15 — 16:00";'
echo 'echo "<br>";'
echo 'echo "</h2>";'
echo '?>'
} > /var/www/html/ZVONOK/localhost/active_rasp_col.php




