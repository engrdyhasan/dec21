# ************************[17- srtring-formating-old way]*****************************
# {:s} => String
# {:d} => Number
# {:f} => Float
# ******************
print("*" * 11)
# %s => string
# %d => Number
# %f => float
# name = "engrdy";age = 53; rank = 10
# print("my name is: %.3s and my age is: %.3d as my rank is: %f"%(name, age, rank))
# print("^" * 11)
# n = "engrdy";l = "python"; y = 10
# print("my name is %s Iam %s Devloper with %.2f years exp"%(n, l, y))
# # ************************[18- srtring-formating-new way]*****************************
name = "engrdy";age = 53; rank = 10
print("my name is: {} and my age is: {} as my rank is: {}".format(name, age, rank))
print("^" * 11)
n = "engrdy";l = "python"; y = 10
print("my name is {:.4s} Iam {:.2s} Devloper with {:.2f} years exp".format(n, l, y))
# ************************[18- format money]*****************************
money = 9874563210 
print("My money in bank is : {}".format(money))
print("My money in bank is : {:d}".format(money))
print("My money in bank is : {:,}".format(money))
print("My money in bank is : {:,d}".format(money))
print("My money in bank is : {:_d}".format(money))
# ************************[18]*****************************
a,b,c = "eng", "rady", "hasan"
print("Hello {} {} {}".format(a, b,c))
print("Hello {2} {0} {1}".format(a, b,c))
# ************************[18]*****************************
x,y,z = 10, 20,30
print("Hello {} {} {}".format(x,y,z))
print("Hello {1} {0} {2}".format(x,y,z))
print("Hello {1:d} {0:d} {2:d}".format(x,y,z))
print("Hello {1:.2f} {0:.3f} {2:f}".format(x,y,z))
# ************************[18-format in version 3.6+]*****************************
myname = "engrdy"
myage = 53
print("My name is: {myname} and my age is: {myage}")
print(f"My name is: {myname} and my age is: {myage}")
# ************************[19- ]*****************************
# ************************[20- ]*****************************
print("*" * 22)
print(2021//7)
print(2021//49)

