class Human:
    def __init__(self, ears):
        self.eyes = 2
        self.nose = 1
        self.ears = ears

    def eat(self):
        print("I can eat")
    
    def walk(self):
        print("I can walk")
    
    def work(self):
        print("I can work")

class Male(Human): #THIS SUB CLASS IS INHERITING THE FEATURES OF HUMAN CLASS
    def __init__(self, hair, ears):
        self.hair = hair
        super().__init__(ears) #THIS IS NEED TO ACCESS THE ATTRIBUTES OF THE PARENT CLASS IF YOU HAVE YOUT OWN ATTRIBUTE
    def eat(self):
        print("I don't eat that much.")

    def work(self):
        super().work() #THIS HELPS TO ATTACH EXTRA TO ALREADY INHERITED FEATURES
        print("I can really code.")

male_1 = Male("short", 2)
male_1.eat()
print(male_1.hair)
male_1.work()
print(male_1.eyes)

male_2 = Human(22)
print(male_2.nose)
male_2.eat()
print(f"A fish has {male_2.ears} ears")

class Female(Male):

    def __init__(self, hair, ears, bags): #WHEN YOU DEFINE A NEW ATTRIBUTE, YOU MUST PUT IN THE ARGUMENTS INHERITED AND YOUR OWN ARGUMENT IF NEEDED
        super().__init__(hair, ears) #IF YOU INTEND TO USE THE BASE ATTRIBUTES, YOU MUST INCLUDE THE SUPER FUNCTION
        self.bags = bags
        self.shoes = 20000
    def lip(self):
        print("We paint our lips pink or red.")

    def eat(self):
        super().eat()
        print("You kidding?")

female_1 = Female("blonde", 2, 200)
female_1.lip()
female_1.eat()
print(f"I have {female_1.bags} bags")
print(f"I have {female_1.ears} ears")
print("\n**********************************************************\n")
class God:
    def __init__(self, being):
        self.being = being
        print(f"God is {self.being}")
    def power(self):
        print("I can do all things")
class Boy(Human, God):
    pass

boy_1 = Boy("omnipotent")
boy_1.eat()
#print(boy_1.being)
God.power(boy_1)
