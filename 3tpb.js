function oblicz(){
    var poczatek = parseInt(document.getElementById('first').value);
    var koniec = parseInt(document.getElementById('last').value);
    for(var i = poczatek;i<=koniec;i++){
        if(i % 4 == 0 &&  i % 5 == 0 || i % 10 == 0){
            document.writeln(i);
        }
    }

    let napis = "napis ";

    const lost = 10000000;
    console.log(lost);

}