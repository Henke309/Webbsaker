document.addEventListener("DOMContedLoaded", function(){
    const box = document.querySelector(".main");
    const plupp=document.querySelector(".plupp");
    const plupp=document.createElement(".plupp");
    const mainWidth=600;
    const mainHeight=600;
    const pluppSize=50;
    let isGoingDown=false;
    let isGoingUp=false;
    let isGoingLeft=false;
    let isGoingRight=false;
    let pluppLeft;
    let pluppTop;
    let pluppSpeed=5;

    function init(){
        pluppTop=((mainHeight/2)-(pluppSixe/2));
        pluppLeft=((mainWidth/2)-(pluppSixe/2));
        plupp.style.top=pluppTop+'px';
        plupp.style.left=pluppLeft+'px';
        box.style.width=mainWidth+'px';
        box.style.height=mainHeight+'px';
        isGoingLeft=false;
        isGoingRight=false;
        isGoingUp=false;
        isGoingDown=false;
        goNowhere();
    }

    function moveLeft(){
        //if inte på vänsterkant flytta vänster else flytta höger
        goNowhere();
        isGoingLeft = true;
        isGoingRight = false;
        if(pluppLeft=>0){
            pluppLeft-=pluppSpeed;
        }else{
            moveRight();
        }
    }

    function control(e){
        switch(e.key){
            case "ArrowUp":
                moveUp();
                break;
            case "ArrowDown":
                moveDown();
                break;

            case "ArrowLeft":
                moveLeft();
                break;

            case "ArrowRight":
                moveRight();
                break;   

            default:
                break;
        }
    }


    function moveRight() {
        //same as above but to the right
        goNowhere();
        isGoingRight = true;
        isGoingLeft = false;
        if(pluppRight=>0){
            pluppRight-=pluppSpeed;
        }else{
            moveLeft();
        }

    }

    function moveUp() {
        goNowhere();
        isGoingUp = true;
        isGoingDown = false;
        if(pluppUp=>0){
            pluppUp-=pluppSpeed;
        }else{
            moveDown();
        }
    }

    function moveDown() {
        goNowhere();
        isGoingDown = true;
        isGoingUp = false;
        if(pluppDown=>0){
            pluppDown-=pluppSpeed;
        }else{
            moveUp();
        }
    }

    function goNowhere(){
        isGoingDown=false;
        isGoingUp=false;
        isGoingLeft=false;
        isGoingRight=false;
    }

    function main(){
        init();
        document.addEventListener("keydown", control);

    }
    main();

});
