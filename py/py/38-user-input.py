# input('hello')
# ============
# fn= input('What\s your first name?')
# mn= input('What\s your med name?')
# ln= input('What\s your last name?')
# fn =fn.strip()
# mn =fn.strip()
# ln =fn.strip()
# print(f"Hello {fn} {mn} {ln} Happy to see u")
# ==================
# fn= input('What\s your first name?')
# mn= input('What\s your med name?')
# ln= input('What\s your last name?')
# print(f"Hello {fn.strip()} {mn.strip()} {ln.strip()} Happy to see u")
# ==================
fn= input('What\s your first name?').strip().capitalize()
mn= input('What\s your med name?').strip().capitalize()
ln= input('What\s your last name?').strip().capitalize()
print(f"Hello {fn} {mn:.1s} {ln} Happy to see u")
