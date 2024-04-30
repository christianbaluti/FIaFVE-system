window.onload = function() {
    fetchRecordings();
};

function fetchRecordings() {
    fetch('getRecordings.php')
        .then(response => response.json())
        .then(data => displayRecordings(data))
        .catch(error => console.error('Error fetching recordings:', error));
}

function displayRecordings(recordings) {
    const container = document.getElementById('recordingsList');
    container.innerHTML = '';

    recordings.forEach(record => {
        const div = document.createElement('div');
        div.className = 'record';
        div.innerHTML = `<p>Call from: ${record.callerNumber}</p><p>Recording: <a href="${record.recordingUrl}" target="_blank">Listen</a></p>`;
        container.appendChild(div);
    });
}
