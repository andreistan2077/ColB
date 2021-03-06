function openWindow(url, location) {
    window.open(url, location);
}


function transform() {
    search();
    post();
    info();
}

function transformBack() {
    searchBack();
    postBack();
    infoBack();
}

function search() {
    let x = document.getElementById("search");
    x.style.WebkitTransform = 'translateX(0px) translateY(90px)';
}

function post() {
    let x = document.getElementById("post");
    x.style.WebkitTransform = 'translateX(-80px) translateY(70px)';
}

function info() {
    let x = document.getElementById("info");
    x.style.WebkitTransform = 'translateX(80px) translateY(70px)';
}

function searchBack() {
    let x = document.getElementById("search");
    x.style.WebkitTransform = 'translateX(0px) translateY(0px)';
}

function postBack() {
    let x = document.getElementById("post");
    x.style.WebkitTransform = 'translateX(0px) translateY(0px)';
}

function infoBack() {
    let x = document.getElementById("info");
    x.style.WebkitTransform = 'translateX(0px) translateY(0px)';
}


function focusB() {
    document.getElementById('menuShortcut-foreground').style.zIndex = 1;
    document.getElementById('menuShortcut-background').style.zIndex = -1;
}

function focusF() {
    document.getElementById('menuShortcut-foreground').style.zIndex = -1;
    document.getElementById('menuShortcut-background').style.zIndex = 1;
}



function transformPf() {
    login();
    profile();
    inventory();
}

function transformBackPf() {
    loginBack();
    profileBack();
    inventoryBack();
}

function login() {
    let x = document.getElementById("login");
    x.style.WebkitTransform = 'translateX(0px) translateY(70px)';
}

function profile() {
    let x = document.getElementById("profile");
    x.style.WebkitTransform = 'translateX(0px) translateY(130px)';
}

function inventory() {
    let x = document.getElementById("inventory");
    x.style.WebkitTransform = 'translateX(0px) translateY(190px)';
}

function loginBack() {
    let x = document.getElementById("login");
    x.style.WebkitTransform = 'translateX(0px) translateY(0px)';
}

function profileBack() {
    let x = document.getElementById("profile");
    x.style.WebkitTransform = 'translateX(0px) translateY(0px)';
}

function inventoryBack() {
    let x = document.getElementById("inventory");
    x.style.WebkitTransform = 'translateX(0px) translateY(0px)';
}


function focusPfB() {
    document.getElementById('menuProfile-foreground').style.zIndex = 1;
    document.getElementById('menuProfile-background').style.zIndex = -1;
}

function focusPfF() {
    document.getElementById('menuProfile-foreground').style.zIndex = -1;
    document.getElementById('menuProfile-background').style.zIndex = 1;
}