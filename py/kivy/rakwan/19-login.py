from kivy.app import App
from kivy.core.window import Window
# from kivy.uix.checkbox import CheckBox 
# from kivy.uix.image import Image 
# from kivy.uix.textinput import TextInput 
# from kivy.uix.button import Button 
# from kivy.uix.label import Label
Window.clearcolor = (0.15,0.45,0.515,0.30)
Window.size = (400,600)
class Login(App):
    def build(self):
        self.title='engrdy [LOGIN]'
        pass    
if __name__=='__main__':
    Login().run()