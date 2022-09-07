function dziel(){
    var d = parseInt(document.getElementById('liczbaD').value)
   

    
    for(var w = 1; w<=d;w++){
        if( d % w == 0  ){
            document.writeln('<table border="1">' + '<tr>' + '<td>' + w + '</td>' + '</tr>'  + '<table>')
        }
        
    }
    

}