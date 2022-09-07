var f = parseInt(document.getElementById('nCiag').value);
function fibb(f){

    
    var s = 1
    var c = 0;
    if(f <3){
        document.writeln('<table border="1">' + '<tr>' + '<th>' + s + '</th>' + '</tr>'  + '<table>')
    } else {
        return function(){

            c = ((f-2) + (f -1));
                return c;
        };
    }
var fin = fibb();


document.writeln('<table border="1">' + '<tr>' + '<th>' + fin() + '</th>' + '</tr>'  + '<table>')
}