function powNumber(){

    var liczbaWprowadzona = parseInt(document.getElementById('liczbaN').value)
    for(var c = 1; c< liczbaWprowadzona; c= c*2){

        document.writeln('<table border="1">' + '<tr>' + '<th>' + c + '</th>' + '</tr>'  + '<table>');
    }


}