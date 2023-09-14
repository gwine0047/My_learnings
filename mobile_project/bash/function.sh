#!/bin/bash

usage()
{
	echo "You need to providean argument: "
	echo "usage: $0 file_name"
}

is_file()
{
	local file="$1"
	[[  -f "$file"  ]]  && return 0 || return 1
}

[[  $# -eq 0  ]] && usage

if (  is_file "$1")
then
	echo " File found"
else
	echo " File not found"
fi
