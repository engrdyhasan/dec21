# clear()
user = {
    "name":"engrdy"
}
print(user)
user.clear()
print(user)
print("user" * 3)
# update()
user = {
    "name":"engrdy"
}
print(user)
user["age"] = 53
print(user)
user.update({"country": "Egypt"})
print(user)

