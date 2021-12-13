# import kivy
# import datetime
# from glob import glob
# from maps import MyMap
# from math import sin, cos, pi
# from os import curdir
# from os.path import join, dirname
# from PIL import image
# from random import randint, random
from random import random

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
# from kivy.graphics import Color,Ellipse Rectangle, Canvas, ClearBuffers, ClearColor, BindTexture, RenderContext
from kivy.graphics import Color,Ellipse, Line
# from kivy.graphics.fbo import Fbo
# from kivy.garden.mapview import MapView
# from kivy.lang import Builder
# from kivy.logger import Logger
# from kivy.properties import ListProperty, ObjectProperty, NumericProperty, StringProperty

# from kivy.uix.accordion import Accordion, AccordionItem
# from kivy.uix.boxlayout import BoxLayout
from kivy.uix.button import Button  
# from kivy.uix.carousel import Carousel
# from kivy.uix.checkbox import CheckBox 
# from kivy.uix.floatlayout import FloatLayout 
# from kivy.uix.gridlayout import GridLayout 
# from kivy.uix.image import Image 
# from kivy.uix.label import Label
# from kivy.uix.popup import Popup
# from kivy.uix.recycleview import RecycleView
# from kivy.uix.scatter import Scatter
# from kivy.uix.screenmanager import ScreenManager, Screen
# from kivy.uix.scrollview import ScrollView
# from kivy.uix.textinput import TextInput 
from kivy.uix.widget import Widget
# from kivy.utils import rgba
# ===========
# Window.clearcolor = (0.15,0.45,0.515,0.30)
# Window.size = (400,600)
# class ExampleRV(RecycleView):
#     def __init__(self, **kwargs):
#         super(ExampleRV, self).__init__(**kwargs)
#         self.data = [{'text': str(x)} for x in range(20)]
#  ===============
class MyPaintW(Widget):
    def on_touch_down(self, touch):
        # color=(random(), random(), random())
        with self.canvas:
            Color(random(), random(), random())
            d = 44
            Ellipse(pos=(touch.x - d/2, touch.y - d/2), size=(d,d))
            touch.ud['line'] = Line(points=(touch.x, touch.y))
            
    def on_touch_move(self, touch):touch.ud['line'].points += [touch.x, touch.y]
        
class MyApp(App):
    def build(self):
        parent = Widget()
        self.painter = MyPaintW()
        clearbtn = Button(text='Clear')
        clearbtn.bind(on_release=self.clear_canvas)
        parent.add_widget(self.painter)
        parent.add_widget(clearbtn)
        return parent
    def clear_canvas(self, obj):
        self.painter.canvas.clear()
if __name__=='__main__':
    MyApp().run()
#  ===============
# class LoginScreen(GridLayout):
#     def __init__(self, **kwargs):
#         super(LoginScreen, self).__init__(**kwargs)
#         self.cols = 2

#         self.add_widget(Label(text='User Name'))
#         self.username = TextInput(multiline=False)
#         self.add_widget(self.username)

#         self.add_widget(Label(text='password'))
#         self.password = TextInput(password=True, multiline=False)
#         self.add_widget(self.password)
# class MyApp(App):
#     def build(self):
#         return LoginScreen()
# if __name__=='__main__':
#     MyApp().run()
#  ===============
# items = [
#     {"color":(1, 1, 1, 1), "font_size": "16sp", "text": "white", "input_data": ["some", "random", "data"]},
#     {"color":(.5, 1, 1, 1), "font_size": "20sp", "text": "lightblue", "input_data": [1, 6, 3]},
#     {"color":(.5, .5, 1, 1), "font_size": "30sp", "text": "blue", "input_data": [64, 16, 9]},
#     {"color":(.5, .5, .5, 1), "font_size": "40sp", "text": "gray", "input_data": [8766, 13, 6]},
#     {"color":(1, .5, .5, 1), "font_size": "50sp", "text": "orange", "input_data": [9, 4, 6]},
#     {"color":(1, 1, .5, 1), "font_size": "60sp", "text": "yellow", "input_data": [852, 958, 123]}
# ]
# class MyButton(Button):
#     def print_data(self, data):
#         print(data)
# KV='''
# <MyButton>:  
#     on_release: root.print_data(self.input_data)
# RecycleView:
#     data:[]
#     viewclass: "MyButton"
#     RecycleBoxLayout:
#         orientation: 'vertical'
#         default_size_hint: 1, None
# '''
# class MyApp(App):
#     def build(self):
#         root = Builder.load_string(KV)
#         root.data = [item for item in items]
#         return root
# MyApp().run()
#  ===============
# Builder.load_string('''
# <SimpleButton>:  
#     on_press: self.fire_popup()
#     # orientation: 'vertical'
# <SimplePopup>:
#     id:pop
#     size_hint: .4, .4
#     auto_dismiss: False
#     title: "rady hassan"
#     # color: (1,1,0,1)
#     Button:
#         text: "Click me to dismiss"
#         # color:(.5,.5,1,1)
#         on_press: pop.dismiss()
# ''')
# class SimplePopup(Popup):
#     pass
# class SimpleButton(Button):
#     text='Fire popup !'
#     def fire_popup(self):
#         pops=SimplePopup()
#         pops.open()

# class MyApp(App):
#     def build(self):
#         return SimpleButton()
# MyApp().run()
#  ===============
# class MyLayout(BoxLayout):
#     def printMe(self):
#         print(self.ids.mylabel.text)
# class MyApp(App):
#     def build(self):
#         self.load_kv('myApp.kv')
#         return MyLayout()
# MyApp().run()
#  ===============
# Builder.load_string('''
# <MyLayout>:  
#     orientation: 'vertical'
#     Label:
#         id:mylabel
#         text: "rady hassan"
#         # color: (1,1,0,1)
#     Button:
#         text: "Click me"
#         # color:(.5,.5,1,1)
#         on_press: print(mylabel.text)
# ''')
# class MyLayout(BoxLayout):
#     pass
# class MyApp(App):
#     def build(self):
#         return MyLayout()
# MyApp().run()
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