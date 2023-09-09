#!/bin/bash

directory=/etco

if [  -d $directory  ] #Always check your exit code of your intended command before any other command
then
    echo "The exit code for this script is $?"
    echo "The $directory directory exists."

else
    echo "The exit code for this script is $?"
    echo "The $directory directory does not exists."
fi

#you can also force an exit code on a program successful or not
#THIS IS THE PROPER WAY TO WRITE THE ABOVE

if [  -d $directory  ] #Always check your exit code of your intended command before any other command
then
    echo "The $directory directory exists."
    exit 0
else
    echo "The $directory directory does not exists."
    exit 1
fi