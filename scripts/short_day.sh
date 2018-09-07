#!/bin/bash
crontab -r
crontab -l > mycron
echo "30 08 * * 1-6 /var/www/html/ZVONOK/localhost/scripts/script.sh" >> mycron
echo "30 09 * * 1-6 /var/www/html/ZVONOK/localhost/scripts/script.sh" >> mycron
echo "40 09 * * 1-6 /var/www/html/ZVONOK/localhost/scripts/script.sh" >> mycron
echo "40 10 * * 1-6 /var/www/html/ZVONOK/localhost/scripts/script.sh" >> mycron
echo "00 11 * * 1-6 /var/www/html/ZVONOK/localhost/scripts/script.sh" >> mycron
echo "00 12 * * 1-6 /var/www/html/ZVONOK/localhost/scripts/script.sh" >> mycron
echo "10 12 * * 1-6 /var/www/html/ZVONOK/localhost/scripts/script.sh" >> mycron
echo "10 13 * * 1-6 /var/www/html/ZVONOK/localhost/scripts/script.sh" >> mycron


echo "30 08 * * 1-6 /var/www/html/ZVONOK/localhost/scripts/script_col.sh" >> mycron
echo "30 09 * * 1-6 /var/www/html/ZVONOK/localhost/scripts/script_col.sh" >> mycron
echo "40 09 * * 1-6 /var/www/html/ZVONOK/localhost/scripts/script_col.sh" >> mycron
echo "40 10 * * 1-6 /var/www/html/ZVONOK/localhost/scripts/script_col.sh" >> mycron
echo "00 11 * * 1-6 /var/www/html/ZVONOK/localhost/scripts/script_col.sh" >> mycron
echo "00 12 * * 1-6 /var/www/html/ZVONOK/localhost/scripts/script_col.sh" >> mycron
echo "10 12 * * 1-6 /var/www/html/ZVONOK/localhost/scripts/script_col.sh" >> mycron
echo "10 13 * * 1-6 /var/www/html/ZVONOK/localhost/scripts/script_col.sh" >> mycron
echo "00 17 * * * /var/www/html/ZVONOK/localhost/scripts/full_day.sh" >> mycron


crontab mycron
rm mycron

{
echo '<?php'
echo 'echo "<h2>";'
echo 'echo "Общее";'
echo 'echo "<br>";'
echo 'echo "<b>1</b> пара:    08:30 — 09:30";'
echo 'echo "<br>";'
echo 'echo "<b>2</b> пара:    09:40 — 10:40";'
echo 'echo "<br>";'
echo 'echo "<b>3</b> пара:    11:00 — 12:00";'
echo 'echo "<br>";'
echo 'echo "<b>4</b> пара:    12:10 — 13:10";'
echo 'echo "<br>";'
echo 'echo "В <b>17:00 </b>будет произведен перевод на полный день";'
echo 'echo "</h2>";'
echo '?>'
} > ../active_rasp.php
