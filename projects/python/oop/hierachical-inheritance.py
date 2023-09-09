class Human:
    def __init__(self, name, age):
        print("******init form Human class*****")
        self.name = name
        self.age = age
        self.meal = "Burger"
    
    def eat(self):
        print(f"My favourite meal is {self.meal}")

    def show(self):
        print(f"Name: {self.name}\nAge = {self.age}")

class Male(Human):
    def __init__(self, M_name, M_age, location):
        print("******init form Male class*****")
        Human. __init__(self, M_name, M_age)
        self.location = location

    def sleep(self):
        print(f"I do not sleep a lot at {self.location}")

class Female(Human):
    def __init__(self, name, age, can_cook):
        print("******init form Female class*****")
        super(). __init__(name, age)
        self.know_cooking = can_cook

    def show_f(self):
        Human.show(self)
        print("\nThis above was borrowed from the Human show method")
    def code(self):
        print("I do code a lot")

female_1 = Female("Joan", 32, True)
female_1.show()
female_1.show_f()

male_1 = Male('John', 33, 'Hotels')
male_1.sleep()