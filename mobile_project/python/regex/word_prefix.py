import re
#Matching word prefix

word_prefix = input("Enter the prefix to search for: ")
pattern = fr"^{word_prefix}"
text = input("Enter text: ")

# Matches "The" at the start of the text

matches = re.findall(pattern, text)

if(len(matches) > 0):
    print(f"Match found.\nThe sentence begins wit the word {matches}")

else:
    print("No match found")

