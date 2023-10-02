class ShortInputExceptions(Exception):
    def __init__(self, length, atleast):
        exception.__init__(self)
        self.length = length
        self.atleast = atleast

text = input('Enter something: ')
try:
    if len(text) > 3:
        raise ShortInputExceptions(len(text), 3)

except EOFError:
    print("Why use an EOF-> ({})?".format(text))

except KeyboardInterrupt:
    print("You just canceled the operation with ({})".format(text))
else:
    print("You entered ({})".format(text))
