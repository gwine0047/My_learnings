#!/bin/bash

echo ${BASH_VERSION}

for j in {0..50..5}
do
	echo $j
done

echo -e "TIMES TABLE"
echo -e "Enter a number: "
read num


for i in {1..12}
do
	result=$((num * i))
	echo "$num * $i = $result"
done

for command in ls pwd date
do
	echo "-------------$command---------------$command"
done

echo "########################'xxx"

for item in *
do
	if [  -d item  ]
	then
		echo "$item is a directory."
	else
		echo "$item is a file."
	fi
done
