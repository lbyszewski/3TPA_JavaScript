function fkwad() {
    "use strict";
    let a = document.getElementById('123').value;

    let b = document.getElementById('456').value;


    let c = document.getElementById('789').value;

    let pierwOne;
    let pierwTwo;
    let pierZero;

    let delta = (b*b) - (4*a*c);

    let dsqrt = Math.sqrt(delta);
   

    if(delta>0){
        
         pierwOne = (-b-dsqrt)/(2*a);
        document.writeln('<table border="1">' + '<tr>' + '<th>' + pierwOne + '</th>' + '</tr>'  + '<table>')

        pierwTwo =  (-b+dsqrt)/(2*a);
        document.writeln('<table border="1">' + '<tr>' + '<th>' + pierwTwo + '</th>' + '</tr>'  + '<table>')
        
    } else if(delta == 0){
        
       pierZero =  -b/(2*a);
       document.writeln('<table border="1">' + '<tr>' + '<th>' + pierZero + '</th>' + '</tr>'  + '<table>')
    } else{
        document.writeln('<table border="1">' + '<tr>' + '<th>' + "Mniej niż zeroooo , mniej  niż zeroooo  oooooo " + '</th>' + '</tr>'  + '<table>')
    }


}
