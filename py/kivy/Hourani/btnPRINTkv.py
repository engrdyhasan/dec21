# import kivy
# import datetime
# from glob import glob
# from maps import MyMap
# from math import sin, cos, pi
# from os import curdir
# from os.path import join, dirname
# from PIL import image
# from random import randint

# from kivy.animation import Animation
# from kivymd.app import MDApp
from kivy.app import App
# from kivy.base import runTouchApp
# from kivy.clock import Clock
# from kivy.core.image import Image as CoreImage
# from kivy.core.window import Window
# from kivy.core.audio import SoundLoader, Sound
# from kivy.core.window import Window
# from kivy.factory import Factory
# from kivy.graphics import Color, Rectangle, Canvas, ClearBuffers, ClearColor, BindTexture, RenderContext
# from kivy.graphics.fbo import Fbo
# from kivy.garden.mapview import MapView
from kivy.lang import Builder
# from kivy.logger import Logger
# from kivy.properties import ListProperty, ObjectProperty, NumericProperty, StringProperty

# from kivy.uix.accordion import Accordion, AccordionItem
from kivy.uix.boxlayout import BoxLayout
# from kivy.uix.button import Button  
# from kivy.uix.carousel import Carousel
# from kivy.uix.checkbox import CheckBox 
# from kivy.uix.floatlayout import FloatLayout 
# from kivy.uix.image import Image 
# from kivy.uix.label import Label
# from kivy.uix.recycleview import RecycleView
# from kivy.uix.scatter import Scatter
# from kivy.uix.screenmanager import ScreenManager, Screen
# from kivy.uix.scrollview import ScrollView
# from kivy.uix.textinput import TextInput 
# from kivy.uix.widget import Widget
# from kivy.utils import rgba
# ===========
# Window.clearcolor = (0.15,0.45,0.515,0.30)
# Window.size = (400,600)
# class ExampleRV(RecycleView):
#     def __init__(self, **kwargs):
#         super(ExampleRV, self).__init__(**kwargs)
#         self.data = [{'text': str(x)} for x in range(20)]
#  ===============
Builder.load_string('''
<MyLayout>:  
    orientation: 'vertical'
    Label:
        id:mylabel
        text: "rady hassan"
        # color: (1,1,0,1)
    Button:
        text: "Click me"
        # color:(.5,.5,1,1)
        on_press: print(mylabel.text)
''')
class MyLayout(BoxLayout):
    pass
class MyApp(App):
    def build(self):
        return MyLayout()
MyApp().run()
#  =============== 
# class MyApp(App):
#     def build(self):
#         self.box = BoxLayout(orientation='horizontal', spacing=20)
#         self.txt = TextInput(hint_text= 'write here', size_hint=(.5, .1))
#         self.btn = Button(text= 'clear all', on_press=self.clearText,size_hint=(.1, .1))
#         self.box.add_widget(self.txt)
#         self.box.add_widget(self.btn)
#         return self.box

#     def clearText(self, instance):
#         self.txt.text = ''
# MyApp().run()
#  =============== 
# class MyButton(Button):
#     text="Click me"
#     on_press=lambda a : print("engRdy")
# class MyApp(App):
#     def build(self):
#         return MyButton()
# if __name__=='__main__':
#     MyApp().run()
# ===============
# class MyApp(App):
#     def build(self):
#         return Button(text="Welcome to LikeGreek!", pos=(100,50), size_hint = (.25, .18))
# if __name__=='__main__':
#     MyApp().run()
# ============
# Builder.load_string('''
# <ExampleRV>:  
#     viewclass: 'Button'
#     RecycleBoxLayout:
#         # text: 'ScrollView example' 
#         # font_size: 20
#         # size_hint_x: 1.0
#         size_hint_y: None
#         # text_size: self.width, None
#         height: self.minimum_height
#         orientation: 'vertical'
# ''')