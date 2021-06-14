//selecting all elements
const selectBox = document.querySelector(".select-box"),
selectBtnX = selectBox.querySelector(".options .playerX"),
selectBtnO = selectBox.querySelector(".options .playerO"),
playBoard = document.querySelector(".play-board"),
players = document.querySelector(".players"),
allBox = document.querySelectorAll("section span"),
resultBox = document.querySelector(".result-box"),
wonText = resultBox.querySelector(".won-text"),
replayBtn = resultBox.querySelector("button"),
finishBtn = resultBox.querySelector("button");


window.onload = ()=>{ //Windows pertama diload
    for (let i = 0; i < allBox.length; i++) { //menabahkan onleClick attribute
       allBox[i].setAttribute("onclick", "clickedBox(this)");
    }
}

selectBtnX.onclick = ()=>{
    selectBox.classList.add("hide"); //menyembunyikan select box
    playBoard.classList.add("show"); //menampilkan playboard
}

selectBtnO.onclick = ()=>{ 
    selectBox.classList.add("hide"); //menyembunyikan select box
    playBoard.classList.add("show"); //menampilkan playboard
    players.setAttribute("class", "players active player"); //set class attribute pada pemain dengan nilai aktif
}

let playerXIcon //class name X Icon
let playerOIcon //class name O Icon
let playerSign = "X"; //Global variabel untuk miltiple function
let runBot = true; //Global variabel untuk menonaktifkan Bot

// Fungsi Click pengguna
function clickedBox(element){
    if(players.classList.contains("player")){
        playerSign = "O"; //Jika player memilih (O) maka akan mengganti variable playerSign ke O
        element.innerHTML = `<img src="img/o.svg" style="height: 32px;" alt="O">`; //menambahkan Icon (O) kedalam Clicked User Element
        players.classList.add("active"); //menambahkan class active player
        element.setAttribute("id", playerSign); //Set attribute untuk pilihan player
    }else{
        element.innerHTML = `<img src="img/x.svg" style="height: 32px;" alt="X">`; //menambahkan Icon (X) kedalam Clicked Element
        players.classList.add("active");
        element.setAttribute("id", playerSign);
    }
    selectWinner(); //Fungsi untuk memanggil pemengang game
    element.style.pointerEvents = "none"; //Ketika player sudah memilih board, tidak dapat memilih kembali
    playBoard.style.pointerEvents = "none"; //Menambahkan pointerEvents none sehingga player tidak dapat memilih sebelum Bot selesai
    let randomTimeDelay = ((Math.random() * 1000) + 200).toFixed(); //membuat random number sehingga Bot akan memberi jeda permainan
    setTimeout(()=>{
        bot(runBot); //Memanggil Fungsi Bot
    }, randomTimeDelay); //passing random delay value
}

//bot auto select function
function bot(){
    let array = [];
    if(runBot){
        playerSign = "O";
        for (let i = 0; i < allBox.length; i++) {
            if(allBox[i].childElementCount == 0){ 
                array.push(i); 
            }
        }
        let randomBox = array[Math.floor(Math.random() * array.length)];
        if(array.length > 0){ 
            if(players.classList.contains("player")){ 
                playerSign = "X"; //Jika player memilih (O) maka Bot akan menjadi (X)
                allBox[randomBox].innerHTML = `<img src="img/x.svg" style="height: 32px;" alt="X">`; //menambahkan Icon (X) kedalam Clicked Bot Element
                players.classList.remove("active"); //Menghapus active player pada user
                allBox[randomBox].setAttribute("id", playerSign);
            }else{
                allBox[randomBox].innerHTML = `<img src="img/o.svg" style="height: 32px;" alt="O">`; //menambahkan Icon (O) kedalam Clicked Bot Element
                players.classList.remove("active"); //Menghapus active player pada user
                allBox[randomBox].setAttribute("id", playerSign);
            }
            selectWinner();
        }
        allBox[randomBox].style.pointerEvents = "none"; 
        playBoard.style.pointerEvents = "auto"; 
        playerSign = "X"; 
    }
}

function getIdVal(classname){
    return document.querySelector(".box" + classname).id;
}
function checkIdSign(val1, val2, val3, sign){
    if(getIdVal(val1) == sign && getIdVal(val2) == sign && getIdVal(val3) == sign){
        return true;
    }
}
function selectWinner(){
    if(checkIdSign(1,2,3,playerSign) || checkIdSign(4,5,6, playerSign) || checkIdSign(7,8,9, playerSign) || checkIdSign(1,4,7, playerSign) || checkIdSign(2,5,8, playerSign) || checkIdSign(3,6,9, playerSign) || checkIdSign(1,5,9, playerSign) || checkIdSign(3,5,7, playerSign)){
        runBot = false;
        bot(runBot);
        setTimeout(()=>{
            resultBox.classList.add("show");
            playBoard.classList.remove("show");
        }, 700);
        wonText.innerHTML = `Player <p>${playerSign}</p> Menang!`;
    }else{ 
        if(getIdVal(1) != "" && getIdVal(2) != "" && getIdVal(3) != "" && getIdVal(4) != "" && getIdVal(5) != "" && getIdVal(6) != "" && getIdVal(7) != "" && getIdVal(8) != "" && getIdVal(9) != ""){
            runBot = false;
            bot(runBot);
            setTimeout(()=>{
                resultBox.classList.add("show");
                playBoard.classList.remove("show");
            }, 700);
            wonText.textContent = "Permainan Seri!";
        }
    }
}

replayBtn.onclick = ()=>{
    window.location.reload();
}

replayBtn.onclick = ()=>{
    window.location.reload("Button");
}

