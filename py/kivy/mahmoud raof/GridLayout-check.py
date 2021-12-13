# from kivy.app import App
from kivy.lang import Builder
from kivy.base import runTouchApp
# from kivy.uix.boxlayout import BoxLayout
# from kivy.uix.button import Button
# from kivy.uix.label import Label
runTouchApp(Builder.load_string("""
<Button>:
    color: 1, 0, 0, 1
    font_size: 15
    size_hint: .25, .35 
GridLayout:
    # rows:1
    cols:1
    size_hint_x: None
    # width:200
    padding: 20
    spacing: '10dp'
    Button:
        text:'engrdy'
        # size: '70dp','100dp'
        # size_hint: .25, .35 
        # pos_hint: {'x':0,'y': 0} 
        # anchor_x: 'left'
        # anchor_y: 'bottom' 
    Button:
        text:'malak'
        # size: '70dp','100dp'
        # size_hint: .25, .35 
        # anchor_x: 'right'
        # anchor_y: 'bottom' 
        # pos_hint: {'x':.75,'y': .65} 
        # size_hint_x: .5 
        # size_hint_y: .35
        # size_hint_max_x: None
        # size_hint_min_x: None
    Button:
        text:'mhmd'
        #size_hint_x: 1
        # size_hint: .25, .35 
        # anchor_x: 'right'
        # anchor_y: 'top' 
        # pos_hint: {'x':.75,'y': 0} 
        # pos_hint: {'right':1,'bottom': 1} 
        # pos_hint: {'x':.75,'bottom': 1} 
    Button:
        text:'nouran'
        #size_hint_x: .5 
        # size_hint: .25, .35 
        # anchor_x: 'left'
        # anchor_y: 'top' 
        # pos_hint: {'x':0,'y': .65} 
        # pos_hint: {'left':1 ,'top': 1} 
    Button:
        text:'hasan'
    #     #size_hint_x: .5 
    #     # size_hint: .25, .35 
    #     anchor_x:'center'
    #     anchor_y:'center'

        # pos_hint: {'center':1,'center': 1} 
        # pos_hint: {'right':.6,'top': .6} 
        # pos_hint: {'top':.6,'right': .6} 
        # pos_hint: {'left':.95,'bottom': .95} 
    CheckBox:
        size_hint_y: None
        height: '250dp'
        # pos: 200, 0
        active:True
        # pos: '200dp','100dp'
 """))

