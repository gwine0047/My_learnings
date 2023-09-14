#!/bin/bash

echo -e "Enter the filename\n"
read filename

if [  -e $filename  ]
then
	echo "$filename found."
else
	echo "$filename not found."
fi

if [  -f $filename  ]
then
	echo "$filename is a file."
else
	echo "$filename is not a file."
fi


if [  -d $filename  ]
then
	echo "$filename is a directory."
else
	echo "$filename is not a direcotry."
fi

# character special file (like .txt AKA file which contains some texts or data) ----> -c
# # binary file(block special file) (like picture, video and etc) ----> -b

if [ -b $file_name ]
then
	echo "$file_name is a binary file"
else
	echo "$file_name is not a binary file"
fi

if [ -c $file_name ]
then
	echo "$file_name is a character special file"
else
	echo "$file_name is not a character special file"
fi

# -s flag check that file is empty or n

if [ -s $file_name ]
then
	echo "$file_name contains some data"
else
	echo "$file_name is empty"
fi
# -r check read permision
#-w check write permision
# -x check execute permison
if [ -r $file_name ]
then
	echo "$file_name is a readable file"
else
	echo "$file_name is not a readable file"
fi

if [ -w $file_name ]
then
	echo "$file_name is a writable file"
else
	echo "$file_name is not a writable file"
fi

if [ -x $filename  ]
then
	echo "$filename is an executable file."
else
	echo "$filename is not an executalble file."
fi
