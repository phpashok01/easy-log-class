<?php
// include the main log class 

include "log.php";

// create a object for log  class and pass file name parameter as log filename log.txt  and log.txt file create under the logs directory
$log=  new Log();

// if pass the second parameter as true, then it create log file as datewise like 17-4-2016__log.txt
//$log=  new Log('log.txt',true);
$log->write(__FILE__.' this is the file name where the log class was used '); // write any log message

$log->write(' DIR_PATH '.DIR_PATH); // write any log message
$log->write(' DIR_LOGS'.DIR_LOGS); // write any log message

echo "<br>".DIR_PATH;
echo DIR_LOGS;



?>
