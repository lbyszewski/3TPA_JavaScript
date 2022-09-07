n = int(input("podaj n: "))
def fibb(n):
        if(n <3):
            return 1
        else:
            return  fibb(n-2) + fibb(n-1)

print(fibb(n))