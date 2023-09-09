Menu = {
    "latte" : 
    {
        "ingredients" : 
        {
            "water" : 200,
            "milk" : 150,
            "coffee" : 24,
        },
        "cost" : 100,
    },

    "cappuccino" : 
    {
        "ingredients" : 
        {
            "water" : 250,
            "milk" : 150,
            "coffee" : 24,
        },
        "cost" : 200,
    },

    "espresso" : 
    {
        "ingredients" :
        {
            "water" : 50,
            "coffee" : 18,
        },
        "cost" : 100,
    }
}

def check_resources(ingredients):
    for item in ingredients: #item can be used for both ingredients and resources becase they have the same key values
        if ingredients[item] > resources[item]:
            print(f"Sorry, not enough {item}")
            return False
        return True

def process_payment():
    print("Please insert coins.")
    total = 0
    coins_five = int(input("How many 5 kobo coins?: "))
    coins_ten = int(input("How many 10 kobo coins?: "))
    coins_twenty = int(input("How many 20 kobo coins?: "))

    total = (coins_five * 5) + (coins_ten * 10) + (coins_twenty * 20)
    return total

def is_payment(money_recieved, coffee_cost):
    if money_recieved >= coffee_cost:
        global profit
        profit += coffee_cost
        change = money_recieved - coffee_cost
        print(f"Your change is change ${change}")
        return True
    else:
        print(f"${money_recieved} is not enough")
        return False

def make_coffee(coffee_name, ingredients):
    for item in ingredients:
        resources[item] -= ingredients[item]
    print("Here is your coffee \u2615. Enjoy!!!")


profit = 0
resources = {
    "water" : 500,
    "milk" : 200,
    "coffee" :  100,
}

is_on = True
while is_on:
    user_choice = input("What will you like to have? (Latte / Espresso / Cappuccino): ")
    if user_choice == "off":
        is_on = False

    elif user_choice == "report":
        print(f"Water = {resources['water']}ml")
        print(f"Milk = {resources['milk']}ml")
        print(f"Coffee = {resources['coffee']}g")
        print(f"Money = ${profit}")

    else:
        coffee_type = Menu[user_choice]
        print(coffee_type)
        if_resources = check_resources(coffee_type['ingredients'])

        if if_resources:
            payment = process_payment()
            if is_payment(payment, coffee_type['cost']):
                make_coffee(user_choice, coffee_type['ingredients'])
