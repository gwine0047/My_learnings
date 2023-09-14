class Robot:
    population = 0

    def __init__(self, name):
        self.name = name
        print("Initialising {}".format(self.name))
        Robot.population += 1

    def sleep(self):
        print("{} is being put to sleep".format(self.name))
        Robot.population -= 1
        
        if Robot.population == 0:
            print("I am the last Robot and i am going sleep.")
        else:
            print("There are still {:d} Robot left".format(Robot.population))

    def say_hi(self):
        print("Greetings, you can call me {}".format(self.name))

    @classmethod
    def how_many(cls):
        print("We have {:d} Robots".format(cls.population))

r2 = Robot("R2-D2")
r1 = Robot("C-3PO")
r3 = Robot("Wall-e")
r4 = Robot("Tin-man")
r1.say_hi()

Robot.how_many()
r2.sleep()
Robot.how_many
