from kivy.uix.popup import Popup
from kivy.uix.button import Button
from kivy.app import App
from kivy.lang import Builder
# from kivy.clock import Clock
# from kivy.uix.label import Label
# from kivy.uix.widget import Widget
# from kivy.graphics import Color , Ellipse, Line
# from random import random
# from kivy.core import image
# from kivy.uix.carousel import Carousel
# from kivy.uix.image import AsyncIma ge
# from kivy.uix.boxlayout import BoxLayout
# from kivy.base import runTouchApp
# from kivy.utils import rgba

Builder.load_string('''
<CustomPopup>: 
    size_hint:.2, .2
    title: 'engRdy Hassan'
    Button:
        text: 'Click me'
        on_press: root.dismiss()
''')
class CustomPopup(Popup):
    pass
class RunApp(App):
    def build(self):
        b = Button(text='Enter', size_hint=(0.2, 0.1), pos_hint={'center_x':0.5 , 'center_y': 0.2},on_press=self.Show_popup)
        return b
    def Show_popup(self, b):
        p = CustomPopup()
        p.open()

if __name__=='__main__':
    RunApp().run()

# class MyPaintWidget(Widget):
#     def on_touch_down(self, touch):
#         rdyclr = (random(), random(), random())
#         with self.canvas:
#             Color(*rdyclr)
#             t = 100
#             Ellipse(pos=(touch.x - t/2, touch.y - t/2), size=(t,t))
#             touch.ud['Line'] = Line(points=(touch.x, touch.y))
#     def on_touch_move(self, touch):
#         # return super().on_touch_move(touch)
#         touch.ud['Line'].points +=[touch.x, touch.y]

# class MyPintApp(App):
#     def build(self):
#         p = Widget()
#         p2 = MyPaintWidget()
#         clearbtn = Button(text='Clear')

#         p.add_widget(p2)
#         p.add_widget(clearbtn)

#         def clear_canvas(obj):
#             p2.canvas.clear()
#         clearbtn.bind(on_release=clear_canvas)

#         return p

# if __name__=='__main__':
#     MyPintApp().run()
    # direction: 'left'  
    # loop: True
    # Label:
    #     text: 'Screen 1'
    # Label:
    #     text: 'Screen 2'
    # Label:
    #     text: 'Screen 3'
    # Label:
    #     text: 'Screen 4'

# runTouchApp(Builder.load_string("""
# BoxLayout:
#     # orientation:'vertical'
#     # padding:50
#     # spacing: 40
#     Label:
#         canvas.before:
#             Color:
#                 rgba: 1 , 0 , 0 , 0.22
#             Rectangle:
#                 pos: self.pos 
#                 size:self.size
#         text: 'Top'
#         size_hint_y: None
#         hieght:sp(65)
#         size_hint_x: None
#         width:sp(65)
#         font_size: sp(50)
#     Label:
#         canvas.before:
#             Color: 
#                 rgba: 1 , 0 , 0 , 0.44
#             Rectangle:
#                 pos: self.pos
#                 size:self.size
#         text: 'Center'
#         size_hint_y: None
#         hieght:sp(65)
#         font_size: sp(50)
#     Label:
#         canvas.before:
#             Color: 
#                 rgba: 1 , 0 , 0 , 0.66
#             Rectangle:
#                 pos: self.pos
#                 size:self.size
#         text: 'Bottom'
#         size_hint_y: None
#         hieght:sp(65)
#         font_size: sp(50)
# """))
