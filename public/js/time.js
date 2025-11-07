let timerInterval;
let timerSeconds = 0;
let timerRunning = false;

function updateTimerDisplay() {
    const hours = String(Math.floor(timerSeconds / 3600)).padStart(2, '0');
    const minutes = String(Math.floor((timerSeconds % 3600) / 60)).padStart(2, '0');
    const seconds = String(timerSeconds % 60).padStart(2, '0');
    document.getElementById('timer-display').textContent = `${hours}:${minutes}:${seconds}`;
}

document.getElementById('set-timer').addEventListener('click', () => {
    const h = parseInt(document.getElementById('input-hours').value) || 0;
    const m = parseInt(document.getElementById('input-minutes').value) || 0;
    const s = parseInt(document.getElementById('input-seconds').value) || 0;
    timerSeconds = h * 3600 + m * 60 + s;
    updateTimerDisplay();
});

document.getElementById('start-timer').addEventListener('click', () => {
    if (!timerRunning && timerSeconds > 0) {
        timerRunning = true;
        timerInterval = setInterval(() => {
            if (timerSeconds > 0) {
                timerSeconds--;
                updateTimerDisplay();
            } else {
                clearInterval(timerInterval);
                timerRunning = false;
                alert("⏰ Waktu habis!");
            }
        }, 1000);
    }
});

document.getElementById('pause-timer').addEventListener('click', () => {
    timerRunning = false;
    clearInterval(timerInterval);
});

document.getElementById('reset-timer').addEventListener('click', () => {
    timerRunning = false;
    clearInterval(timerInterval);
    timerSeconds = 0;
    updateTimerDisplay();
    document.getElementById('input-hours').value = '';
    document.getElementById('input-minutes').value = '';
    document.getElementById('input-seconds').value = '';
});


let stopwatchInterval;
let stopwatchTime = 0;
let stopwatchRunning = false;

function updateStopwatchDisplay() {
    const hours = String(Math.floor(stopwatchTime / 3600)).padStart(2, '0');
    const minutes = String(Math.floor((stopwatchTime % 3600) / 60)).padStart(2, '0');
    const seconds = String(stopwatchTime % 60).padStart(2, '0');
    document.getElementById('stopwatch-display').textContent = `${hours}:${minutes}:${seconds}`;
}

document.getElementById('start-stopwatch').addEventListener('click', () => {
    if (!stopwatchRunning) {
        stopwatchRunning = true;
        stopwatchInterval = setInterval(() => {
            stopwatchTime++;
            updateStopwatchDisplay();
        }, 1000);
    }
});

document.getElementById('pause-stopwatch').addEventListener('click', () => {
    stopwatchRunning = false;
    clearInterval(stopwatchInterval);
});

document.getElementById('reset-stopwatch').addEventListener('click', () => {
    stopwatchRunning = false;
    clearInterval(stopwatchInterval);
    stopwatchTime = 0;
    updateStopwatchDisplay();
});
