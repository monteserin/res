let board = ["", "", "", "", "", "", "", "", ""];
let jugadores = ["rojo", "verde"];
let turno = 0;
let botones = document.getElementsByTagName("input");

function movimiento(posicion) {
    let btn = botones[posicion];
    board[posicion] = jugadores[turno];
    ;

    if (turno == 0) {


        turno = 1;
        btn.style.background = "salmon";


    } else {
        turno = 0;

        btn.style.background = "paleGreen";

    }

    let haGanadoAlguien = evaluateWin(jugadores[turno]);
    console.log(board);
    if (haGanadoAlguien == true) {
        alert("Yeah! Enhorabuena, player " + jugadores[turno]);
        board = ["", "", "", "", "", "", "", "", ""];
        for (i in botones) {
            botones[i].style.background = "black";
        }
    }
    if (turno == 1) {
        movimiento(getComputerMove());
    }
}


function getComputerMove() {
    //1 - Comprobamos si la máquina puede hacer un movimiento y ganar la partida
    for (i in board) {
        boardBIS = board.slice(0);


        if (boardBIS[i] == "") {
            boardBIS[i] = "X";
            if (evaluateWin(boardBIS, "X")) {
                return i;


            }
        }
    }
    //2 - Comprobamos si tras mover, el humano puede hacer un movimiento y ganar la partida
    for (i in board) {
        boardBIS = board.slice(0);
        if (boardBIS[i] == "") {
            boardBIS[i] = "X";
            if (evaluateWin(boardBIS, "X")) {
                alert(1111)
                return i;


            }
        }
    }
    //3 - Comprueba si hay alguna esquina libre. Si lo está, la máquina mueve a la esquina.
    corners = [0, 2, 6, 8];
    while (corners.length > 0) {
        let randomIndex = getRandomPositionInArray(corners);
        let randomCorner = corners[randomIndex];
        if (board[randomCorner] == "") {
            return randomCorner;
        } else {
            corners.splice(randomIndex, 1);
        }
    }
    //4 - Comprueba si el centro está libre. Si lo está, la máquina mueve al centro
    if (board[4] == "") {
        return 4;
    }

    //5 - Mueve a cualquiera de las casillas restantes
    let sides = [1, 3, 5, 7];
    while (sides.length > 0) {
        let randomIndex = getRandomPositionInArray(sides);
        let randomSide = sides[randomIndex];
        if (board[randomSide] == "") {
            return randomSide;
        } else {
            sides.splice(randomIndex, 1);
        }
    }

}

function evaluateWin(param) {

    if (turno == 1) console.log("board[2]: " + board[2] + "board[5]: " + board[5] + "board[8]" + board[8])
    if (board[0] == param && board[1] == param && board[2] == param) {
        return true;
    } else if (board[3] == param && board[4] == param && board[5] == param) {
        return true;
    } else if (board[6] == param && board[7] == param && board[8] == param) {
        return true;
    } else if (board[0] == param && board[3] == param && board[6] == param) {
        return true;
    } else if (board[1] == param && board[4] == param && board[7] == param) {
        return true;
    } else if (board[2] == param && board[5] == param && board[8] == param) {

        return true;
    } else if (board[0] == param && board[4] == param && board[8] == param) {
        return true;
    } else if (board[2] == param && board[4] == param && board[6] == param) {
        return true;
    }
    return false;
}

function getRandomPositionInArray(array) {
    let randomNumber = Math.floor(Math.random() * array.length);
    return randomNumber
}
