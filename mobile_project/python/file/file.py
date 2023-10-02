f = open("workfile", "rb+")
f.write(b'0123456789abcdef')

one = f.seek(5)
print(one)
print()
one = f.seek(1)
print(one)
one = f.seek(-3, 2)
print(one)
print()
one = f.read(1)
print(one)
print
