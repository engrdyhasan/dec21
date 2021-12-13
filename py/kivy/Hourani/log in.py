# import datetime
from re import MULTILINE
import kivy
from kivy.app import App
from kivy.lang import Builder
from kivy.uix.boxlayout import BoxLayout
# from kivy.uix.button import Button
# from kivy.uix.label import Label
# from kivy.base import runTouchApp
# from kivy.core.audio import SoundLoader, Sound
# from kivy.core.audio import SoundLoader
# from kivy.core.window import Window
# from kivy.properties import StringProperty
# from kivy.lang import Builder
# from kivy.uix.boxlayout import BoxLayout
# from kivy.uix.button import Button  
# from kivy.uix.carousel import Carousel
# from kivy.uix.checkbox import CheckBox 
from kivy.uix.gridlayout import GridLayout 
# from kivy.uix.floatlayout import FloatLayout 
# from kivy.uix.image import Image 
from kivy.uix.label import Label
# from kivy.uix.scatter import Scatter
from kivy.uix.screenmanager import ScreenManager, Screen
from kivy.uix.scrollview import ScrollView
from kivy.uix.textinput import TextInput 
# from kivy.utils import rgba
kivy.require("1.10.1")
# Window.clearcolor = (0.15,0.45,0.515,0.30)
# Window.size = (400,600)
Builder.load_string("""
<LoginScreen>:
    f_username: username
    f_password: email
    # f_password: password
    # orientation:'vertical'
    GridLayout:
        rows: 2
        cols: 2
        padding: 10
        spacing: 10
        # orientation:'vertical'
        # Label:
        #     text: "LOGIN-PROGRAM"
        #     font_size: 28
        #     color:1,0,1,1
        #     background_color:0,0,.3,1
        Label:
            text: "USERNAME: "
            color:0,0,1,1
            background_color:(0,0,.3,1)
        TextInput:
            id: 'username'
            text:'ENTER YOUR USERNAME: '
            multiline: False
            size_hint: 1, .9
        Label:
            text: "EMAIL: "
            color:0,0,1,1
            background_color:(0,0,.3,1)
        TextInput:
            id: 'email'
            text:'ENTER YOUR EMAIL: '
            multiline: False
            size_hint: 1, .9
 """)
class KivyButton(App, BoxLayout):
    def build(self):
        return self
if __name__=='__main__':
    KivyButton().run()
