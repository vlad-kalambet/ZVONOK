#!/bin/bash
crontab -r
crontab -l > mycron
crontab mycron
rm mycron

{
echo '<?php'
echo 'echo "<h2>";'
echo 'echo "<b>Занятий нет</b>";'
echo 'echo "<br>";'
echo 'echo "</h2>";'
echo '?>'
} > ../active_rasp.php

