import kivy
# import datetime
from kivy.app import App
# from kivy.base import runTouchApp
from kivy.core.window import Window
# from kivy.properties import StringProperty
# from kivy.lang import Builder
# from kivy.uix.button import Button  
# from kivy.uix.checkbox import CheckBox 
# from kivy.uix.floatlayout import FloatLayout 
# from kivy.uix.image import Image 
# from kivy.uix.label import Label
# from kivy.uix.scatter import Scatter
# from kivy.uix.textinput import TextInput 
Window.clearcolor = (0.15,0.45,0.515,0.30)
Window.size = (400,600)
class PictureApp(App):
    def build(self):
        # self.title='[engrdy] [date]'
        pass

if __name__=='__main__':
    PictureApp().run()