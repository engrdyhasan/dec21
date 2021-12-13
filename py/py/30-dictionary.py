user = {
	"name":"engrdy", 
	"age":53, 
	"country":"Egypt", 
	"skills":["python", "kivy", "tkinter"], 
	"rating":10.5, 
}
print(user)
print(user["country"])
print(user.get("country"))
print(user.keys())
print(user.values())

languages ={
	"js": {
		"js21": "30%",
		"Dom": "25%"
	},
	"python":{
		"py": "45%",
		"tkinter":"15%",
		"kivy":"35%"
	},
	"php": {
		"php": "61%",
		"mysql": "66%"
	},
	"css": {
		"css": "77%",
		"scss": "87%",
		"B": "55%"
	}
}
print(languages)