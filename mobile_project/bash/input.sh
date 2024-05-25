#!/bin/bash

# takes input from the user and assigns it to variable.
echo "Whats is your first name?"
read -r firstname

echo "Enter your last name"
read -r lastname

echo "Thank you ${firstname} ${lastname}. Welcome to my humble abode!\nToday = $(date)"