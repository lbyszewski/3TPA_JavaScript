function tabliczka(){

    var i = parseInt(document.getElementById('wiersz').value);
    var j = parseInt(document.getElementById('kolumna').value);

    for(var a = 1; a<=i;a++){
        for(var b = 1;b<=j;b++){
            document.writeln('<table border="1">' + '<tr>' + '<th>' + a * b + '</th>' + '</tr>'  + '<table>', " ")
        }
    }


}