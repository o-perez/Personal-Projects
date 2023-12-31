var showMenuMobile = document.getElementById('menuBtn');
showMenuMobile.addEventListener("click", menuMobile);

function menuMobile(){
    var menuIsActive = false,
        readyToHideMenu = false,
        menuIsHide = false;
    
    //document.getElementById('navToShow').style.visibility = "visible";

    var mobileNavBarStatus = document.getElementById('navToShow');

    if(mobileNavBarStatus.style.visibility === "visible"){
        mobileNavBarStatus.style.visibility = "hidden";
    }

    else{
        mobileNavBarStatus.style.visibility = "visible";
    }
}