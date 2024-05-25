#!/bin/bash

FILE="output.txt"

touch "${FILE}"
until [[ -s "${FILE}" ]]; do
    echo "$FILE is empty...\nI will check again in 3 seconds"
    sleep 3
done
echo "${FILE} is no longer empty!\nThe file contains:\n"
cat "${FILE}"