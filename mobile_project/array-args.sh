#!/bin/bash

pos=('first' 'second' 'third' 'fourth')

echo "${pos[1]}"

echo "${!pos[@]}" #prints the indexes 0,1,2

echo "${#pos[@]}" #prints number of array

echo "${pos[@]}" # 

echo "What position comes next?:"
read ans
pos[4]=$ans

echo "${pos[@]}"

echo "Select a number to be elimanted"
read elim

case $elim in 
	"first" )
		unset pos[0];;
	"second" )
		unset pos[1];;
	"third" )
		unset pos[2];;
	"fourth" )
		unset pos[3];;
	* )
		echo "Unknown"
esac

echo "${pos[@]}, ;-"
