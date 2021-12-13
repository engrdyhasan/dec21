# import datetime
from os import curdir
import kivy
from glob import glob
from random import randint
from os.path import join, dirname
from kivy.app import App
# from kivy.base import runTouchApp
# from kivy.core.audio import SoundLoader, Sound
# from kivy.core.audio import SoundLoader
from kivy.core.window import Window
# from kivy.properties import ObjectProperty
from kivy.properties import StringProperty
from kivy.lang import Builder
from kivy.logger import Logger
# from kivy.uix.accordion import Accordion, AccordionItem
# from kivy.uix.boxlayout import BoxLayout
# from kivy.uix.button import Button  
# from kivy.uix.carousel import Carousel
# from kivy.uix.checkbox import CheckBox 
# from kivy.uix.floatlayout import FloatLayout 
# from kivy.uix.image import Image 
# from kivy.uix.label import Label
from kivy.uix.scatter import Scatter
# from kivy.uix.screenmanager import ScreenManager, Screen
# from kivy.uix.scrollview import ScrollView
# from kivy.uix.textinput import TextInput 
# from kivy.utils import rgba
Window.clearcolor = (0.15,0.45,0.515,0.30)
Window.size = (400,600)
class Picture(Scatter):
    source = StringProperty(None)
class PicturesApp(App):
    def build(self):
        root = self.root
        # curdir = dirname(sdcard/download/)
        # curdir = dirname('/media/engrdy/zero/github2021/py/kivy/rakwan/galary')
        curdir = dirname(__file__)
        for filename in glob(join(curdir, 'rake', '*')):
            print(filename)
            try:
                picture = Picture(source=filename, rotation=randint(-30,25))
                root.add_widget(picture)
            except Exception as e:
                Logger.exception('Picturs: unable to load <%s>' % filename)
    def on_pause(self):
        return True             

if __name__=='__main__':
    PicturesApp().run()