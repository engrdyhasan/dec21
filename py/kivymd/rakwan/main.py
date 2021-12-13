# import datetime
from kivymd.app import MDApp
# from maps import MyMap
from kivy.lang import Builder
from kivy.core.window import Window
# from kivy.uix.boxlayout import BoxLayout
# from kivy.properties import ObjectProperty
# from kivy.garden.mapview import MapView
# ===========

# from os import curdir
# import kivy
# from glob import glob
# from random import randint
# from os.path import join, dirname
# from kivy.app import App
# from kivy.base import runTouchApp
# from kivy.core.audio import SoundLoader, Sound
# from kivy.core.audio import SoundLoader
# from kivy.core.window import Window
# # from kivy.properties import ObjectProperty
# from kivy.properties import StringProperty
# from kivy.lang import Builder
# from kivy.logger import Logger
# from kivy.uix.accordion import Accordion, AccordionItem
# from kivy.uix.boxlayout import BoxLayout
# from kivy.uix.button import Button  
# from kivy.uix.carousel import Carousel
# from kivy.uix.checkbox import CheckBox 
# from kivy.uix.floatlayout import FloatLayout 
# from kivy.uix.image import Image 
# from kivy.uix.label import Label
# from kivy.uix.scatter import Scatter
# from kivy.uix.screenmanager import ScreenManager, Screen
# from kivy.uix.scrollview import ScrollView
# from kivy.uix.textinput import TextInput 
# from kivy.utils import rgba
# ===========
# Window.clearcolor = (0.15,0.45,0.515,0.30)
Window.size = (400,600)
navigation_helper = """
Screen:  
    NavigationLayout:
        # x: toolbar.height
        ScreenManager:
            id: screen_manager
            Screen: 
                # name: "scr 1"
                BoxLayout:
                    orientation: 'vertical'
                    # size_hint_x: 1   
                    # size_hint_y: 0.9
                    MDToolbar:
                        # id: toolbar
                        # pos_hint: {"top": 1}
                        # elevation: 10
                        title: "MDNavigationDrawer"
                        # left_action_items: [["menu", lambda x: nav_drawer.set_state("open")]]
                        left_action_items: [['menu', lambda x: nav_drawer.toggle_nav_drawer()]]
                    Widget:
        MDNavigationDrawer:
            id: nav_drawer
            BoxLayout:
                    orientation: 'vertical'
                    Image:
                        source: 'z.jpg'
                    MDLabel:
                        text: "engrhassan2007@gmail.com"
                        font_style: 'Caption'
                        size_hint_y: None
                        height: self.texture_size[1]
                    ScrollView:
                        MDList:
                            OneLineIconListItem:
                                text: "Profile"
                                IconLeftWidget:
                                    icon: 'gift-outline'
                                # on_press:
                                #     root.nav_drawer.set_state("close")
                                #     root.screen_manager.current = "scr 1"
                            OneLineIconListItem:
                                text: "UserInfo"
                                IconLeftWidget:
                                    icon: 'gift-outline'
                                # on_press:
                                #     root.nav_drawer.set_state("close")
                                #     root.screen_manager.current = "scr 2"
                            OneLineIconListItem:
                                text: "Upload"
                                IconLeftWidget:
                                    icon: 'gift-outline'
                            OneLineIconListItem:
                                text: "Download"
                                IconLeftWidget:
                                    icon: 'gift-outline'
                            OneLineIconListItem:
                                text: "Logout"
                                IconLeftWidget:
                                    icon: "gmail"
                                    badge_icon: "numeric-10"
"""
class NavigationDrawerApp(MDApp):
    def build(self):
        screen = Builder.load_string(navigation_helper)
        return screen

if __name__== '__main__':    
    NavigationDrawerApp().run()