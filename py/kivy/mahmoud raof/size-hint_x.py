from kivy.lang import Builder
from kivy.base import runTouchApp
# from kivy.uix.boxlayout import BoxLayout
# from kivy.uix.button import Button
# from kivy.uix.label import Label
runTouchApp(Builder.load_string("""

BoxLayout:
    Button:
        text:'engrdy'
        # size: '70dp','100dp'
        # size_hint: .25, .35 
        size_hint_x: .5 
        # size_hint_y: .35
        # size_hint_max_x: None
        # size_hint_min_x: None
    Button:
        text:'mhmd'
        size_hint_x: 1
    Button:
        text:'nouran'
        size_hint_x: .5 

 """))
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