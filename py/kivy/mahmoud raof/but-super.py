# from kivy.uix.boxlayout import BoxLayout
from kivy.uix.floatlayout import FloatLayout
from kivy.app import App
from kivy.uix.button import Button
# from kivy.lang import Builder
# from kivy.base import runTouchApp
# from kivy.uix.label import Label
class Hasan(FloatLayout):
    def __init__(self, **kwargs):
        super(Hasan, self).__init__(**kwargs)
        
        button =  Button(text ='Drmalak', color=(.9,.8,0,1), font_size=10, pos_hint={'x': .9, 'y': .8}, size_hint=(.1,.1))
        self.add_widget(button)
        button =  Button(text ='Drnour', color=(.9,.5,0,1), font_size=10, pos_hint={'x': .7, 'y': .8}, size_hint=(.1,.1))
        self.add_widget(button)
        button =  Button(text ='Drmhmd', color=(.9,.1,0,1), font_size=10, pos_hint={'x': .1, 'y': .8}, size_hint=(.1,.1))
        self.add_widget(button)

class Ali(App):
    def build(self): 
        return Hasan()

if __name__=='__main__':
    Ali().run()

# runTouchApp(Builder.load_string("""

# FloatLayout:
#     Button:
#         text:'engrdy'
#         # size: '70dp','100dp'
#         size_hint: .25, .35 
#         # pos_hint: {'x':0,'y': 0} 
#         pos_hint: {'left':1,'bottom': 1} 
#     Button:
#         text:'malak'
#         # size: '70dp','100dp'
#         size_hint: .25, .35 
#         pos_hint: {'x':.75,'y': .65} 
#         # size_hint_x: .5 
#         # size_hint_y: .35
#         # size_hint_max_x: None
#         # size_hint_min_x: None
#     Button:
#         text:'mhmd'
#     #     size_hint_x: 1
#         size_hint: .25, .35 
#         # pos_hint: {'x':.75,'y': 0} 
#         pos_hint: {'right':1,'bottom': 1} 
#         # pos_hint: {'x':.75,'bottom': 1} 
#     Button:
#         text:'nouran'
#     #     size_hint_x: .5 
#         size_hint: .25, .35 
#         # pos_hint: {'x':0,'y': .65} 
#         pos_hint: {'left':1 ,'top': 1} 
#     Button:
#         text:'hasan'
#     #     size_hint_x: .5 
#         size_hint: .2, .2 
#         # pos_hint: {'center':1,'center': 1} 
#         # pos_hint: {'right':.6,'top': .6} 
#         pos_hint: {'top':.6,'right': .6} 
#         # pos_hint: {'left':.95,'bottom': .95} 


#  """))
#  ---------------------

# runTouchApp(Builder.load_string("""
# StackLayout:
#     Label:
#         text:'engrady is the best'

#  """))
# Builder.load_string("""

# <BoxLayout>:
#     orientation:'vertical'
#     # orientation:'horizontal'
#     Button:
#         text:'nouran'
#     Button:
#         text:'malak'
#     Button:
#         text:'mhmd'

# """)


# class MyListView(BoxLayout):
#     pass

# if __name__== '__main__':
#     runTouchApp(MyListView())

# class TestApp(App):
#     def build(self):
#         return Label(text='Hello engRdy')
# if __name__=='__main__':
#     TestApp().run()