
digit = input("Enter a two digit number: ")
print("The sum of the first and second digits is " + str(int(digit[0]) + (int(digit[1]))))

# // - flow division
# ** - power

#ARITHMETIC OPERATORS PRECEDENCE, ASSOCIATIVITY 
# ()            R - L
# **            L - R
# *, /, //, %   L - R
# +, -

#ASSIGNMENT OPERATOR
# a = 5 (a is a variable and 5 is  a constant.)
#to use the assignment operator, there must be a variable at the left handside.

# a  = a + 3 is same as a += 2 (just like in C)
# a, b, c = 5, 6, 7 (This is allowed)

#RELATIONAL OPERATOR
# <, >, <=, >=, ==, !=

#LOGICAL OPERATORS
#and, or, not

#BITWISE OPERATORS (these operations work on bits)
# & (and) BOTH TRUE
# | (or) EITHER TRUE
# ^ (XOR) IF BOTH SAME, GIVE ZERO, ELSE 1.
# ~ (NOT (complement)) NEGATION. IT REVERSE BITS (turns zero to 1 and vise versa
# using two's complement) 2's = 1's + 1
#negation of y = -(y + 1)
# << (left shift) 5<<2 = 0101<<2 = 010100 (the first two digits are shifted to the 
#left leaving a void behind the number which will be occupied by zeroes)
#5, when leftshifted, becomes 20. (x<<n = x*2**n)
#>> (right shift) 5>>2 = 0101>>2 = 0001 = 1 (first two discarded)