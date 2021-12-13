from kivy.app import App
from kivy.lang import Builder
from kivy.base import runTouchApp
# from kivy.uix.boxlayout import BoxLayout
# from kivy.uix.button import Button
# from kivy.uix.label import Label
runTouchApp(Builder.load_string("""
AnchorLayout:
    canvas:
        Color:  
            rgba:1,3,1,1
        Rectangle:
            pos:self.pos        
            size:self.size        
            # pos:100, 100        
            # size:100,100  
    AsyncImage:
        size_hint: None, None
        # size: '56dp','56dp' 
        # size: dp(56),dp(56) 
        size: dp(156),dp(156) 
        # source:'https://raw.githubusercontent.com/kivy/kivy/master/kivy/data/logo/kivy-icon-256.png'  
        source:'r.jpg'  
        anim_delay:0.03333333   
 """))
