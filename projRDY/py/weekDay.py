import math
y= int(input("Enter the year in form YYYY (example: 1968):	"))
m= int(input("Enter the month in number (example: 7 ):	"))
d= int(input("Enter the day in number (example: 27 ):	"))
weekday = {
1 : "Saturday",
2 : "Sunday",
3 : "Monday",
4 : "Tuesday",
5 : "Wednesday",
6 : "Thusday",
0 : "Friday",
}
devMonth = {
	1  : 6,
	2   : 2,
	3   : 3,
	4   : 6,
	5   : 1,
	6   : 4,
	7   : 6,
	8   : 2,
	9  	: 5,
	10   : 0,
	11   : 3,
	12   : 5
}
dif = y%4
x = y/100
dayNo= (d + devMonth[m] + dif -(y-dif)/2 + (math.ceil(x))*7)%7
print("Your weekday of [ ",d,"/",m,"/",y ," ] is {(", dayNo , ")}  => ", weekday[dayNo])