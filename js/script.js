function contact() {

    var reason = prompt(" Reason For contact\n"
                       + "1. Project\n" +
                       "2. Thesis\n"+
                       "3. Meet & Greet\n"+
                        "please type anyone\n"
                       );
    reason= reason.toLowerCase();
    if(reason=== "project"){

        alert( "i want to share my project with you");
    }
    else if(reason=== "thesis"){
        alert("contact me ");
    }
    else if(reason=== "meet & greet" ){
        alert("Come to my location");
    }

    var service = prompt("HI, There.Want service !?\n"+
                        "1. App Development \n"+
                        "2. Web Development\n"+
                        "please type anyone");



    if(service=== "app development"){

        alert( "I provide Well optimized app");
    }
    else if(service=== "web development"){
        alert(" Contact me if you want to colab with me");
    }
        var offer = prompt("Offering job !!\n"+
                          "1. YES \n"+
                          "2. NO \n");

    if(offer=== "yes"){

        alert( "I provide my best");
    }
    else if(offer=== "no"){
        alert(" Thank You");
    }
    
}