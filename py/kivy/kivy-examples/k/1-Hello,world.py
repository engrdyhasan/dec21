from kivy.app import App 
from kivy.uix.label import Label

class MyApp(App):
	def build(self):
		return Label(text='engRdy is the best')
		# return super().build()

if __name__== '__main__':
	MyApp().run()