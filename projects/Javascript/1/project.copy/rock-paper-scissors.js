let score = (JSON.parse(localStorage.getItem('score'))) || {
  wins: 0,
  losses: 0,
  ties: 0,
}; //get score if it exists ||  set it if it doesn't exist.
console.log(score)

updateScoreElement();

function PickMove() {
  const RandomNumber = Math.random();
  console.log(RandomNumber);

  if (RandomNumber >= 0 && RandomNumber <= 1 / 3) {
    comMove = 'Rock';
  }
  else if (RandomNumber >= 1 / 3 && RandomNumber < 2 / 3) {
    comMove = 'Paper';
  }
  else if (RandomNumber >= 2 / 3 && RandomNumber < 1) {
    comMove = 'Scissors';
  }
  return comMove;
}


function PlayGame(PlayerMove) {
  const comMove = PickMove();
  let result = '';

  if (PlayerMove === 'Rock') {
    if (comMove === 'Rock') {
      result = 'It\'s a tie.';
    } else if (comMove === 'Scissors') {
      result = 'You win.';
    } else if (comMove === 'Paper') {
      result = 'You lose.';
    }
  }
  else if (PlayerMove === 'Paper') {
    if (comMove === 'Paper') {
      result = 'It\'s a tie.';
    } else if (comMove === 'Scissors') {
      result = 'You win.';
    } else if (comMove === 'Rock') {
      result = 'You lose.';
    }
  }
  else if (PlayerMove === 'Scissors') {
    if (comMove === 'Paper') {
      result = 'You win.';
    } else if (comMove === 'Rock') {
      result = 'You lose.';
    } else if (comMove === 'Scissors') {
      result = 'It\'s a tie.';
    }
  }

  if (result === 'You win.') {
    score.wins += 1;
  } else if (result === 'You lose.') {
    score.losses += 1;
  } else if (result === 'It\'s a tie.') {
    score.ties += 1;
  }

  localStorage.setItem('score', JSON.stringify(score));

  updateScoreElement();


  // alert(`You picked ${PlayerMove} and the computer picked ${comMove}\n ${result}\nWins: ${score.wins}, Losses: ${score.losses}, Ties : ${score.ties}`); //get the paragraph from HTML document

  document.querySelector('.js-result').innerHTML = `Result: ${result}`;

  document.querySelector('.js-move').innerHTML = ` YOU: <img src="images/${PlayerMove}-emoji.png" class="move-icon">`;

  document.querySelector('.js-move1').innerHTML = `COMP: <img src="images/${comMove}-emoji.png" class="move-icon">`;
}

function updateScoreElement() {
  document.querySelector('.js-score').innerHTML = `Wins: ${score.wins}\nLosses: ${score.losses}\nTies: ${score.ties}`;
}

let isAutoPlaying = false;
let intervalId;
function autoPlay() {
  if (!isAutoPlaying) {
    intervalId = setInterval(function() { //setInterval returns an Id
      const PlayerMove = PickMove();
      PlayGame(PlayerMove);
    }, 1000);
    isAutoPlaying = true;
  } else {
    clearInterval(intervalId);
    isAutoPlaying = fasle;
  }
}