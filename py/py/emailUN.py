n = input('What\'s your name?')
e = input('What\'s your email?')

un = e[:e.index('@')]
website = e[e.index('@')+1:]

print(f"Hello {n} Your email is {e}")
print(f"Your username is {un} and your website is {website}")