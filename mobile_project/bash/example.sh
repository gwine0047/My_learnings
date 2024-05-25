#!/bin/bash

echo "What is your first name?"
read -r firstname

echo "What is your last name?"
read -r lastname

my_date=${date}
echo "Today ${my_date} ${firstname} ${lastname} came around"