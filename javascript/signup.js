const form = document.querySelector(".signup form"),
continueBtn = form.querySelector(".button input");

form.onsubmit = (e)=>{
    e.preventDefault(); //preventing form from submitting
}
continueBtn.onclick = ()=>{
    //lets start ajax
    let xhr = new XMLHttpRequest(); //creating xml object
    xhr.open("POST","php/signup.php",true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                console.log(data);
            }
        }
    }
    xhr.send();
}
