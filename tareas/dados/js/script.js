const selectors = [
    [4], 
    [0,8],
    [2,4,6],
    [0,2,6,8],
    [0,2,4,6,8],
    [0,2,3,5,6,8],
]

function getNumber(min, max) {
    return min + Math.random() * (max - min);
}

function getResult() {
    const player1 = Math.round(getNumber(1,6))
    const player2 = Math.round(getNumber(1,6))
    return {player1, player2}
}

function reset() {
    const circles = document.querySelectorAll(`.circle`)
    for(let i = 0; i < circles.length; i++) {
        circles[i].classList.remove('active')
    }
}

function showDice(dice, number) {
    const circles = document.querySelectorAll(`${dice} .circle`)
    
    console.log(selectors[number - 1])
    // circles[0].classList.add('active')
    selectors[number - 1].map(pos => {
        circles[pos].classList.add('active')
    })
}


function startGame() {
    const title = document.getElementById('title')
    const button = document.getElementById('btn-play')
    
    button.addEventListener('click', () => {
        reset()
        const { player1, player2 } = getResult()
        console.log(player1, player2)
        showDice('#dice1', player1)
        showDice('#dice2', player2)
        if (player1 == player2) {
            title.innerHTML = 'Empate!!! 🙄'
        } else if (player1 > player2) {
            title.innerHTML = 'Jugador 1 a ganado!!!! 🥳'
        } else {
            title.innerHTML = 'Jugador 2 a ganado!!!! 😎'
        }
    })
}


startGame()