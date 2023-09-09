#!/bin/bash

log_txt=/home/gwine0047/projects/bash_scripting/job_results.log
#at 15:32 -f /home/gwine0047/projects/bash_scripting/using_at
# atq gives you the detail of a job to be run along with the id
# atrm (id) will stop the job
# at 18:00 09162023 to run at Sept 16 2023
/usr/bin/echo " The script ran at the following time: $(/usr/bin/date)" >>$log_txt

#using the full path cause this job will be run on another distro or run at a time when the
#system does not have access to the regualr shell and might not have access to
#the environment variable. Also for security reason, if a path is not name, there
#is a possibility that there are other files with the same name but are for 
#malicious purpose.

# crontab -e
# service cron status