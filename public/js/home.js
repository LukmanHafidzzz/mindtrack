document.addEventListener('DOMContentLoaded', function () {
    new Splide('.splide', {
    type: 'loop',
    perPage: 1,
    pagination: false,
    }).mount();
});

document.addEventListener('DOMContentLoaded', function() {
    const calendarEl = document.getElementById('calendar');
    const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        dateClick: function(info) {
            document.getElementById('moodText').textContent = "I'm satisfied";
            document.getElementById('taskText').textContent = "Biology";
            document.getElementById('journalText').textContent = "Project Report Q1";
            document.getElementById('achievementText').textContent = "Journal Starter!";

            const modal = new bootstrap.Modal(document.getElementById('calendarModal'));
            modal.show();
        }
    });
    calendar.render();

    document.getElementById('calendarModal').addEventListener('hidden.bs.modal', function() {
        calendar.updateSize();
    });
});