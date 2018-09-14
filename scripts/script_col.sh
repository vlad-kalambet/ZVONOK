STATUS=$(curl -Is -o /dev/null -w '%{http_code}' 10.10.101.136/on1 --connect-timeout 5 --max-time 5)
  if [ $STATUS -eq 200 ]; then
       echo  ""Колледж "&emsp;`date '+%d'`""&emsp;""`date '+%H:%M:%S'` ОК <br>" >> /html/ZVONOK/localhost/history.txt

    break
  else
       echo  ""Колледж "&emsp;`date '+%d'`""&emsp;""`date '+%H:%M:%S'` БЕДА <br>" >> /html/ZVONOK/localhost/history.txt
       echo $STATUS >> /html/ZVONOK/localhost/history.txt
  fi

