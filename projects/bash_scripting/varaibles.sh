#!/bin/bash
first="Godwin"
last="Okoeguale"
Age=33
num1=12
num2=60
echo my name is $first $last and I am $Age years old.

expr $num1 + $num2
num3=(expr$num1\*$num2)
echo "$num1 * $num2 is $num3"