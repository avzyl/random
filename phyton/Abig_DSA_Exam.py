import math

print("♡‧₊˚✧˖° Welcome to SuperMart🌷 ♡‧₊˚✧˖°")

# Product list
products = {
    1: {"name": "Cream", "price": 10, "quantity": 10},
    2: {"name": "Coffee Latte", "price": 40, "quantity": 10},
    3: {"name": "Butter", "price": 20, "quantity": 10},
    4: {"name": "Pasta", "price": 50, "quantity": 10},
    5: {"name": "Cookies", "price": 25, "quantity": 10},
    6: {"name": "Cake", "price": 70, "quantity": 10},
    7: {"name": "Noodles", "price": 50, "quantity": 10},
    8: {"name": "Croissant", "price": 20, "quantity": 10},
    9: {"name": "Pancake", "price": 15, "quantity": 10},
    10: {"name": "Waffle", "price": 45, "quantity": 10}
}

# Dictionary to store selected items and quantities
cart = {}

# View cart
def view_cart():
    if not cart:
        print("There are no products in the cart.")
    else:
        print("Current items in the cart:")
        for item, quantity in cart.items():
            print(f"{products[item]['name']} - Quantity: {quantity}")

# Add to cart
def add_to_cart(limit):
    if len(cart) >= limit:
        print("The limit of products has been reached.")
        return

    item_number = int(input("Enter item number: "))

    if item_number not in products:
        print("Invalid item number. Please select a valid item number.")
        return

    quantity = int(input(f"Enter quantity for {products[item_number]['name']}: "))

    if quantity < 1 or quantity > products[item_number]['quantity']:
        print("Invalid quantity. Please enter a valid quantity.")
        return
    
    if quantity > 10:
        print("Quantity exceeds the limit (10). Order discarded.")
        return

    cart[item_number] = cart.get(item_number, 0) + quantity
    print(f"{quantity} {products[item_number]['name']} added to the cart.")

# Checkout
def checkout(customer_type):
    total_amount = 0

    print("\nReceipt:")
    print("----------------------------------------------------")
    print("{:<15} {:<10} {:<15}".format('Item', 'Quantity', 'Total Price'))

    # Remove orders with quantity exceeding 10
    for item in list(cart.keys()):
        if cart[item] > 10:
            print(f"Order for {products[item]['name']} with quantity {cart[item]} discarded.")
            del cart[item]

    for item, quantity in cart.items():
        item_name, price, _ = products[item].values()
        total_price = price * quantity
        total_amount += total_price
        print("{:<15} {:<10} {:<15}".format(item_name, quantity, total_price))

    # Apply discount based on customer type
    if customer_type == 'ADULT':
        discount = 0
    elif customer_type == 'STUDENT':
        discount = 0.10
    elif customer_type == 'SENIOR':
        discount = 0.20
    else:
        print("Invalid customer type. No discount applied.")
        discount = 0

    discounted_total_amount = total_amount - (total_amount * discount)

    print("----------------------------------------------------")
    print("Total amount before discount: {} Pesos".format(total_amount))
    print("Total amount after discount for {}: {} Pesos".format(customer_type, discounted_total_amount))

    # Print remaining products and quantities
    print("\nRemaining products and quantities:")
    for item, info in products.items():
        remaining_quantity = info['quantity'] - cart.get(item, 0)
        if remaining_quantity > 0:
            print(f"{info['name']} - {remaining_quantity}")

# Main function
def main():
    limit = 10

    while True:
        print("\nProduct List")
        print("----------------------------------------------------")
        d = {
            1: ["Cream", 10, 10],
            2: ["Coffee Latte", 10, 40],
            3: ["Butter", 10, 20],
            4:["Pasta", 10, 50],
            5:["Cookies", 10, 25],
            6:["Cake", 10, 70],
            7:["Noodles", 10, 50],
            8:["Croissant", 10, 20],
            9:["Pancake", 10, 15],
            10:["Waffle", 10, 45] 
        }
            
        print ("{:<8} {:<15} {:<10} {:<10}".format('Item #','Name','Quantity','Price (Pesos)'))
        for k, v in d.items():
            name, quantity, price = v
            print ("{:<8} {:<15} {:<10} {:<10}".format(k, name, quantity, price))
            
        print("----------------------------------------------------")
        
        print("\nOptions:")
        print("1. Add to Cart")
        print("2. View Cart")
        print("3. Checkout")
        print("4. Quit")

        choice = input("Enter your choice (1/2/3/4): ")

        if choice == "1":
            add_to_cart(limit)
        elif choice == "2":
            view_cart()
        elif choice == "3":
            customer_type = input("Enter customer type (ADULT/STUDENT/SENIOR): ").upper()
            checkout(customer_type)
            break  # Exit the loop after checkout
        elif choice == "4":
            print("Goodbye!")
            break
        else:
            print("Invalid choice. Please select a valid option (1/2/3/4).")

if __name__ == "__main__":
    main()
