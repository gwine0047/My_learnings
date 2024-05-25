#!/bin/bash

for index in $(seq 1 10); do
    if [[ "${index}" -eq 5 ]]; then
        index="This is 5"

    elif [[ "${index}" == 6 ]]; then
        echo "6 will be skipped"
        continue
    fi
    echo "${index}"
done

# for file in $(ls .); do
#     echo "File: ${file}"
# done