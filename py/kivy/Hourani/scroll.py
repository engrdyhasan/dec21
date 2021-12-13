# import datetime
# from kivymd.app import MDApp
# from maps import MyMap
from kivy.lang import Builder
# from kivy.core.window import Window
# from kivy.uix.boxlayout import BoxLayout
# from kivy.properties import ObjectProperty
# from kivy.garden.mapview import MapView
# from os import curdir
# import kivy
# from glob import glob
# from random import randint
# from os.path import join, dirname
# from kivy.app import App
from kivy.base import runTouchApp
# from kivy.core.audio import SoundLoader, Sound
# from kivy.core.audio import SoundLoader
# from kivy.core.window import Window
# # from kivy.properties import ObjectProperty
# from kivy.properties import StringProperty
# from kivy.lang import Builder
# from kivy.logger import Logger
# from kivy.uix.accordion import Accordion, AccordionItem
# from kivy.uix.boxlayout import BoxLayout
# from kivy.uix.button import Button  
# from kivy.uix.carousel import Carousel
# from kivy.uix.checkbox import CheckBox 
# from kivy.uix.floatlayout import FloatLayout 
# from kivy.uix.image import Image 
# from kivy.uix.label import Label
# from kivy.uix.scatter import Scatter
# from kivy.uix.screenmanager import ScreenManager, Screen
# from kivy.uix.scrollview import ScrollView
# from kivy.uix.textinput import TextInput 
# from kivy.utils import rgba
# ===========
# Window.clearcolor = (0.15,0.45,0.515,0.30)
# Window.size = (400,600)
root = Builder.load_string(r'''
ScrollView:  
    Label:
        text: 'ScrollView example' * 99
        font_size: 20
        size_hint_x: 1.0
        size_hint_y: None
        text_size: self.width, None
        height: self.texture_size[1]
''')
runTouchApp(root)