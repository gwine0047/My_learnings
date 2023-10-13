import re
#matching digits format eg dates or phone number
pattern = r"\d{2}-\d{2}-\d{4}"

text = input("Write a text that contains a date format: ")
matches = re.findall(pattern, text)
print(matches)
if (len(matches) <= 1):
    print(f"I count {len(matches)} date pattern")
else:
    print(f"I count {len(matches)} date patterns")
