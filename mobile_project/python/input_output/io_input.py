import string

def reverse (str):
    return str[: : -1]

def is_palindrome(str):
    return str == reverse(str)

text = input("Enter text: ")
t_text = text.translate(str.maketrans('', '', string.punctuation + ' '))
l_text = t_text.lower()
print(l_text)

if is_palindrome(l_text):
    print("It's palindrome\n")
else:
    print("Not a palindrome text\n")
