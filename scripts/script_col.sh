STATUSK=$(curl -Is -o /dev/null -w '%{http_code}' 10.10.101.136/on1 --connect-timeout 5 --max-time 5)
  if [ $STATUSK -eq 200 ]; then
       echo  "`date '+%a %b %d'`""             ""`date '+%H:%M:%S'` ОК"
    break
  else
       echo  "`date '+%a %b %d'`""             ""`date '+%H:%M:%S'` БЕДА"
  fi

