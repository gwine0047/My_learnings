import re
#matching the length of a word.
pattern = r"\b\w{6}\b"

text = input("Write a text that contains a word with 6 letters: ")
matches = re.findall(pattern, text)
print(matches)
if (len(matches) <= 1):
    print(f"I count {len(matches)} word with six letters")
else:
    print(f"I count {len(matches)} words with six letters")
