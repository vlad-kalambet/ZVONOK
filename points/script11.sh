#!/bin/bash

{
echo '<?php'
echo 'echo "<h2>";'
echo 'echo "Колледж";'
echo 'echo "<br>";'

echo 'echo "<b><font color = \"red\">1</font></b> пара:    08:30 — 09:15, 09:20 — 10:05";'
echo 'echo "<br>";'
echo 'echo "<b>2</b> пара:    10:25 — 11:10, 11:15 — 12:00";'
echo 'echo "<br>";'
echo 'echo "<b>3</b> пара:    12:40 — 13:25, 13:30 — 14:15";'
echo 'echo "<br>";'
echo 'echo "<b>4</b> пара:    14:25 — 15:10, 15:15 — 16:00";'
echo 'echo "<br>";'

echo 'echo "<br>";'
echo 'echo "УИВЦ";'
echo 'echo "<br>";'
echo 'echo "<b>1</b> пара:    08:30 — 10:00";'
echo 'echo "<br>";'
echo 'echo "<b>2</b> пара:    10:25 — 11:55";'
echo 'echo "<br>";'
echo 'echo "<b>3</b> пара:    12:40 — 14:10";'
echo 'echo "<br>";'
echo 'echo "<b>4</b> пара:    14:25 — 15:55";'
echo 'echo "</h2>";'
echo '?>'
} > ../active_rasp.php


