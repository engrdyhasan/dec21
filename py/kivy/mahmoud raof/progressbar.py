# from kivy.app import App
from kivy.lang import Builder
from kivy.base import runTouchApp
# from kivy.uix.boxlayout import BoxLayout
# from kivy.uix.button import Button
# from kivy.uix.label import Label
runTouchApp(Builder.load_string("""
# <  .125, .175 
BoxLayout:
    # orientation: 'vertical'
    padding: 100
    ProgressBar:
        max:100
        value:73
"""))
