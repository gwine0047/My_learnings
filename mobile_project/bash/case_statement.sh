#!/bin/bash

echo -e "Enter a character\t: "
read input

case $input in
	[a-z] )
		echo "$input is a lower case letter";;
	[A-Z] )
		echo "$input is a capital letter.";;
	[0-9] )
		echo " $input is a single digit number.";;
	 ? )
		echo "$input is a special character.";;
	* )
		echo "$input is unknown.";;
esac
