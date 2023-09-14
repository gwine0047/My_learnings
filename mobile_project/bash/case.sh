#!/bin/bash

echo "Who is the best player in the world?: "
read player

case $player in
	"Lewandoski" )
		echo "You must be a Barca fan.";;

	"Benzema" )
		echo "You must be a Madrid fan";;
	"Haaland" )
		echo "You are a City fan.";;
	"Mbappe" )
		echo "You must be a PSG fan.";;
	* )                                             echo "You have to be kiding me. ";;
esac

