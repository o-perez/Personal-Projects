//Variables to menu button on mobile.
var showMenuMobile = document.getElementById('menuBtn');
showMenuMobile.addEventListener("click", menuMobile);
//Variables to go back.
var goinbBackBTTN = document.getElementById('goingBackArrow');
goinbBackBTTN.addEventListener("click", goBack);

//Function to go back.
function goBack(){
    history.back();
}
// Function on charge to dispay navbar on mobile
function menuMobile(){
    var menuIsActive = false,
        readyToHideMenu = false,
        menuIsHide = false;
    
    //document.getElementById('navToShow').style.visibility = "visible";

    var mobileNavBarStatus = document.getElementById('navToShow');

    //Condition that determines if the navbar is visible.
    //"===" means that returns true if the operands are equal and of the same type.
    if(mobileNavBarStatus.style.visibility === "visible"){
        mobileNavBarStatus.style.visibility = "hidden";
    }

    else{
        mobileNavBarStatus.style.visibility = "visible";
    }
}