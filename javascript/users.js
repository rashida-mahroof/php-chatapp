const searchBar = document.querySelector(".users .search input"),
searchBtn = document.querySelector(".users .search button"),
usersList = document.querySelector(".users .users-list");

searchBtn.onclick = ()=>{
   searchBar.classList.toggle("active");
   searchBar.focus();
   searchBtn.classList.toggle("active");
}

setInterval(()=>{
   //lets start ajax
   let xhr = new XMLHttpRequest(); //creating xml object
   xhr.open("GET","php/users.php",true);
   xhr.onload = ()=>{
       if(xhr.readyState === XMLHttpRequest.DONE){
           if(xhr.status === 200){
                let data = xhr.response;
                usersList.innerHTML = data;     //sending data to html
                
           }
       }
   }
   xhr.send();
}, 500);    //this function will run frequently after 500ms