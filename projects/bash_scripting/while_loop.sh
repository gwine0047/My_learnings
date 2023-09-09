#!/bin/bash
myvar=1

while [  $myvar -le 10  ]
do
    echo $myvar
    myvar=$(($myvar + 1))
    sleep 0.1
done

while [ -f /home/gwine0047/projects/bash_scripting/testfile  ]
do
    sleep 3
    echo "As of $(date), the test file exist"
done
    echo "As of $(date), the test file does not exist"

#you can use this script to check if a file ever goes missing and have it send you an alert