#!/bin/bash
#
echo -e "Enter your age for voting validation: \c"
read age

# with one bracket [ "$age" -gt 18 -a "$age" -lt 30 ]
# # with two in row brackets [[ "$age" -gt 18 && "$age" -lt 30 ]]

if [  $age -gt 18  ] && [  $age -lt 100  ]
then
	echo -e "Age is valid.You may vote"
else
	echo -e "Age is invalid."
	echo "You cannot vote cause you are either too young or too old."

fi

# with one bracket [ "$age" -gt 18 -o "$age" -lt 30 ]
# # with two in row brackets [[ "$age" -gt 18 || "$age" -lt 30 ]]

if [  $age -gt 18 -o $age -lt 100  ]
then
	echo "You are eligible to vote."

else
	echo "You are not eligible"

fi
