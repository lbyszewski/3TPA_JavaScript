     function show(){
            
            var p = parseInt(document.getElementById('111').value)
            
            var k = parseInt(document.getElementById('222').value)
           
            if(p<k){
                
                var d = parseInt(document.getElementById('333').value)
                for(var a = p; a<=k;a++){
                    if( a % d == 0){
                        document.writeln('<table border="1">' + '<tr>' + '<th>' + a + '</th>' + '</tr>'  + '<table>'); 
                    }
                    
                }
                
            }
           
        }
    show();
       
       