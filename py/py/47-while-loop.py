myF = ['a','b','c','d','e','f','g','h','i','j']
a=0
while a < len(myF):
    print(f"#{str(a+1).zfill(2)} : {myF[a]}")
    a+= 1
else:
    print('Done...')