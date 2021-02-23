var h = document.getElementById("h");
var a = document.getElementById("a");
var s = document.getElementById("s");
var p = document.getElementById("p");
var c = document.getElementById("c");

function home(){
    h.classList.add("active");
    a.classList.remove("active");
    s.classList.remove("active");
    p.classList.remove("active");
    c.classList.remove("active");
}

function about(){
    a.classList.add("active");
    h.classList.remove("active");
    s.classList.remove("active");
    p.classList.remove("active");
    c.classList.remove("active");
}

function services(){
    s.classList.add("active");
    a.classList.remove("active");
    h.classList.remove("active");
    p.classList.remove("active");
    c.classList.remove("active");
}

function projects(){
    p.classList.add("active");
    a.classList.remove("active");
    s.classList.remove("active");
    h.classList.remove("active");
    c.classList.remove("active");
}

function contact(){
    c.classList.add("active");
    a.classList.remove("active");
    s.classList.remove("active");
    p.classList.remove("active");
    h.classList.remove("active");
}

function closeContact(){
    if(h.classList.contains("acitve")){
        home();
    }else if(a.classList.contains("acitve")){
        about();
    }else if(s.classList.contains("acitve")){
        services();
    }else if(p.classList.contains("acitve")){
        projects();
    }
}
