$(document).ready(function(){
    $("#login").on("submit", function(e){
    
        e.preventDefault();
        $.ajax({
            type : 'post',	//Request method: GET, POST  
            url : 'http://localhost:8080/PROYECTOSHIKOBA/enviarCorreocontrasenia.php',  //Where to send the data
            data: { user: $('#inputEmail').val()},  //What data you want to send
            success:function(data) {  
                if(data != false){
                    window.location.href = 'http://localhost:8000/index.html'
                }
                //
                console.log(data);	 //This is a example, like we want to print the result
            
            }
        })
    })
})