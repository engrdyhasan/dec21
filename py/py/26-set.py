# # SET 	
# # ----------------
# # [1] Enclosed in curly braces
# # [3] NOT orderd ,NOT indexED ,can NOT clising
# # [4] ImMutable =>can NOT add, delete, edit
# # [5] unique - we can not repeate items
# # [6] CAN have defferent data types
# # -----------------------
# from typing import Union


# rdyset = {"a","b", 9}
# print(rdyset)
# # rdyset = {"a","b", 9, [1,2,3]}TypeError: unhashable type: 'list'
# rdyset = {"a","b", 9, (1,2,3)}
# print(rdyset)
# print('@' * 22)
# # clear()
# a = {1,2,3}
# print(a)
# a.clear()
# print(a)
# print('@' * 22)
# # Union()
# a = {1,2,3}
# b = {4,5,6}
# print(b | a)
# print(a | b)
# print(b.union(a))
# print(a.union(b))
# print('@' * 22)
# # add()
# a.add(7)
# a.add(8)
# print(a)
# print('@' * 22)
# # copy()
# c= a.copy()
# print(a)
# print(c)
# a.add(9)
# print(a)
# print(c)
# print('@' * 22)
# # remove(x)
# a.remove(9)
# # a.remove(19)
# print(a)
# print('@' * 22)
# # discard()
# a.discard(8)
# a.discard(9)
# print(a)
# print('@' * 22)
# pop()
a = {1,2,3,4,5}
print(a.pop())
print('@' * 22)
# update()
d ={6,7,8}
a.update(d)
print(a)
print('@' * 22)
# print('@' * 22)
# print('@' * 22)

