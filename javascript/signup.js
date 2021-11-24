const form = document.querySelector(".signup form"),
continueBtn = form.querySelector(".button input"),
errorText = form.querySelector(".error-text");

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
                if(data === "success"){
                 
                }else{
                  errorText.style.display = "block";
                  errorText.textContent = data;
                }
            }
        }
    }
    //send form data through ajax to php
    
    let formData = new FormData(form);  //creating new form data object
    xhr.send(formData);     //sending the form data to php
}
