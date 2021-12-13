from PIL import image
# import kivy
# import datetime
# from glob import glob
# from os import curdir
# from os.path import join, dirname
# from maps import MyMap
# from random import randint
# from kivymd.app import MDApp
from kivy.app import App
# from kivy.base import runTouchApp
# from kivy.core.window import Window
# from kivy.core.audio import SoundLoader, Sound
# from kivy.core.window import Window
# from kivy.garden.mapview import MapView
from kivy.lang import Builder
# from kivy.logger import Logger
# from kivy.properties import ObjectProperty
# from kivy.properties import ObjectProperty
# from kivy.properties import StringProperty
# from kivy.uix.accordion import Accordion, AccordionItem
# from kivy.uix.boxlayout import BoxLayout
# from kivy.uix.button import Button  
# from kivy.uix.carousel import Carousel
# from kivy.uix.checkbox import CheckBox 
# from kivy.uix.floatlayout import FloatLayout 
# from kivy.uix.image import Image 
# from kivy.uix.label import Label
from kivy.uix.recycleview import RecycleView
# from kivy.uix.scatter import Scatter
# from kivy.uix.screenmanager import ScreenManager, Screen
# from kivy.uix.scrollview import ScrollView
# from kivy.uix.textinput import TextInput 
# from kivy.utils import rgba
# ===========
# Window.clearcolor = (0.15,0.45,0.515,0.30)
# Window.size = (400,600)
Builder.load_string('''
<ExampleRV>:  
    viewclass: 'Button'
    RecycleBoxLayout:
        # text: 'ScrollView example' 
        # font_size: 20
        # size_hint_x: 1.0
        size_hint_y: None
        # text_size: self.width, None
        height: self.minimum_height
        orientation: 'vertical'
''')
class ExampleRV(RecycleView):
    def __init__(self, **kwargs):
        super(ExampleRV, self).__init__(**kwargs)
        self.data = [{'text': str(x)} for x in range(20)
            ]
        
class MyApp(App):
    def build(self):
        return ExampleRV()
if __name__=='__main__':
    MyApp().run()
# runTouchApp(root)