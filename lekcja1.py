a = int(input("podaj a:"))
b = int(input("podaj b:"))

for licz in range(a,b+1):
    if(licz % 3 == 0):
        print(licz)