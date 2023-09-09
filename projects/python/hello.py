def f(a, L=[]):
    L.append(a)
    return L

print(f(1))
print(f(4))
print(f(8))
print ("************************")

def p(a, L=None):
    if L is None:
        L = []
    L.append(a)
    return L
print(p(1))
print(p(4))
print(p(8))
