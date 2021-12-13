# import kivy
# import datetime
from kivy.app import App
from kivy.base import runTouchApp
# from kivy.core.audio import SoundLoader, Sound
# from kivy.core.audio import SoundLoader
from kivy.core.window import Window
from kivy.properties import StringProperty
from kivy.lang import Builder
# from kivy.uix.boxlayout import BoxLayout
# from kivy.uix.button import Button  
# from kivy.uix.carousel import Carousel
# from kivy.uix.checkbox import CheckBox 
# from kivy.uix.floatlayout import FloatLayout 
# from kivy.uix.image import Image 
from kivy.uix.label import Label
# from kivy.uix.scatter import Scatter
# from kivy.uix.screenmanager import ScreenManager, Screen
from kivy.uix.scrollview import ScrollView
# from kivy.uix.textinput import TextInput 
# from kivy.utils import rgba
Window.clearcolor = (0.15,0.45,0.515,0.30)
Window.size = (400,600)
Builder.load_string('''
<Scroll>:
    text:'engrady is the best meneger engineer in the world * 99' * 99
    Label:
        text: root.text
        font_size: 22
        text_size: self.width, None
        size_hint_y: None
        height: self.texture_size[1]
''')
class Scroll(ScrollView):
    text=StringProperty('')
# if __name__=='__main__':
runTouchApp(Scroll())