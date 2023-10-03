def powerSum(power, *args):
    total = 0
    for i in args:
        total += pow(i,power)
        print()
        print(total)

powerSum(2, 3, 5)
