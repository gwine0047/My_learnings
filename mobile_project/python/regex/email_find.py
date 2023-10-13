import re

#matching email address
pattern = r"\b[\w.-]+@[\w.-]+\.\w+\b"
#\b :is a word anchor. Makes sure patterns start and end at word boundaries.

#[\w.-] :matches the local part of the email address before the "@" symbol.

#\w: Matches word characters like letters, digits, underscores
#.- :matches literal dot and hyphen symbols.

#+ :indicates one or more of the above character should be matched.

#@: matches the "@" symbol that separates the local part of the address from the domain.

#\[w.-]: is similar to the local part. Matches the domain part of the email address.

#\.: This matches a literal period (.) character, separating the domain name from the top-level domain (TLD).TLD standd for Top-Level Domain

#\w+: This matches one or more word characters, representing the TLD (e.g., .com, .org, .net).

#\b: Another word boundary anchor to ensure the pattern ends at a word boundary.

#This regular expression is a relatively simple way to match common email address patterns, but it may not catch all edge cases due to the complexities of email address validation. Email address validation can be quite intricate, and more robust patterns are often used in real-world applications.

text = input("Write a text that contains email addresses: ")
matches = re.findall(pattern, text)
print(matches)
print(f"I count {len(matches)} email addresses")
