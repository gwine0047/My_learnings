#!/bin/bash
finished=0
while [  $finished -ne 1  ]
do
    echo "Please select a distro: "

    echo "1 - Arch"
    echo "2 - CentOs"
    echo "3 - Debian"
    echo "4 - Mint"
    echo "5 - Ubuntu"
    echo "6 - Others"
    echo "7 - Exit the script"
    echo " "
    read distro;

    case $distro in
        1) echo "Arch is a rolling release.";;
        2) echo "CentOs is popular on servers";;
        3) echo "Debian is a community distribution";;
        4) echo "Mints is popular on desktops and laptops.";;
        5) echo "Ubuntu is popular on both servers and computers";;
        6) echo "There are many distributions out there.";;
        7) finished=1;;
        *) echo "You didn't enter a valid choice"
    esac
done
echo "Thank you for using the script."
