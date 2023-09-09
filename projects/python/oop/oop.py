class Instructor: #creating a  class(user defined data type)
    age = 33 #class object variable
    def __init__(self, inst_name, inst_address): #constructor initializes the member or attributes while creating an objrct

        self.name = inst_name
        self.address = inst_address
        self.surname = "Okoeguale" # A default value....doesn't change

    def display(self, subject): #METHOD
        print(f"Hi, I am {self.name} and i teach {subject}")

    def update_age(self):
        self.age+= 1

instructor_1 = Instructor("Godwin", "63, Association avenue, Joy-Hills, Manhattan.") #the init function will be called anytime we create a new object

print(f"My name is {instructor_1.name} {instructor_1.surname}\nI live at {instructor_1.address}")

instructor_2 = Instructor("Bola", "63, Association avenue, Oke-Ayo, Manhattan.")
print(instructor_2.surname)
print(instructor_1.age)
instructor_1.display("Python")
instructor_2.update_age()

print(instructor_2.age)



#When you an object, you can make a constructor using the init function which helps to create
#attributes or members of the objects. The init function takes SELF as the first parameter which
#points to any created object and takes whatever other members you want to include.