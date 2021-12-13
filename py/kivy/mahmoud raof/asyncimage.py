from kivy.app import App
# from kivy.core import image
from kivy.uix.carousel import Carousel
from kivy.uix.image import AsyncImage
# from kivy.lang import Builder
# from kivy.uix.boxlayout import BoxLayout
# from kivy.base import runTouchApp
# from kivy.utils import rgba
# from kivy.uix.button import Button
# from kivy.uix.label import Label
class CarouselApp(App):
    def build(self):
        c =  Carousel(direction= 'left', loop= True)
        for i in range(10):
            # src = "http://placehold.it/480x270.png& text=Slide- %d" %i
            src = "r.jpg& text=slide- %d" %i
            # src = "r.jpg" 
            image = AsyncImage(source = src, allow_stretch=False)
            c.add_widget(image)
        return c
CarouselApp().run()
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
