let timerInterval;
let timerSeconds = 0;
let timerInitialSeconds = 0;
let timerRunning = false;

function updateTimerDisplay() {
    const h = String(Math.floor(timerSeconds / 3600)).padStart(2, '0');
    const m = String(Math.floor((timerSeconds % 3600) / 60)).padStart(2, '0');
    const s = String(timerSeconds % 60).padStart(2, '0');
    document.getElementById('timer-display').textContent = `${h}:${m}:${s}`;
}

document.getElementById('set-timer').addEventListener('click', () => {
    const h = parseInt(document.getElementById('input-hours').value) || 0;
    const m = parseInt(document.getElementById('input-minutes').value) || 0;
    const s = parseInt(document.getElementById('input-seconds').value) || 0;

    timerSeconds = h * 3600 + m * 60 + s;
    timerInitialSeconds = timerSeconds;

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
                saveTimeRecord('timer', timerInitialSeconds);
                alert("⏰ Time's up!");
            }
        }, 1000);
    }
});

document.getElementById('pause-timer').addEventListener('click', () => {
    clearInterval(timerInterval);
    timerRunning = false;
});

document.getElementById('reset-timer').addEventListener('click', () => {
    clearInterval(timerInterval);
    timerRunning = false;
    timerSeconds = 0;
    timerInitialSeconds = 0;
    updateTimerDisplay();

    document.getElementById('input-hours').value = '';
    document.getElementById('input-minutes').value = '';
    document.getElementById('input-seconds').value = '';
});

let stopwatchInterval;
let stopwatchSeconds = 0;
let stopwatchRunning = false;

function updateStopwatchDisplay() {
    const h = String(Math.floor(stopwatchSeconds / 3600)).padStart(2, '0');
    const m = String(Math.floor((stopwatchSeconds % 3600) / 60)).padStart(2, '0');
    const s = String(stopwatchSeconds % 60).padStart(2, '0');
    document.getElementById('stopwatch-display').textContent = `${h}:${m}:${s}`;
}

document.getElementById('start-stopwatch').addEventListener('click', () => {
    if (!stopwatchRunning) {
        stopwatchRunning = true;
        stopwatchInterval = setInterval(() => {
            stopwatchSeconds++;
            updateStopwatchDisplay();
        }, 1000);
    }
});

document.getElementById('pause-stopwatch').addEventListener('click', () => {
    clearInterval(stopwatchInterval);
    stopwatchRunning = false;
});

document.getElementById('reset-stopwatch').addEventListener('click', () => {
    if (stopwatchSeconds > 0) {
        saveTimeRecord('stopwatch', stopwatchSeconds);
    }

    clearInterval(stopwatchInterval);
    stopwatchRunning = false;
    stopwatchSeconds = 0;
    updateStopwatchDisplay();
});

function saveTimeRecord(type, duration) {
    fetch('/time-records', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify({
            type: type,
            duration: duration
        })
    })
    .then(res => res.json())
    .catch(err => console.error(err));
}