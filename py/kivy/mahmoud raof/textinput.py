from kivy.app import App
from kivy.lang import Builder
# from kivy.base import runTouchApp
# from kivy.uix.boxlayout import BoxLayout
# from kivy.utils import rgba
# from kivy.uix.button import Button
# from kivy.uix.label import Label
Hasan = '''
AnchorLayout:
    TextInput:
        size_hint: None, None
        size: 400, 100
        text: 'engRdy is the best'
        use_bubble: True
        use_handles: True
        password: False 
        readonly:True
'''
class Ali(App):
    def build(self):
        return Builder.load_string(Hasan)

if __name__=='__main__':
    Ali().run()
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
