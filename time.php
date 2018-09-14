<?php
$hours=date("H") - 1;
$minute=date("i");
echo((date( "H")-1) . ":" . date( "i:s"));
echo "<br>";
echo "<hr>";
                if ($hours <= 8 or $hours >=17){
                        echo "8:30 утром";
                }
                if ($hours <= 8){
                        echo "8:30 1";
                    if($minute <=30);
                    {
                        echo "8:30";
                    }
                }
                if ($hours >= 8 and $hours <=9){
                    if($minute >=30){
                        echo "9:15";
                    }
                }
                if ($hours == 9){
                    if($minute >= 15) {
                        echo "След 09:20";
                    }
                }
                if ($hours == 9){
                    if($minute >=20){
                        echo "След 10:05";
                    }
                }
                if ($hours == 10){
                    if($minute >=5){
                        echo "След 10:25";
                    }
                }
                if ($hours == 10){
                    if($minute >=25){
                        echo "След 11:10";
                    }
                }
                if ($hours == 11){
                    if($minute >=10){
                        echo "След 11:15";
                    }
                }
                if ($hours == 11){
                    if($minute >=15){
                        echo "След 12:00";
                    }
                }
                if ($hours == 12){
                    if($minute >=0){
                        echo "След 12:40";
                    }
                }
                if ($hours == 12){
                    if($minute >=40){
                        echo "След 13:25";
                    }
                }
                if ($hours == 13){
                    if($minute >=25){
                        echo "След 13:30";
                    }
                }
                if ($hours == 13 or $hours ==14){
                    if($minute >=30){
                        echo "След 14:15";
                    }
                }
                if ($hours == 14){
                    if($minute >=15){
                        echo "След 14:25";
                    }
                }
                if ($hours == 14){
                    if($minute >=25){
                        echo "След 15:10";
                    }
                }
                if ($hours == 15){
                    if($minute >=10){
                        echo "След 15:15";
                    }
                }
                if ($hours == 15){
                    if($minute >=15){
                        echo "След 16:00";
                    }
                }
                if ($hours == 16){
                    if($minute >=0){
                        echo "16";
                    }
                }






?>