function test(){
    var a = parseInt(document.getElementById('first').value);
    var b = parseInt(document.getElementById('last').value);
    var i;
    

    for(var c = a;c<=b;c++){
        
        if(c % 3 == 0){
            document.writeln('<table>' +'<th>' +  c+ '</th>' + '</table>');
        }
    }

    let people = [
        {
            name: "Adrian",
            last: "Wąsik"

        },
        {
            name: "Tomasz",
            last: "Wąsik",
            children: [
                "1",
                "2",
                "3"

            ]
        },
        {
            name: "Anna",
            last: "Wąsik"

        }
    ]

    for(let person of people){
        console.log(`Czesc ${person.name} ${person.children[$[children]]}`);
    }
}