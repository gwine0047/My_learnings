import re
#matching ipv4 addresses
pattern = r"\b\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}\b"

text = input("Write a text that contains an Ipv4 address: ")
matches = re.findall(pattern, text)
print(matches)
if (len(matches) <= 1):
    print(f"I count {len(matches)} ip")
else:
    print(f"I count {len(matches)} ips")
