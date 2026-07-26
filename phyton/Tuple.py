#Primary colors
primary_colors = ('red', 'green', 'blue')
print("Primary Colors:", primary_colors)

# Sum of all elements
sum_ex = (1, 2, 3, 4, 5)
sum_result = sum(sum_ex)
print("Sum:", sum_result)

#Number of elements
count = len(sum_ex)
print("Count:", count)

# Reverse
tuples = ('z', 'a', 'd', 'f', 'g', 'e', 'e', 'k')
rev_string = ''.join(tuples)[::-1]
rev_tuples = tuple(rev_string)
print("Original tuple:", tuples)
print("Reversed tuple:", rev_tuples)

# Task 5
def sort_tuple_elements(my_tuple):
    return tuple(sorted(my_tuple))
print("Sorted Tuple:", sort_tuple_elements(primary_colors))
