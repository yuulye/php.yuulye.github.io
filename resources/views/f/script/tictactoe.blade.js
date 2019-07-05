
var turn = false;
var tds = tictactoeBoard.getElementsByTagName('td');
for (let i = 0;i < tds.length;i++) {
  let td = tds[i];
  td.onclick = e => {
    if (td.clicked) return;
    if (turn) {
      td.innerText = 'O';
    } else {
      td.innerText = 'X';
    }
    td.clicked = true;
    turn = !turn;
  };
}

