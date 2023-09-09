#!/bin/bash

count=0
for num in {3..10..3}
do
    echo "num[$count] is: $num"
    count=$(($count + 1))
    sleep .5
done

for file in logfiles/*.log
do
    tar -czvf $file.tar.gz $file #create a (zip) compressed file
done
#find out how to uncompress the files too