import re
#matching digits
pattern = r"\d"

text = input("Write a text that contains digits: ")
matches = re.findall(pattern, text)
print(matches)
print(f"I count {len(matches)} digits")
