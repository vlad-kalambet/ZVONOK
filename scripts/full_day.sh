#!/bin/bash
crontab -r
crontab -l > mycron
#Звонки УИВЦ
echo "30 08 * * 1-6 /var/www/html/ZVONOK/localhost/scripts/script.sh" >> mycron
echo "00 10 * * 1-6 /var/www/html/ZVONOK/localhost/scripts/script.sh" >> mycron
echo "25 10 * * 1-6 /var/www/html/ZVONOK/localhost/scripts/script.sh" >> mycron
echo "55 11 * * 1-6 /var/www/html/ZVONOK/localhost/scripts/script.sh" >> mycron
echo "40 12 * * 1-6 /var/www/html/ZVONOK/localhost/scripts/script.sh" >> mycron
echo "10 14 * * 1-6 /var/www/html/ZVONOK/localhost/scripts/script.sh" >> mycron
echo "25 14 * * 1-6 /var/www/html/ZVONOK/localhost/scripts/script.sh" >> mycron
echo "55 15 * * 1-6 /var/www/html/ZVONOK/localhost/scripts/script.sh" >> mycron
#Конец ЗВОНКИ УИВЦ
#Указатели УИВЦ
echo "00 00 * * 1-6 /var/www/html/ZVONOK/localhost/points/script1.sh" >> mycron
echo "30 08 * * 1-6 /var/www/html/ZVONOK/localhost/points/script2.sh" >> mycron
echo "00 10 * * 1-6 /var/www/html/ZVONOK/localhost/points/script3.sh" >> mycron
echo "25 10 * * 1-6 /var/www/html/ZVONOK/localhost/points/script4.sh" >> mycron
echo "55 11 * * 1-6 /var/www/html/ZVONOK/localhost/points/script5.sh" >> mycron
echo "40 12 * * 1-6 /var/www/html/ZVONOK/localhost/points/script6.sh" >> mycron
echo "10 14 * * 1-6 /var/www/html/ZVONOK/localhost/points/script7.sh" >> mycron
echo "25 14 * * 1-6 /var/www/html/ZVONOK/localhost/points/script8.sh" >> mycron
echo "55 15 * * 1-6 /var/www/html/ZVONOK/localhost/points/script9.sh" >> mycron
#Конец УКАЗАТЕЛИ УИВЦ
#Звонки КОЛЛЕДЖ
echo "30 08 * * 1-6 /var/www/html/ZVONOK/localhost/scripts/script_col.sh" >> mycron
echo "15 09 * * 1-6 /var/www/html/ZVONOK/localhost/scripts/script_col.sh" >> mycron
echo "20 09 * * 1-6 /var/www/html/ZVONOK/localhost/scripts/script_col.sh" >> mycron
echo "05 10 * * 1-6 /var/www/html/ZVONOK/localhost/scripts/script_col.sh" >> mycron
echo "25 10 * * 1-6 /var/www/html/ZVONOK/localhost/scripts/script_col.sh" >> mycron
echo "10 11 * * 1-6 /var/www/html/ZVONOK/localhost/scripts/script_col.sh" >> mycron
echo "15 11 * * 1-6 /var/www/html/ZVONOK/localhost/scripts/script_col.sh" >> mycron
echo "00 12 * * 1-6 /var/www/html/ZVONOK/localhost/scripts/script_col.sh" >> mycron
echo "40 12 * * 1-6 /var/www/html/ZVONOK/localhost/scripts/script_col.sh" >> mycron
echo "25 13 * * 1-6 /var/www/html/ZVONOK/localhost/scripts/script_col.sh" >> mycron
echo "30 13 * * 1-6 /var/www/html/ZVONOK/localhost/scripts/script_col.sh" >> mycron
echo "15 14 * * 1-6 /var/www/html/ZVONOK/localhost/scripts/script_col.sh" >> mycron
echo "25 14 * * 1-6 /var/www/html/ZVONOK/localhost/scripts/script_col.sh" >> mycron
echo "10 15 * * 1-6 /var/www/html/ZVONOK/localhost/scripts/script_col.sh" >> mycron
echo "15 15 * * 1-6 /var/www/html/ZVONOK/localhost/scripts/script_col.sh" >> mycron
echo "00 16 * * 1-6 /var/www/html/ZVONOK/localhost/scripts/script_col.sh" >> mycron
#Конец ЗВОНКИ КОЛЛЕДЖ

#Указатели КОЛЛЕДЖ
echo "00 00 * * 1-6 /var/www/html/ZVONOK/localhost/points_col/script1.sh" >> mycron
echo "30 08 * * 1-6 /var/www/html/ZVONOK/localhost/points_col/script2.sh" >> mycron
echo "15 09 * * 1-6 /var/www/html/ZVONOK/localhost/points_col/script3.sh" >> mycron
echo "20 09 * * 1-6 /var/www/html/ZVONOK/localhost/points_col/script4.sh" >> mycron
echo "05 10 * * 1-6 /var/www/html/ZVONOK/localhost/points_col/script5.sh" >> mycron
echo "25 10 * * 1-6 /var/www/html/ZVONOK/localhost/points_col/script6.sh" >> mycron
echo "10 11 * * 1-6 /var/www/html/ZVONOK/localhost/points_col/script7.sh" >> mycron
echo "15 11 * * 1-6 /var/www/html/ZVONOK/localhost/points_col/script8.sh" >> mycron
echo "00 12 * * 1-6 /var/www/html/ZVONOK/localhost/points_col/script9.sh" >> mycron
echo "40 12 * * 1-6 /var/www/html/ZVONOK/localhost/points_col/script10.sh" >> mycron
echo "25 13 * * 1-6 /var/www/html/ZVONOK/localhost/points_col/script11.sh" >> mycron
echo "30 13 * * 1-6 /var/www/html/ZVONOK/localhost/points_col/script12.sh" >> mycron
echo "15 14 * * 1-6 /var/www/html/ZVONOK/localhost/points_col/script13.sh" >> mycron
echo "25 14 * * 1-6 /var/www/html/ZVONOK/localhost/points_col/script14.sh" >> mycron
echo "10 15 * * 1-6 /var/www/html/ZVONOK/localhost/points_col/script15.sh" >> mycron
echo "15 15 * * 1-6 /var/www/html/ZVONOK/localhost/points_col/script16.sh" >> mycron
echo "00 16 * * 1-6 /var/www/html/ZVONOK/localhost/points_col/script17.sh" >> mycron
#Конец УКАЗАТЕЛИ КОЛЛЕДЖ



#echo "10 16 * * 1-6 /var/www/html/ZVONOK/localhost/scripts/script.sh" >> mycron
#echo "55 16 * * 1-6 /var/www/html/ZVONOK/localhost/scripts/script.sh" >> mycron
#echo "00 17 * * 1-6 /var/www/html/ZVONOK/localhost/scripts/script.sh" >> mycron
#echo "45 17 * * 1-6 /var/www/html/ZVONOK/localhost/scripts/script.sh" >> mycron



crontab mycron
rm mycron


{
echo '<?php'
echo 'echo "<h2>";'
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

{
echo '<?php'
echo 'echo "<h2>";'
echo 'echo "Колледж";'
echo 'echo "<br>";'
echo 'echo "<b>1</b> пара:    08:30 — 09:15, 09:20 — 10:05";'
echo 'echo "<br>";'
echo 'echo "<b>2</b> пара:    10:25 — 11:10, 11:15 — 12:00";'
echo 'echo "<br>";'
echo 'echo "<b>3</b> пара:    12:40 — 13:25, 13:30 — 14:15";'
echo 'echo "<br>";'
echo 'echo "<b>4</b> пара:    14:25 — 15:10, 15:15 — 16:00";'
echo 'echo "</h2>";'
echo '?>'
} > ../active_rasp_col.php

