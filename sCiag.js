function ciag(){
    var a = parseInt(document.getElementById('liczbaA').value)
    var b = parseInt(document.getElementById('liczbaB').value)

    var result = 0
    for(var w = a; w<=b;w++){
        result += w;
    }
    document.writeln('<table border="1">' + '<tr>' + '<td>' + result + '</td>' + '</tr>'  + '<table>')

}
