import re
#matching suffixes

suffix = input("Enter your suffix: ")
pattern = fr"\b\w+{suffix}\b"

text = input("Write a text that contains the suffix supplied: ")
matches = re.findall(pattern, text)
print(matches)
if(len(matches) <= 1):
    print(f"I count {len(matches)} suffix")
else:
    print(f"I count {len(matches)} suffixes")
