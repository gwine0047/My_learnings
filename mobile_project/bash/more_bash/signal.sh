#!/bin/bash

SIGNAL="stoploop"

while [[ ! -f "${SIGNAL}" ]]; do
    echo "The file ${SIGNAL} does not yet exist\nchecking again in 2 seconds"
    sleep 2
done
echo "File was found!"