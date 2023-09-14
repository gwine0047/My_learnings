#!/bin/bash

echo -e "Enter file name: \n"
read filename

if [  -f $filename  ]
then
	if [  -w $filename  ]
	then
		echo "Enter your text and press ctrl + d to exit."
		cat >> $filename
		echo "$filename updated."
	else
		echo "The file hasno write permission."
	fi
else
	echo "$filename does not exist.!"
fi
