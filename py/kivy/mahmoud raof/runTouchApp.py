from kivy.lang import Builder
from kivy.base import runTouchApp
from kivy.uix.label import Label
runTouchApp(Builder.load_string("""
StackLayout:
    Button:
        color:1,2,0
        text:'engrady is the best maneger engineer in the world'
    Label:
        text:'engrady is the best'
 """))