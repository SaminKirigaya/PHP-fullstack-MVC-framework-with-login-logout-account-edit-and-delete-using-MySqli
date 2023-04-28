let mail = "";
let pass = "";






let myDiv = document.querySelector('#maildiv');
let m = myDiv.querySelector('input');
let myDiv1 = document.querySelector('#passdiv');
let p = myDiv1.querySelector('input');



let btn = document.getElementById("regist");

let btnclass = btn.classList;
let n =btnclass.length;

//main button show or off class
let element = document.querySelector(`.${btnclass[n-1]}`);

m.addEventListener('input', ()=>{
    let regex = /^([_\-\.0-9a-zA-Z]+)@gmail\.com$/;
    let mailval = m.value;

    if (regex.test(mailval)){
        mail = "done";
        if (mail == "done" && pass =="done" ){
            console.log("inside css")
            element.style.display = "block";
        }

        
    }else{
        element.style.display = "none";

    }


});

p.addEventListener('input', ()=>{
    let regex = /^([_\-a-zA-Z0-9@]+){6,50}$/;
    let mailval = p.value;

    if (regex.test(mailval)){
        pass = "done";

        if (mail == "done" && pass =="done" ){
            console.log("inside css")
            element.style.display = "block";
        }

        
    }else{
        element.style.display = "none";

    }


});



