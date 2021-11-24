const searchBar = document.querySelector(".users .search input"),
searchBtn = document.querySelector(".users .search button"),
usersList = document.querySelector(".users .users-list");

searchBtn.onclick = ()=>{
   searchBar.classList.toggle("active");
   searchBar.focus();
   searchBtn.classList.toggle("active");
   searchBar.value ="";
}

searchBar.onkeyup = ()=>{
   let searchTerm = searchBar.value; //getting user search value
     //close users list when user search 
   if(searchTerm != ""){
      searchBar.classList.add("active");  //adding active class when user start searching
   }else{
      searchBar.classList.remove("active");     //
   }
      //lets start ajax
     let xhr = new XMLHttpRequest(); //creating xml object
     xhr.open("POST","php/search.php",true);
     xhr.onload = ()=>{
         if(xhr.readyState === XMLHttpRequest.DONE){
             if(xhr.status === 200){
                  let data = xhr.response;
                  usersList.innerHTML = data;     //sending data to html
                  
             }
         }
     }
     xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xhr.send("searchTerm=" + searchTerm);  //sending user search term to php file with ajax
}

setInterval(()=>{
   //lets start ajax
   let xhr = new XMLHttpRequest(); //creating xml object
   xhr.open("GET","php/users.php",true);
   xhr.onload = ()=>{
       if(xhr.readyState === XMLHttpRequest.DONE){
           if(xhr.status === 200){
                let data = xhr.response;
               
                if(!searchBar.classList.contains("active")){      //if active not contains in search abr then add this
                     usersList.innerHTML = data;
                }     
           }
       }
   }
   xhr.send();
}, 500);    //this function will run frequently after 500ms