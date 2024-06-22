1# Khodam Checker Application
2
3def calculate_khodam(name):
4    # Calculate the total value of the name using the Abjad system
5    total_value = 0
6    for char in name:
7        if char.isalpha():
8            total_value += ord(char) - 96
9
10    # Check if the total value is a multiple of 7
11    if total_value % 7 == 0:
12        return True
13    else:
14        return False
15
16def main():
17    print("Khodam Checker Application")
18    print("----------------------------")
19
20    # Ask the user for their name
21    name = input("Enter your name: ")
22
23    # Check if the user has a khodam
24    if calculate_khodam(name):
25        print(f"Congratulations, {name}! You have a khodam.")
26    else:
27        print(f"Sorry, {name}. You don't have a khodam.")
28
29if __name__ == "__main__":
30    main()