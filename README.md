# sms_myhome
How to use

run at
/usr/bin/php archive.php username 'month to move' 'view|exec'
example
/usr/bin/php archive.php chakrit 'last month' 'exec'
There is move email from /home/chakrit/Maildir/cur/* to /home/chakrit/Maildir/.Year2017.Jan/cur

First you should check with command
/usr/bin/php archive.php chakrit '-12 month' 'view'

And then execute with command
/usr/bin/php archive.php chakrit '-12 month' 'exec'

Example command
/usr/bin/php archive.php chakrit '-12 month' 'view'
/usr/bin/php archive.php chakrit '-12 month' 'exec'
/usr/bin/php archive.php chakrit '-11 month' 'view'
/usr/bin/php archive.php chakrit '-11 month' 'exec'
/usr/bin/php archive.php chakrit '-10 month' 'view'
/usr/bin/php archive.php chakrit '-10 month' 'exec'
...
/usr/bin/php archive.php chakrit '-1 month' 'view'
/usr/bin/php archive.php chakrit '-1 month' 'exec'


your folder structure should show below
+.Year2016
 -.Year2016.Jan
 -.Year2016.Feb
 -.Year2016.Mar
 -.Year2016.Apr
 -.Year2016.May
 -.Year2016.Jun
 -.Year2016.Jul
 -.Year2016.Aug
 -.Year2016.Sep
 -.Year2016.Oct
 -.Year2016.Nov
 -.Year2016.Dec
+.Year2017
 -.Year2017.Jan
 -.Year2017.Feb
 
 
 
