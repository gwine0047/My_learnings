#!/bin/bash

mynum=500

if [  $mynum -eq 200  ] #-ne (not equal), gt (greater than), lt (less than)
then
    echo "The condition is true."
else
    echo "The variable is not 200"
fi

if [ -f /home/gwine0047/projects/bash_scripting/helloworld.sh  ] # -f check for file
then                                                             # -d check for directory
    echo "This file exists."                                     # -e
else
    echo "This file does not exist."
fi

# which is to find whether an application or a command is present in a file system.


# RUNNING HTOP
command=htop 
if command -v $command #command -v $command to check for the existence of a command -f to find a file
then
    echo "$command is available, let's run it ..."
else
    echo "$command is NOT available, installing it..."
    sudo apt update && sudo apt install -y $command # -y is to answer yes for prompt during installation
fi

$command #run htop. Remember $command = /bin/bash/htop