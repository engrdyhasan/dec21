age = int(input('inter your age in years    ').strip())
unit = input('choose your favorite unit: Months(or m), Weeks(or w), Day(or d), Hour(or h), minutes(or i), seconds(or s) ').strip().lower()
m = age * 12
w = age * 52
d = age * 365.25
h = d * 24
i = h * 60
s = i * 60

print('#' * 80)
print(" You can write the full name or the (first) litter of the time unit ".center(80, "#"))
print('#' * 80)
print('You have lived for:')
if unit == 'monthes' or unit == 'm':
    print(f'{m} monthes.')
elif unit == 'weeks' or unit == 'w':
    print(f'{w:,} weeks.')
elif unit == 'days'  or unit == 'd':
    print(f'{d:,} days.')
elif unit == 'hours' or unit == 'h':
    print(f'{h:,} hours.')
elif unit == 'minutes' or unit == 'i':
    print(f'{i:,} minutes.')
# else unit == 'seconds s':
else :
    print(f'{s:,} seconds.')
