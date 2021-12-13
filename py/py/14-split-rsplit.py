print('I am the\b best'); print('I am \
  Rady')
print("I love back slash\"")
print("I love back slash\\")
print("I love\n Line feed")
print('Carriage return\rABC')
print('Escape \'single\' quotes')
print("Escape \"DOUBLE\" quotes")
print("Horizontal\tTab")
# CHARACTER Hex value
print("\x4F\x73")
# *************[14-split]***************
a = "today is sunday, the ten's of October 2021"
print(type(a))
print(a.split())
print(a.rsplit())
print(type(a.split()))
print(type(a.rsplit()))
b = "My-work-is-near-my-home.-I-walk-to-my-hospital-with-my-brother"
print(b.split("-"))
print(b.split("-", 4))
print(b.rsplit("-", 4))
# *********************[14-center()]**************************
# print(repate('*' * 11))
print("*" * 10)
e = "engRdy"
# print(e.repeate(11))
print(e * 10)
print(e.center(10)) # skpaces
print(e.center(10, "#")) # hashes
# *********************[14-count]********************
f =  "hamdy saad folowed abdelkhaleq to war hassaan and his team, and"
print(f.count(""))
print(f.count(" "))
print(f.count("and"))
print(f.count("and", 55))
print(f.count("and",0, 55))
# ************************[14-swapcase]*****************************
print(e.swapcase())
print(f.swapcase())
# ************************[14-startswith]*****************************
print(e.startswith("E"))
print(f.startswith("h"))
print(f.startswith("h", 5))
# ************************[14-endwith]*****************************
print(e.endswith("E"))
print(f.endswith("h"))
print(f.endswith("h", 5))
# ************************[15-endwith]*****************************
a = "today is sunday, the ten's of October 2021"
print(a.index("b",33,44))
print(a.find("a",33,44))
# ************************[15-rjust]*****************************
print(e.rjust(10))
print(e.rjust(10, "@"))
# ************************[15-ljust]*****************************
print(e.ljust(10))
print(e.ljust(10, "@"))
# ************************[15-slitlines()]*****************************
c = """First line
Second line
Third line
"""
print(c)
print("*" * 10)
print(c.splitlines())
d = "First line\nSecond line\nThird line"
print(d.splitlines())
# ************************[15-expandtabs()]*****************************
g = "Today\tis\twednesday,\tI\tam\tabsent\tas\tI\thave\tto\tgo\tto\tAlexBank\tto\timpels\tbooks\tlevies"
print(g)
print(g.expandtabs(2))
print(g.expandtabs(20))
# ************************[15-ISTITLE]*****************************
H = "Tomorrow I Will Talk To Yossri"
i = "i must finish the lead case"
print(H.istitle())
print(i.istitle())
print(H.islower())
print(i.islower())
j = ""
k = " "
print(j.isspace())
print(k.isspace())
print("*" * 19)
# ************************[15-isidentifier]*****************************
l= "eng_rdy"
m= "eng_rdy235"
n= "eng--rdy"
print(l.isidentifier())
print(m.isidentifier())
print(n.isidentifier())
print("*" * 19)
# ************************[15-endwith]*****************************
o= "drnouraan"
p= "drnouraan2033"
print(o.isalpha())
print(p.isalpha())
print("*" * 19)
print(o.isalnum())
print(p.isalnum())
# ************************[16-replace]*****************************
print(p.replace("dr", "Dr. "))
print(p.replace("r", " R ", 2))
# ************************[16-join(Iterable)]*****************************
rdytool = ["B","sass","pug","jQuery","vue","Electron"]
print("- ".join(rdytool))
print(" ".join(rdytool))
print(" , ".join(rdytool))
print(" / ".join(rdytool))
print(type("-".join(rdytool)))
# ************************[17- srtring-formating]*****************************
print("*" * 11)
# %s => string
# %d => Number
# %f => float
name = "engrdy";age = 53; rank = 10
print("my name is: %.3s and my age is: %.3d as my rank is: %f"%(name, age, rank))
print("^" * 11)
n = "engrdy";l = "python"; y = 10
print("my name is %s Iam %s Devloper with %.2f years exp"%(n, l, y))
# ************************[15-endwith]*****************************
# ************************[15-endwith]*****************************
# ************************[15-endwith]*****************************