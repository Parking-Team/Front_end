$(document).ready(function(){
   
    $("#about").hide();
    $("#services").hide();
    $("#projects").hide();
    
    $(".home , .parking").click(function(){
        $("#about").hide();
        $("#services").hide();
        $("#projects").hide();
        
        $("#about").animate({
           opacity:'0',
           padding:'0px'
           
        }, 1000);
        
        $("#services").animate({
           opacity:'0',
           padding:'0px'
           
        }, 1000);
        
        $("#projects").animate({
           opacity:'0',
           padding:'0px'
           
        }, 1000);
        
    });
    
    $(".about").click(function(){
        $("#about").show();
        $("#services").hide();
        $("#projects").hide();
        
        $("#about").animate({
           opacity:'1',
           padding:'20px'
           
        }, 1000);
        
        $("#services").animate({
           opacity:'0',
           padding:'0px'
           
        }, 1000);
        
        $("#projects").animate({
           opacity:'0',
           padding:'0px'
           
        }, 1000);
        
    });
    
    $(".services").click(function(){
        $("#services").show();
        $("#projects").hide();   
        $("#about").hide();
        
        $("#services").animate({
           opacity:'1',
           padding:'20px'
           
        }, 1000);
        
        $("#about").animate({
           opacity:'0',
           padding:'0px'
           
        }, 1000);
        
        $("#projects").animate({
           opacity:'0',
           padding:'0px'
           
        }, 1000);
        
    });
    
    $(".projects").click(function(){
        $("#projects").show();
        $("#about").hide();
        $("#services").hide();
        
        $("#projects").animate({
           opacity:'1',
           padding:'20px'
           
        }, 1000);
        
        $("#about").animate({
           opacity:'0',
           padding:'0px'
           
        }, 1000);
        
        $("#services").animate({
           opacity:'0',
           padding:'0px'
           
        }, 1000);
        
    });
    
});