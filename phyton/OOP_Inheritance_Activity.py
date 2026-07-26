class Vehicle:
    def __init__(self, make, model, year):
        self.make = make
        self.model = model
        self.year = year
        
    def start(self):
        print("The", {self.make}, {self.model}, "is starting.")
    
    def stop(self):
        print("The", {self.make}, {self.model}, "has stopped.")
        
    def accelerate(self):
        print("The", {self.make}, {self.model}, "is accelerating.")
        
    def brake(self):
        print("The", {self.make}, {self.model}, "is braking.")
    
class Car(Vehicle):
    def __init__(self, make, model, year, num_doors):
        Vehicle.__init__(self, make, model, year)
        self.num_doors = num_doors
        
    def details(self):
        print("Details:")
        print(f"Brand: {self.make}")
        print(f"Model: {self.model}")
        print(f"Year: {self.year}")
        print(f"Number of doors: {self.num_doors}")
        
class Truck(Vehicle):
    def __init__(self, make, model, year, bed_length, bed_width):
        Vehicle.__init__(self, make, model, year)
        self.bed_length = bed_length
        self.bed_width = bed_width
        
    def details(self):
        print()
        print("Details:")
        print(f"Brand: {self.make}")
        print(f"Model: {self.model}")
        print(f"Year: {self.year}")
        print(f"Bed Length: {self.bed_length}")
        print(f"Bed Width: {self.bed_width}")
    
class Motorcycle(Vehicle):
    def __init__(self, make, model, year, engine_size, num_wheels):
        Vehicle.__init__(self, make, model, year)
        self.engine_size = engine_size
        self.num_wheels = num_wheels
        
    def details(self):
        print()
        print("Details:")
        print(f"Brand: {self.make}")
        print(f"Model: {self.model}")
        print(f"Year: {self.year}")
        print(f"Bed Length: {self.engine_size}")
        print(f"Bed Width: {self.num_wheels}")
        
class Bicycle(Vehicle):
    def __init__(self, make, model, year, frame, gears):
        Vehicle.__init__(self, make, model, year)
        self.frame = frame
        self.gears = gears
        
    def start(self):
        print(f"The {self.make} {self.model} is running")
        
    def details(self):
        print()
        print("Details:")
        print(f"Brand: {self.make}")
        print(f"Model: {self.model}")
        print(f"Year: {self.year}")
        print(f"Frame Type: {self.frame}")
        print(f"Gears: {self.gears}")
        
        
car = Car("Toyota", "Hilux", 2015, 4)
car.details()
car.start()
car.accelerate()

truck = Truck("Ford", "F-150", 2019, "8 feet", "5 feet")
truck.details()
truck.accelerate()
truck.stop()

motorcycle = Motorcycle("Honda", "CBR500R", 2021, "500cc", 2)
motorcycle.details()
motorcycle.start()
motorcycle.accelerate()

bicycle = Bicycle("Cannondale", "Trail 7.1", 2022, "SmartForm C3 alloy", 8)
bicycle.details()
bicycle.start()
bicycle.brake()



        
        