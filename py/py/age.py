age = int(input('inter your age in years    ').strip())
unit = input('choose your favorite unit: Months(or m), Weeks(or w), Day(or d), Hour(or h), minutes(or i), seconds(or s) ').strip()
m = age * 12
w = age * 52
d = age * 365.25
h = d * 24
i = h * 60
s = i * 60

print('You have lived for:')
if unit == 'monthes'|'m':
    print(f'{m} monthes.')
elif unit == 'Weeks' or 'w':
    print(f'{w:,} weeks.')
elif unit == 'days d':
    print(f'{d:,} days.')
elif unit == 'hour h':
    print(f'{h:,} hours.')
elif unit == 'minutes i':
    print(f'{i:,} minutes.')
# else unit == 'seconds s':
else :
    print(f'{s:,} seconds.')
