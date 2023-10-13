import re
#matching urls
pattern = r"https?://\w+\.\w+\.\w+"
#s? : means 's' is optional

text = input("Write a text that contains a url: ")
matches = re.findall(pattern, text)
print(matches)
if (len(matches) <= 1):
    print(f"I count {len(matches)} url")
else:
    print(f"I count {len(matches)} urls")
