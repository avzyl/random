# Create unique letters in the alphabet
unique_letters = set('abcdefghijklmnopqrstuvwxyz')
print("Unique Letters:", unique_letters)

#Sample Set
set1 = {1, 2, 3, 4, 5, 6, 8, 11}
set2 = {4, 5, 6, 7, 8, 9, 10}

# Intersection
set3 = set1.intersection(set2)
print("Intersection:", set3)

# Difference
diff = set1.difference(set2)
print("Difference:", diff)

# Sort
def sort_set_elements(my_set):
    return sorted(my_set)
print("Sorted:", sort_set_elements(unique_letters))

# Remove set element
def rse(my_set):
    return set()
print("Remove Set Elements:", rse(unique_letters))
