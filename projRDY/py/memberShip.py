myCountry = input('choose your countr: "Yemen", "Somalia", "Mauritania","Djibouti", "Comoros", "Pylistin","Egypt", "Sudan", "Algeria","Tunisia", "Morocco","Syria","Jordan","Lebanon","Iraq","Oman", "Qatar", "U.A.Emirates","Bahrain", "Kuwait","KSA","Another":   ').strip().title()

country1 = ['Yemen', "Somalia", "Mauritania","Djibouti", "Comoros", "Pylistin"]
Discount1 = 60
country2 = ['Egypt', "Sudan", "Algeria","Tunisia", "Morocco","Syria","Jordan","Lebanon","Iraq"]
Discount2 = 40
country3 = ['Oman', "Qatar", "U.A.Emirates","Bahrain", "Kuwait","KSA"]
Discount3 = 20
Discount4 = 10
# print(country3.index[5])
# print(country3.count)
# print(country3.count())
# print(count(country3))
# myCountry = yourCountry
# myCountry = "Egypt"
if myCountry in country1:
    print(f'You have Discount equal to ${Discount1} ')
elif myCountry in country2:
    print(f'You have Discount equal to ${Discount2} ')
elif myCountry in country3:
    print(f'You have Discount equal to ${Discount3} ')
else :
    print(f'You have Discount equal to ${Discount4} ')
