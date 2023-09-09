class Circle:
    pi = 22 / 7
    def __init__(self, radius = 7/2):
        self.radius = radius

    def circumference(self):
        return 2 * self.pi * self.radius #because pi is a class attribute, it can be replaced with Circle.pi
    
    def area(self):
        return self.pi * self.radius * self.radius
circle_1 = Circle()
print(circle_1.circumference())

circle_2 = Circle(7)
print(circle_2.area())

class Rectangle:
    def __init__(self, length, breadth):
        self.length = length
        self.breadth = breadth

    def area(self):
        return self.length * self.length
    
    def perimeter(self):
        return 2 *( self.length + self.breadth)
    
rec_1 = Rectangle(3, 4)
print(rec_1.perimeter())
print(f"The area is {rec_1.area()}")