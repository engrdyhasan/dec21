from kivy.app import App
from kivy.core.window import Window
from kivy.uix.image import Image 
# from kivy.uix.textinput import TextInput 
# from kivy.uix.button import Button 
# from kivy.uix.label import Label
Window.clearcolor = (0,100/255.0,0,0)
Window.size = (400,600)
class MyApp(App):
    def build(self):
        # # print("engrady \n is the best \n learn kivy \n rakwan")
        # =====================
        self.title = 'engrdy [First App]'
        # =======[photoscape]===========
        img = Image(
            source='m.jpg',
            size_hint=(0.2, 0.2 ),
            pos_hint={'x':0.4 , 'y':0.4 }
        )
        return img
        
        # return Label (
        #     text='engrady\nis the best',
        #     color = (1,0,1,1),
        #     font_size=33
        # )
        # =========================
        # texo = TextInput(
        #     text='Enter your email',
        #     multiline = False,
        #     font_size=16,
        #     pos_hint={'x': 0.3, 'y': 0.6  },  
        #     size_hint=(0.5, 0.05 )
        # )
        # return texo
        # ========================
        # b1 = Button (
        #     text='Home',
        #     size_hint=(0.3,0.1 ),
        #     font_size='22',
        #     pos_hint={'x':0.3 , 'y':0.10 },
        #     color=(1,1,1,1),
        #     background_color=(0,0,.3,1),
        #     on_press=self.clickyes,
        #     on_release=self.clickno
        # )
        # return b1
    # def clickyes(self, yes):
    #     print('clicked button')
    # def clickno(self, no):
    #     print('release')
        
if __name__=='__main__':
    MyApp().run()