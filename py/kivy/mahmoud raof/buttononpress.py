from kivy.app import App
from kivy.lang import Builder
# from kivy.base import runTouchApp
# from kivy.uix.boxlayout import BoxLayout
# from kivy.uix.button import Button
# from kivy.uix.label import Label
# runTouchApp(Builder.load_string("""
Rady = """
<Button>:
    color: .8, .2, 0, 1
    font_size: 50
    size_hint: .35, .25
    pos_hint:{'center_x': .5, 'center_y': .5}
BoxLayout:
    orientation:'vertical'
    CheckBox:
        group: 'a'
        active: True
    CheckBox:
        id: Ch
        group: 'a'
    Button:
        text:'Yes'    
        on_press: Ch.active = True
    Button:
        text:'No'    
        on_press: Ch.active = False
"""
class Ali(App):
    def build(self):
        return Builder.load_string(Rady)

if __name__=='__main__':
    Ali().run()
# ==============================
# runTouchApp(Builder.load_string("""

# BoxLayout:
#     orientation:'vertical'
#     # orientation:'horizontal'
#     spacing: 10
#     padding: 50
#     Button:
#         text:'nouran'
#     Button:
#         text:'malak'
#     Button:
#         text:'mhmd'
# """))
# =============================

# --------------------------
# 
#  ---------------------

# runTouchApp(Builder.load_string("""
# StackLayout:
#     Label:
#         text:'engrady is the best'

#  """))
# Builder.load_string("""

# <BoxLayout>:
#     orientation:'vertical'
#     # orientation:'horizontal'
#     Button:
#         text:'nouran'
#     Button:
#         text:'malak'
#     Button:
#         text:'mhmd'

# """)



# class MyListView(BoxLayout):
#     pass

# if __name__== '__main__':
#     runTouchApp(MyListView())

# class TestApp(App):
#     def build(self):
#         return Label(text='Hello engRdy')
# if __name__=='__main__':
#     TestApp().run()
# ***********************
