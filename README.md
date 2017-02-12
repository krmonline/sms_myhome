# sms_myhome

##How to use

run as

<code>
/usr/bin/php archive.php username 'month to move' 'view|exec'
</code>
###example

<code>
/usr/bin/php archive.php chakrit 'last month' 'exec'
</code>

There is move email from /home/chakrit/Maildir/cur/* to /home/chakrit/Maildir/.Year2017.Jan/cur/


First you should check with command

<code>
/usr/bin/php archive.php chakrit '-12 month' 'view'
</code>

And then execute with command

<code>
/usr/bin/php archive.php chakrit '-12 month' 'exec'
</code>

###Example command

<code>
/usr/bin/php archive.php chakrit '-12 month' 'view'

/usr/bin/php archive.php chakrit '-12 month' 'exec'

/usr/bin/php archive.php chakrit '-11 month' 'view'

/usr/bin/php archive.php chakrit '-11 month' 'exec'

/usr/bin/php archive.php chakrit '-10 month' 'view'

/usr/bin/php archive.php chakrit '-10 month' 'exec'

...
/usr/bin/php archive.php chakrit '-1 month' 'view'

/usr/bin/php archive.php chakrit '-1 month' 'exec'

</code>


your folder structure should show below

<code>
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
 
 </code>
 
Last you can create crontab like this
0 0 1 * * /usr/bin/php /home/chakrit/archive.php chakrit 'last month' exec

For archive every month
 
 
