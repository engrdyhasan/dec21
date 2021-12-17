admins = ['Ahmed','Osama','Sameh','Manal','Rahma','Mahmoud','Enas']
n = len(admins)
name = input('please type your name:    ').strip().capitalize()
if name in admins:
    print(f' Hello {name} welcome back ')
    print('You are admin')
    option = input("Delete or update your name ?").strip().capitalize()
    print(option)
    if option == 'Update' or option == 'U':
        newName = input("your new name, please ?").strip().capitalize()
        print(newName)
        admins[admins.index(name)] = newName
        print('Name updated')
        print(admins)
    elif option == 'Delete' or option == 'D':
        admins.remove(name)
        print('Name Deleted')
        print(admins)
    else:
        print('Wrong option !')
else:
    print('You are NOT admin')
    status = input("Add you Y,N ?").strip().capitalize()
    if status == "Yes" or  status == "Y":
        print('You are added.')
        admins.append(name)
        print(admins)
    else:
        print('Thank You 4 your pass')
