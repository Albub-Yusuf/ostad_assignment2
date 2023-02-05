<?php

$tuitionFee = 16000;

$commission  = ($tuitionFee >= 20000) ? $tuitionFee * (25/100) : ($tuitionFee>= 10000 && $tuitionFee < 20000 ? $tuitionFee * (20/100) : (($tuitionFee > 7000 && $tuitionFee < 10000) ? $tuitionFee * (15/100) : "Invalid data"));


echo "Commission is =  {$commission}";

