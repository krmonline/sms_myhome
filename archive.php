<?php
if(!isset($argv[1]) || !isset($argv[2])){
  die("/usr/bin/php archive.php [username] '[old month to move] [view|exec]'\n/usr/bin/php archive.php chakrit 'last month' view\n");
}
#config
$username = $argv[1];
$month_to_move = $argv[2];
$action = isset($argv[3])?$argv[3]:"exec";
$path = "/home/$username/Maildir/";
$maildirmake = "/etc/courier/bin/maildirmake";

if(!file_exists($maildirmake)){
  die("Not found maildirmake file.\n");
}
$now = time();
$lastmonth = strtotime($month_to_move);
$submonth = date("Y.M",$lastmonth);
$lastmonth_timestamp = strtotime("last day of $month_to_move");
$daydiff = intval(($now - $lastmonth_timestamp)/86400);
//echo date("Y-m-d H:i:s",$lastmonth_timestamp)."\n";
$daydiff--; // file -mtime +date not include this day
//echo $daydiff."\n";
// /home/chakrit/Maildir/.Year2017.Jan
$yearpath = $path.".Year";
$fullpath = $yearpath.$submonth;
if(!file_exists($fullpath) && $action == "exec"){
 if(!file_exists($yearpath)){
    $result = `$maildirmake $yearpath`;
    $result = `chown $username $yearpath`;
  }
 $result = `$maildirmake '$fullpath'`;
 $result = `chown $username $fullpath -R`;
 echo "Make directory '$fullpath' success.\n";
}

if(!file_exists($fullpath) && $action == "exec"){
  die("Cannot create $fullpath with maildirmake");
}else{
  if($action == "exec"){
    $cmd = "find {$path}cur/ -type f -mtime +$daydiff|xargs -I {} mv -v {} $fullpath";
  }elseif($action == "view"){
    $cmd = "find {$path}cur/ -type f -mtime +$daydiff|xargs -I {} ls -la {}|head";
    //$cmd = "find {$path}cur/ -type f -mtime +$daydiff";
  }
  echo $cmd."\n";
  echo `$cmd`;
}
?>
