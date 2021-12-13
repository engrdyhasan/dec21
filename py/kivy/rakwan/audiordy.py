import kivy
# import datetime
from kivy.app import App
# from kivy.base import runTouchApp
# from kivy.core.audio import SoundLoader, Sound
from kivy.core.audio import SoundLoader
from kivy.core.window import Window
# from kivy.properties import StringProperty
# from kivy.lang import Builder
# from kivy.uix.boxlayout import BoxLayout
# from kivy.uix.button import Button  
# from kivy.uix.carousel import Carousel
# from kivy.uix.checkbox import CheckBox 
# from kivy.uix.floatlayout import FloatLayout 
# from kivy.uix.image import Image 
from kivy.uix.label import Label
# from kivy.uix.scatter import Scatter
# from kivy.uix.screenmanager import ScreenManager, Screen
# from kivy.uix.textinput import TextInput 
# from kivy.utils import rgba
# Window.clearcolor = (0.15,0.45,0.515,0.30)
Window.size = (400,600)
class music(App):
    sound = SoundLoader.load('m.mp3')
    def build(self):
        return Label(text='EngrdyMusic')
    if sound:
        sound.play()
if __name__=='__main__':
    music().run()