from kivy.uix.accordion import Accordion, AccordionItem
from kivy.uix.label import Label
from kivy.app import App
# from kivy.base import runTouchApp
# from kivy.lang import Builder
# from kivy.uix.boxlayout import BoxLayout
# from kivy.uix.button import Button

class Ali(App):
    def build(self):
        root = Accordion()
        for x in range(5):
            # item = AccordionItem(title='Title %d' %x, min_space=35)
            item = AccordionItem(title='Title %d' %x)
            item.add_widget(Label(text='engRdy is the best\n ' *6))
            root.add_widget(item)
        return root

if __name__=='__main__':
    Ali().run()
