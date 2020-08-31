const selectors = [
    [5], 
    [1,9],
    [3,5,7],
    [1,3,7,9],
    [1,3,5,7,9],
    [1,3,4,6,7,9],
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
    console.log(circles[0])
    /* circles.map(c => {
        c.classList.remove('active')
    }) */
}

function showDice(dice, number) {
    const circles = document.querySelectorAll(`${dice} .circle`)
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
        showDice('#dice1', player1)
        showDice('#dice2', player2)
        if (player1 == player2) {
            title.innerHTML = 'Empate!!!'
        } else if (player1 > player2) {
            title.innerHTML = 'Jugador 1 a ganado!!!!'
        } else {
            title.innerHTML = 'Jugador 2 a ganado!!!!'
        }
    })
}


startGame()