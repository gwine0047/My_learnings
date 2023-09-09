class Human():
    def __init__(self, sense_organs):
        print("calling init from Human")
        self.eyes = 2
        self.toes = 10
        self.sense_organs = sense_organs

    def eat(self):
        print("I have mouth to eat")

    def walk(self):
        print("I have a pair of limbs to walk")

class Male:
    def __init__(self, name):
        print("Calling init from male")
        self.name = name
    
    def flirt(self):
        print("I can flirt")

    def walk(self):
        print("I have legs to walk")

class Boy(Human, Male): #BOY CLASS INHERITING FROM MULTIPLE PARENTS - HUMAN AND MALE
#AS DEFAULT, BOY IS ABLE TO ACCESS THE ATTRIBUTES OF HUMAN(1ST arg passed) BUT NOT OF MALE, TO ACCESS BOTH, DO
    def __init__(self, name, language, sense_organs):
        self.language = language
        Human. __init__(self, sense_organs)
        Male. __init__(self, name)

    def sleep():
        print("I don't sleep alot")

    def walk(self):
        print("I have boys' legs to walk")
    
boy_1 = Boy("Jim", "German", 5) #here cause boy has Human as 1st arg, it does not take any argument. if i put Male as 1st para, an arg will be required
Male.flirt(boy_1) 
print(boy_1.eyes)

#WHENEVER A CLASS INHERITS FROM MULTIPLE CLASSES, THERE IS AN ORDER OF ACCESS IT TAKES. ITSELF -> FIRST PARAMETER -> 2ND PARAMETER AND SO ON
#IF I TRY TO PRINT WALK, THE CLASS PRINTS FROM ITSELF
boy_1.walk() # I have boys' legs to walk

#TO ACESS THE WALK FUNCTION IN EITHER HUMAN OR MALE, DO:
Male.walk(boy_1) #I have legs to walk
Human.walk(boy_1) # I have a pair of limbs to walk

print(f"I have {boy_1.toes} toes")
print(f"Hi my name is {boy_1.name}. I have {boy_1.sense_organs} sense organs and can speak {boy_1.language}")