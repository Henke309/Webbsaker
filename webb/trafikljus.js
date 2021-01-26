function TurnRed() {
  clearLight();
  document.getElementById("RedLight").style.backgroundColor = "red";
}

function TurnPink() {
  clearLight();
  document.getElementById("PinkLight").style.backgroundColor = "#FF69B4";
}

function TurnCyan() {
  clearLight();
  document.getElementById("CyanLight").style.backgroundColor = "cyan";
}

function clearLight() {
  document.getElementById("RedLight").style.backgroundColor = "black";
  document.getElementById("PinkLight").style.backgroundColor = "black";
  document.getElementById("CyanLight").style.backgroundColor = "black";
}