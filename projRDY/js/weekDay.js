<script>


let y= 2021, m=11, d=9;
switch(devMonth) {
case 1:
case 10:
	  0 ;
case 5: 
		1;
case 8:
		2;
// case 2:
// case 3:
// case 11:
// 		3;
case 6: 
		4;
case 9:
case 12: 
		5;
case 4:
case 7:
		6;
default:
	 3;
};
d = ["Saturday", "Sunday", "Monday", "Tuesday", "Wednesday", "Thrusday", "Friday"];
dif = y%4;
dayNo= (d + devMonth[m] + dif -(y-dif)/2 + (y-y%100)*49)%7;
document.write("Your weekday of [ d-m-y ] is {("+ dayNo + ")}  => "+ weekday[dayNo]);
</script>