let mail = "";
let pass = "";
let img = "";





let myDiv = document.querySelector('#maildiv');
let m = myDiv.querySelector('input');
let myDiv1 = document.querySelector('#passdiv');
let p = myDiv1.querySelector('input');
let myDiv2 = document.querySelector('#imgdiv');
let im = myDiv2.querySelector('input');



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
        if (mail == "done" && pass =="done" && img =="done"){
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

        if (mail == "done" && pass =="done" && img =="done"){
            console.log("inside css")
            element.style.display = "block";
        }

        
    }else{
        element.style.display = "none";

    }


});


im.addEventListener('input', ()=>{
    
    let mailval = im.value;
    let fileext = mailval.split('.');
    let len = fileext.length;
    if(fileext[len-1] == "jpg" || fileext[len-1] == "jpeg"){
        img = "done";

        if (mail == "done" && pass =="done" && img =="done"){
            console.log("inside css")
            element.style.display = "block";
        }




        

    }else{
        element.style.display = "none";

    }

    

});






