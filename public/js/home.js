document.addEventListener('DOMContentLoaded', function () {
    new Splide('.splide', {
        type: 'slide',
        perPage: 1,
        pagination: false,
    }).mount();
});

document.addEventListener('DOMContentLoaded', function () {
    const calendarEl = document.getElementById('calendar');
    const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        dateClick: function (info) {
            fetch(`/calendar/details?date=${info.dateStr}`)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('moodText').innerHTML =
                        data.mood
                            ? `<ul><li>${data.mood}</li></ul>`
                            : `<ul><li>-</li></ul>`;

                    document.getElementById('taskText').innerHTML =
                        data.tasks.length > 0
                            ? `<ul>${data.tasks.map(t => `<li>${t.name}</li>`).join("")}</ul>`
                            : `<ul><li>-</li></ul>`;

                    document.getElementById('journalText').innerHTML =
                        data.journals.length > 0
                            ? `<ul>${data.journals.map(j => `<li>${j.title}</li>`).join("")}</ul>`
                            : `<ul><li>-</li></ul>`;

                    document.getElementById('achievementText').innerHTML =
                        data.achievements.length > 0
                            ? `<ul>${data.achievements.map(a => `<li>${a.category} (Lv ${a.level})</li>`).join("")}</ul>`
                            : `<ul><li>-</li></ul>`;

                    document.getElementById('focusTimeText').innerHTML =
                        data.focus_time !== "00:00:00"
                            ? `<ul><li>${data.focus_time}</li></ul>`
                            : `<ul><li>-</li></ul>`;

                    const modal = new bootstrap.Modal(document.getElementById('calendarModal'));
                    modal.show();
                });
        }
    });
    calendar.render();

    document.getElementById('calendarModal').addEventListener('hidden.bs.modal', function () {
        calendar.updateSize();
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const textarea = document.getElementById('dailyWords');

    if (textarea) {
        const savedData = localStorage.getItem('dailyWords');
        const savedTime = localStorage.getItem('dailyWordsTime');

        if (savedData && savedTime) {
            const now = Date.now();
            const elapsed = now - parseInt(savedTime);

            if (elapsed < 86400000) {
                textarea.value = savedData;
            } else {
                localStorage.removeItem('dailyWords');
                localStorage.removeItem('dailyWordsTime');
            }
        }

        textarea.addEventListener('input', function () {
            localStorage.setItem('dailyWords', textarea.value);
            localStorage.setItem('dailyWordsTime', Date.now());
        });
    }
});