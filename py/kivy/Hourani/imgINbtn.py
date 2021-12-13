from kivy.app import App
from kivy.lang import Builder
# from kivy.base import runTouchApp
from kivy.uix.boxlayout import BoxLayout
# from kivy.uix.button import Button
# from kivy.uix.label import Label
Builder.load_string("""
<KivyButton>:
    Button:
        text: "Hello Rady"
        color: 1,1,0,.5
        size_hint: .25, .35
        Image:
            source: "r.jpg"
            center_x: self.parent.center_x
            center_y: self.parent.center_y
            allow_stretch: True
            # allow_stretch: 1
 """)
class KivyButton(App, BoxLayout):
    def build(self):
        return self
if __name__=='__main__':
    KivyButton().run()
# runTouchApp()
