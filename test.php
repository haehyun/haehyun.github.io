   $output = array();
   $command = "cat /etc/passwd | cut -d\":\" -f1";
   echo 'running the command: <b>'.$command."</b><br />";
   exec($command, &$output);
   echo implode("<br />\n", $output);
