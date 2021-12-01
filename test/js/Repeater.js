var h=0;
var m=0;
var s=0;
var i=0;
var repeats=0;
var intent=[""];

function to_start(){

switch(document.getElementById('btn').value)
{
case  'Stop':
window.clearInterval(tm); // stop the timer 
document.getElementById('n1').innerHTML = "Intention Repeated " + repeats + " times.";
document.getElementById('btn').value='Start';
break;
case  'Start':
tm=window.setInterval('disp()',1000);
document.getElementById('btn').value='Stop';
break;
}
}

function disp(){
// Format the output by adding 0 if it is single digit //
if(s<10){var s1='0' + s;}
else{var s1=s;}
if(m<10){var m1='0' + m;}
else{var m1=m;}
if(h<10){var h1='0' + h;}
else{var h1=h;}
// Display the output //
str= h1 + ':' + m1 +':' + s1 ;
document.getElementById('n1').innerHTML=str+' '+document.getElementById('intention').value;

for (i = 0; i < 10000; i++) { 
	intent.push(document.getElementById('intention').value+" ONE INFINITE CREATOR. INTELLIGENT INFINITY. INFINITE ENERGY. INTELLIGENT ENERGY. LOGOS. HR 6819. BY GRACE. IN COOPERATION WITH FATHER GOD AND MOTHER GODDESS AND SOURCE. PURE ADAMANTINE PARTICLES OF LOVE/LIGHT. IN THE HIGHEST AND GREATEST GOOD OF ALL. REQUESTING AID FROM ALL BENEVOLENT BEINGS WHO ARE WILLING TO ASSIST. METATRON''S CUBE. 0010110. GREAT CENTRAL SUN. SIRIUS A. SIRIUS B. SOL. ALL AVAILABLE BENEFICIAL ENERGY GRIDS OF EARTH/GAIA FOCUSED THROUGH CRYSTAL GRID OF EARTH/GAIA. NODES AND NULLS OF EARTH/GAIA. CREATE STABILIZATION FIELD. CREATE ZONE OF MANIFESTATION. ALL AVAILABLE ORGONE AETHER RESONATORS. ALL AVAILABLE ORGONE BUBBLES. USE EVERY AVAILABLE RESOURCE (RESPECTING FREE WILL). MANIFEST ASAP AT HIGHEST DENSITY POSSIBLE INTO BEST DENSITY FOR USER. CREATE STRUCTURE. 963HZ GOD FREQUENCY. 432HZ MANIFESTATION. CANCEL NEGATIVE INTENTIONS. PURIFY THE ENERGY. CLEAR THE BLOCKAGES. REGULATE AND BALANCE THE ENERGY. USE THE MOST EFFECTIVE PATH IN THE MOST EFFICIENT WAY. FULLY OPTIMIZE THE ENERGY. INTEGRATE THE ENERGY. PROCESS THE CHANGES. GUIDED BY MY HIGHER SELF. GROUNDED TO GAIA, CONNECTED TO SOURCE, INTEGRATING BOTH WITHIN THE SACRED HEART. IT IS DONE. SO SHALL IT BE. NOW RETURN A PORTION OF THE LOVE/LIGHT RECEIVED AND ACTIVATED BACK INTO THE HIGHER REALMS OF CREATION. I LOVE YOU AND THANK YOU. OM");
	repeats+=1;
}
intent.length=0;

// Calculate the stop watch // 
if(s<59){ 
s=s+1;
}else{
s=0;
m=m+1;
if(m==60){
m=0;
h=h+1;
} // end if  m ==60
}// end if else s < 59
// end of calculation for next display

}
