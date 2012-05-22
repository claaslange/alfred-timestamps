<?php

  /* -----------------------------------
  	Script: 	Alfred all the memes
  	Author: 	Claas Lange
  	Usage:		timestamp <timestamp> or just timestamp
  	Desc:		Generate timestamps or create date from timestamp.
  	Updated:	18/05/12
  ----------------------------------- */

  $q = $argv[1];

  if($q != "") // parameter set?
  {
    if(!is_numeric($q)) // timestamps are numbers only
    {
      echo "Invalid Format!";
      return;
    }
    // create date from timestamp
    $copy = date("c",$q)

    echo "";
  }
  else
  {
    $copy = time();
  }

  $var = "echo ".$copy." | pbcopy";
  shell_exec($var);

