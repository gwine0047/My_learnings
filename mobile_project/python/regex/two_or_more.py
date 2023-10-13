import re
#matching two or more words

words = input("Enter the words to search for: ")
text = input("Enter a text that contains the words you want to search for: ")
pattern = fr"{words}"  
matches = re.findall(pattern, text)

length = len(matches)
if(length  < 1):
    print(f"No match found.")

else:
    print(f"{length} matches found\n {matches}")

