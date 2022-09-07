a = int(input("podaj a: "))
b = int(input("podaj b: "))
d = int(input("podaj d: "))
for liczba in range (a,b+1):
    if(liczba % d == 0 ):
        print(liczba)