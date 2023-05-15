



setInterval(function() {
    var currentdate = new Date(); 
var datetime = "Today: " + currentdate.getDate() + "/"
                + (currentdate.getMonth()+1)  + "/" 
                + currentdate.getFullYear() + " @ "  
                + currentdate.getHours() + ":"  
                + currentdate.getMinutes() + ":" 
                + currentdate.getSeconds();

                console.log(datetime);

var time = document.getElementById("time")
time.innerHTML=datetime;
}, 1000);