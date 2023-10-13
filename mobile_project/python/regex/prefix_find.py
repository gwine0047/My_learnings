import re
#matching prefixes

prefix = input("Enter your prefix: ")
pattern = fr"\b{prefix}\w+\b"

text = input("Write a text that contains the prefix supplied: ")
matches = re.findall(pattern, text)
print(matches)
if(len(matches) <= 1):
    print(f"I count {len(matches)} prefix")
else:
    print(f"I count {len(matches)} prefixes")
