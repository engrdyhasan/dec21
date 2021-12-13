from kivy.app import App
# from kivy.base import runTouchApp
from kivy.clock import Clock
# from kivy.core.audio import SoundLoader, Sound
# from kivy.core.window import Window
# from kivy.graphics import Color , Ellipse, Line
# from kivy.lang import Builder
from kivy.lang import Builder
# from kivy.uix.label import Label
# from kivy.uix.widget import Widget
# from kivy.uix.button import Button
# from kivy.core import image
# from kivy.uix.carousel import Carousel
# from kivy.uix.image import AsyncIma ge
# from kivy.uix.boxlayout import BoxLayout
# from kivy.utils import rgba
# from kivy.uix.screenmanager import ScreenManager, Screen
# from random import random
rady = Builder.load_string('''
FloatLayout:
    Scatter: 
        id: scatter
        size_hint:None, None
        # size: 200, 200
        # text: 'engRdy Hassan'
        font_size: dp(70)
        color: 1,2,0.45,1
        pos: root.width/2 - self.width /2, root.height/2 - self.height /2  
        Button:
            text: 'Ali'
''')
class analogClock(App):
    def build(self):
        Clock.schedule_interval(self.rotate, 1 )
        return rady
    def rotate(self, dt):
        rady.ids.scatter.rotation -=6

if __name__=='__main__':
    analogClock().run()
