// Set the date we're counting down to
var countDownDate = new Date("Aug 27, 2022 18:30:00").getTime();
let firework = document.querySelector(".firework");
let timeDiv = document.querySelector(".time-div");
let soonDiv = document.querySelector(".soon-div");

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  var dayDisplay = document.getElementById("days");
  var hourDisplay = document.getElementById("hours");
  var minuteDisplay = document.getElementById("minutes");
  var secondDisplay = document.getElementById("seconds");


  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with their ids

    dayDisplay.innerText = days;
    hourDisplay.innerText = hours;
    minuteDisplay.innerText = minutes;
    secondDisplay.innerText = seconds;
  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    soonDiv.style.display = "none";
    timeDiv.style.display = "block";
	firework.style.display = "block";
    dayDisplay.innerText = 00;
    hourDisplay.innerText = 00;
    minuteDisplay.innerText = 00;
    secondDisplay.innerText = 00;
  }
}, 1000);