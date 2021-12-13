import kivy
from kivy.app import App
# from kivy.base import runTouchApp
from kivy.core.window import Window
# from kivy.lang import Builder
# from kivy.uix.button import Button 
from kivy.uix.checkbox import CheckBox 
from kivy.uix.floatlayout import FloatLayout 
# from kivy.uix.image import Image 
from kivy.uix.label import Label
from kivy.uix.scatter import Scatter
# from kivy.uix.textinput import TextInput 
Window.clearcolor = (0.15,0.45,0.515,0.30)
Window.size = (400,600)
class Float(App):
    def build(self):
        self.title='[engrdy] [DRAG app]'
        f= FloatLayout()
        s= Scatter()
        f.add_widget(s)
        l = Label(text='ENGRDY ALI HASAN', font_size=22)  
        s.add_widget(l)
        return f

if __name__=='__main__':
    Float().run()