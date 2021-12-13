from kivy.lang import Builder
from kivy.base import runTouchApp
from kivy.uix.boxlayout import BoxLayout
from kivy.uix.button import Button
# from kivy.uix.label import Label

Builder.load_string("""

<BoxLayout>:
    orientation:'vertical'
    # orientation:'horizontal'
    size_hint_y: None
    height: dp(150)
    Button:
        text:'nouran'
    Button:
        text:'malak'
    Button:
        text:'mhmd'
    Label:
        text:'engrady is the best'

""")


class MyListView(BoxLayout):
    pass

if __name__== '__main__':
    runTouchApp(MyListView())

# runTouchApp(Builder.load_string("""
# StackLayout:
#     Label:
#         text:'engrady is the best'

#  """))
# class TestApp(App):
#     def build(self):
#         return Label(text='Hello engRdy')
# if __name__=='__main__':
#     TestApp().run()