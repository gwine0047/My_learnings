import re

pattern = r"apple"

text = input("Write a text that contains the word 'apple': ")
matches = re.findall(pattern, text)
print(matches)
print(f"I count {len(matches)} apples")
