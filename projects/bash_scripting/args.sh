#!/bin/bash
lines=$(ls -lh $1 | wc -l)

if [  $# -ne 1  ]
then
    echo "You have entered $count argument(s)"
    echo "Please enter exactly one argument / directory path."
    echo "and run again."
    exit 1
fi
echo "You have $(($lines-1)) objects in the $1 directory"

