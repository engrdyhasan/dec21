import kivy
import datetime
from kivy.app import App
# from kivy.base import runTouchApp
# from kivy.core.audio import SoundLoader, Sound
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
Window.clearcolor = (0.15,0.45,0.515,0.30)
Window.size = (400,600)
class DateApp(Label):
    def build(self):
Window.size = (360, 600)
Builder.load_string('''
<MenuPage>: 
    BoxLayout:
        orientation: 'vertical' 
        Label:
            text: "engRdy media player\tdevloper engRdy@ 2021 " 
        Image:
            source: 'm.jpg'                               
        Button:
            text: 'play' 
            on_press: root.play()               
        Button:
            text: 'stop'                
            on_press: root.stop()               
''')
class MenuPage(Screen):
    # S = SoundLoader.load("sdcard\download\m.mp3")
    S = SoundLoader.load("m.mp3")
    def play(self):
        MenuPage.S.play()
        
    def stop(self):
        MenuPage.S.stop()
        
sm = ScreenManager()
menu = MenuPage(name = 'menu')  
sm.add_widget(menu)

class AUDIOrdy(App):
    def build(self):
        self.title='Media Player'
        return sm

if __name__=='__main__':
    AUDIOrdy().run()  
# <Hasan>:  
#     direction: 'left'
#     loop: True
#     Label:
#         text: 'Screen 1'
#     Label:
#         text: 'Screen 2'
#     Label:
#         text: 'Screen 3'
#     Label:
#         text: 'Screen 4'
# class Hasan(Carousel):
#     pass
# class Ali(App):
#     def build(self):
#         return Hasan()

# if __name__=='__main__':
#     Ali().run()
# # runTouchApp(Builder.load_string("""
# # BoxLayout:
# #     # orientation:'vertical'
# #     # padding:50
# #     # spacing: 40
# #     Label:
# #         canvas.before:
# #             Color:
# #                 rgba: 1 , 0 , 0 , 0.22
# #             Rectangle:
# #                 pos: self.pos 
# #                 size:self.size
# #         text: 'Top'
# #         size_hint_y: None
# #         hieght:sp(65)
# #         size_hint_x: None
# #         width:sp(65)
# #         font_size: sp(50)
# #     Label:
# #         canvas.before:
# #             Color: 
# #                 rgba: 1 , 0 , 0 , 0.44
# #             Rectangle:
# #                 pos: self.pos
# #                 size:self.size
# #         text: 'Center'
# #         size_hint_y: None
# #         hieght:sp(65)
# #         font_size: sp(50)
# #     Label:
# #         canvas.before:
# #             Color: 
# #                 rgba: 1 , 0 , 0 , 0.66
# #             Rectangle:
# #                 pos: self.pos
# #                 size:self.size
# #         text: 'Bottom'
# #         size_hint_y: None
# #         hieght:sp(65)
# #         font_size: sp(50)
# # """))
