#!/bin/bash
# $? gives the exit code of a recently run command

package=nono

sudo apt install $package >> package_install_results.log

if [  $? -eq 0  ]
then
    echo "Installation of $package is successful."
    echo "The new command is available here:"
    which $package
else
    echo "Package failed to install." >> package_install_failure.log
fi