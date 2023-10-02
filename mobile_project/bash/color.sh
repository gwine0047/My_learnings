green='\033[0;32m'
blue='\033[0;34m'
yellow='\033[3;33m'

clear='\033[0m'


ColorGreen()
{
	echo -ne $green$1$clear
}
ColorBlue(){
		echo -ne $blue$1$clear
}

echo -ne $(ColorBlue 'Some text here')
echo -e "${yellow}Your text in a color similar to #fbad00${clear}"

