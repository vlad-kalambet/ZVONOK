#!/bin/bash
{
echo '<?php'
echo 'echo "<h2>";'
echo 'echo "УИВЦ";'
echo 'echo "<br>";'
echo 'echo "<b>1</b> пара:    08:30 — 10:00";'
echo 'echo "<br>";'
echo 'echo "<b>2</b> пара:    <b><font color = \"#ff4500\">10:25</font></b> — 11:55";'
echo 'echo "<br>";'
echo 'echo "<b>3</b> пара:    12:40 — 14:10";'
echo 'echo "<br>";'
echo 'echo "<b>4</b> пара:    14:25 — 15:55";'
echo 'echo "</h2>";'
echo '?>'
} > /var/www/html/ZVONOK/localhost/active_rasp.php


