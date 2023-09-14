class Robot:
    def __init__(self, name = "Godwin"):
        self.__name = name 
#made private. can only be accessed using setters and getters

    def say(self):
        if self.__name:
            print("Hi i am {}".format(self.name))
        else:
            print("I am a robot without a name.")
    #Encapsulation
    #Data encapsulation is uaed to get only private attributes.

    def set_name(self, name):
        self.__name = name

    def get_name(self):
        return self.__name

x = Robot()
Robot.name = "Jude"
y = Robot()

x.name = "Malcom"

print("y.name = {}".format(y.name))
x.say()

print( y.get_name())
y.set_name("Henry")
print(y.get_name())



#Data Abstraction = Data Encapsulation + Data Hiding

#Encapsulation is often accomplished by providing two kinds of methods for attributes: The methods for retrieving or accessing the values of attributes are called getter methods. Getter methods do not change the values of attributes, they just return the values. The methods used for changing the values of attributes are called setter methods.
