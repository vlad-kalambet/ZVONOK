<?php
$CPU_T = intval((exec("cat /sys/devices/virtual/thermal/thermal_zone0/temp")) / 1000);
/*$UPTIME = exec("uptime");*/
$UPTIME = exec("awk '{print int($1/3600)\":\"int(($1%3600)/60)\":\"int($1%60)}' /proc/uptime");
echo "Температура процессора = ".$CPU_T."°C";
echo "<br>Вреddя работы = $UPTIME";
?>
