#!/bin/bash

# Experimenting with the status codes

# Bash commands return status codes, which indicate whether the
# execution of the command succeeded. Status codes fall in the 0–255
# range, where 0 means success, 1 means failure, 126 means that the 
# command was found but is not executable, and 127 means the
# command was not found. The meaning of any other number depends 
# on the specific command being used and the logic it uses.

ls -l > /dev/null
echo "The status code of the ls command was: $?"

lzl 2> /dev/null
echo "The status code of the non-existing lzl command was: $?"

# We use the special variable $? with the echo command to 
# return the status codes of the executed commands ls and lzl. We 
# also redirect their standard output and standard error streams to the 
# file /dev/null, a special device file that discards any data sent to it. 
# When you want to silence commands, you can redirect their output to it.

# Use /dev/null with caution. You may miss out on important errors if you 
# choose to redirect output to it. When in doubt, redirect standard streams 
# such as standard output and standard error to a dedicated log file instead.
