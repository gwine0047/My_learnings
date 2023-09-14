class SchoolMember:
    def __init__(self, name, age):
        self.name = name
        self.age = age

        print("Initializing School member: {}".format(self.name))

    def tell(self):
        print("\nName : {}\nAge : {}".format(self.name, self.age))

class Teacher(SchoolMember):
    def __init__(self, name, age, salary):
        SchoolMember.__init__(self, name, age)
        self.salary = salary
        print("Initialized Teacher: {}".format(self.name))
        print()

    def yell(self):
        SchoolMember.tell(self)
        print("My name is {}.\nI am {} years old\n and i earn €{:d}".format(self.name, self.age, self.salary))

class Student:
    def __init__(self, name, age, marks):
        SchoolMember.__init__(self, name, age)
        self.marks = marks
        print("Registering Student: {}".format(self.name))
        print()

    def yell(self):
        SchoolMember.tell(self)
        print("\nmarks = {:d}".format(self.marks))

t1 = Teacher("Mr John Quake", 43, 63000)
t2 = Teacher("Mrs Robert Hooke", 37, 65000)
t3 = Teacher("Mrs Betty White", 40, 71000)

s1 = Student("Allen Young", 17, 99)
s2 = Student("Alice Sawyer", 15, 97)
s3 = Student("Mary Jane", 16, 98)

members = [t1, t2, t3, s1, s2, s3]
for mem in members:
    mem.yell()

