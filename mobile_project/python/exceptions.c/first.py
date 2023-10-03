try:
    text = input('say something: ')
except EOFError:
    print("Why enter an EOF?")

except KeyboardInterrupt:
    print("You canceled the operation")
else:
    print("You entered {}".format(text))

