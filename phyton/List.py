# List of all even nums from 1 to 100
even = [num for num in range(2, 101, 2)]
print("Even numbers from 1 to 100:", even)

# Take list of numbers and returns the average
numbers = [2, 4, 7, 3, 23]
def average(numbers):
    return sum(numbers) / len(numbers)
print("Average:", average(numbers))

# Longest string
fruits = ["apple", "strawberry", "avocado", "cherry"]
def longest_string(fruits):
    return max(fruits, key=len)
print("Longest string:", longest_string(fruits))

# Duplicates removed
nums = [2, 4, 7, 3, 23, 25, 23, 26, 27, 23, 45, 69, 74, 90]
def remove_duplicates(nums):
    return list(set(nums))
print("Original list:", nums)
print("Removed duplicates:", remove_duplicates(nums))

# Reversed string
strings = ["lyzza", "rose", "santiago", "abig", "mingae"]
def reverse_strings(strings):
    return [string[::-1] for string in strings]
print("Reversed string:", reverse_strings(strings))
