    document.getElementById("submit").disabled = true; // Запрещает отправку без выбранного варианта ответа
     
        
            
           function uncheck23(){
                document.getElementById("checkbox1").checked = true; // Запрещает снятие галочки
                document.getElementById("checkbox2").checked = false;
                document.getElementById("checkbox3").checked = false;
                document.getElementById("submit").disabled = false;
           }
            function uncheck13(){
                document.getElementById("checkbox2").checked = true; // Запрещает снятие галочки
                document.getElementById("checkbox1").checked = false;
                document.getElementById("checkbox3").checked = false;
                document.getElementById("submit").disabled = false;
           }
            function uncheck12(){
                document.getElementById("checkbox3").checked = true; // Запрещает снятие галочки
                document.getElementById("checkbox1").checked = false;
                document.getElementById("checkbox2").checked = false;
                document.getElementById("submit").disabled = false;
           }