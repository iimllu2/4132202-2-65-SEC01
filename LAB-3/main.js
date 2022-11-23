
        var num = 10;
        let name = "iimllu2";
       // let Array = [10,15,"iimllu2"];
        const obj = { name:"iimllu2", age: 35 };
        const objMix = {
         data: [
                {name:"Looh", gpa:4.3 },
                {name: "Kamonrat",gpa:2.8 },
        ],
        };

        console.log(num);
        console.log(Array);
        console.log(objMix);

        let string = num + name;
        console.log(string);

        string = objMix.data[1].name + Array[0];
        console.log(string);

        string ="<p>" + Array[2] + "</p>";
        string = `<p>${Array}</p>`; 

        console.log(string);

        function Add(a, b){
            return a + b;
        }

        console.log(Add(3,5));

        document.getElementById("divi").innerHTML = name;

        $(function (){
            //alert("Hello");
            $("#divi").html("Kamonrat");

            $("#bt1").click(function (){
                $("#divi").html("I Love IT"); 

            });
            
            $("#bt3").click(() =>{
                //arrow function
            
                $(".in1").val("BRU");
            });

            $("#bt4").click(() => {
                $(".in1").addClass("red");
            });
 
            $("#div_about").load("./pages/about.html");
        }); //jQuery Handle

    