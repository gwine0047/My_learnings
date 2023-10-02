#!/bin/bash

#Color variables
green='\e[32m'
blue='\e[34m'
clear='\e[0m'

ColorGreen()
{
	echo -ne $green$1$clear
}

ColorBlue()
{
	echo -ne $blue$1$clear
}

server_name=$(hostname)

function memory_check()
{
	echo ""
		echo "Memory usage on ${server_name} is: "
		free -h
		echo ""
}

function cpu_check()
{
	echo ""
		echo "CPU load on ${server_name} is:"
		echo ""
		uptime
		echo ""
}

function tcp_check()
{
	echo ""
		echo "TCP connection on ${server_name} is: "
		echo ""
		cat /pro/net/tcp | wc -l
		echo""
		echo ""
}

function kernel_check()
{
	echo ""
		echo "Kernel version of ${server_name} is:"
		echo ""
}

function owner_check()
{
	echo ""
		echo "The user of ${server_name} is :"
		whoami
		echo ""
}

function all_checks()
{
	memory_check
	cpu_check
	tcp_check
	kernel_check
	owner_check
}

menu()
{
	echo -ne "
	My first Menu
	$(ColorGreen '1)') Memory Usage
	$(ColorGreen '2)') CPU load
	$(ColorGreen '3)') Number of TCP connections
	$(ColorGreen '4)') Keenel Version
	$(ColorGreen '5)') check all
	$(ColorGreen '0)') Exit

	$(ColorBlue 'Choose an option:')
	"


	read input

	case $input in
		1) memory_check; menu;;
		2) cpu_check; menu;;
		3) owner_check; menu;;
		4) kernel_check; menu;;
		5) all_checks; menu;;
			0) exit 0;;
			*) echo -e $red"Wrong option."$clear;;
	esac
}
menu
