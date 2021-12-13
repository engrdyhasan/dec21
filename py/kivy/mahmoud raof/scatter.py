from kivy.app import App
from kivy.lang import Builder
from kivy.base import runTouchApp
# from kivy.uix.boxlayout import BoxLayout
# from kivy.uix.button import Button
# from kivy.uix.label import Label
runTouchApp(Builder.load_string("""
FloatLayout:
    Scatter:
        # size: '200dp','200dp'
        size: 200,200
        # pos: '200dp','200dp'
        pos: 200,200
        # do_rotation: False
        Label:
            text:'engrdy'
            # size: '70dp','100dp'
            # size_hint: .25, .35 
            # pos_hint: {'x':0,'y': 0} 
            # pos_hint: {'left':1,'bottom': 1} 
    
 """))