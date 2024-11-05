function clearHistory() {
    localStorage.removeItem('attendanceHistory');
    document.getElementById('historyContent').innerHTML = 'Histori absensi telah dihapus.';
}

window.onload = function () {
    const historyContent = document.getElementById('historyContent');
    const attendanceHistory = JSON.parse(localStorage.getItem('attendanceHistory')) || [];

    if (attendanceHistory.length > 0) {
        historyContent.innerHTML = attendanceHistory.map(item => `
            <p>${item.date} - ${item.status}</p>
        `).join('');
    } else {
        historyContent.innerHTML = '<p>Belum ada histori absensi.</p>';
    }
};
