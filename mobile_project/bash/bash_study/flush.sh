#!/bin/bash

shopt -s -o nounset #treat unknown variables as errors
declare -rx SCRIPT=${0##*/} #sets the name of to the currently working script 'flush.sh'

declare -rx who="/usr/bin/who"
declare -rx sync="/bin/sync"
declare -rx wc="/usr/bin/wc"

#sanity check

if test -z $BASH; then
	printf "$SCRIPT:$LINENO: Please run this script with the bash shell\n" >&2
	exit 192
fi

if test ! -x "$who" ; then
	printf "$SCRIPT:$LINENO: The command $who is not available -aborting\n" >&2
	exit 192
fi

if test ! -x "$sync" ; then
	printf "$SCRIPT:$LINENO: The command $sync is not available -aborting\n" >&2
	exit 192
fi

if test ! -x "$wc" ; then
	print "$SCRIPT:$LINENO: The command $wc is not available -aborting\n" >&2
fi

USERS = '$who | wc -l'
if ($USER -eq 0); then
	$sync
fi

exit 0


