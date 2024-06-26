
    window.addEventListener('online', updateStatus);
    window.addEventListener('offline', updateStatus);
    
    function updateStatus() {
        var onlineUserDiv = document.getElementById('online-user');
        var statusSpan = onlineUserDiv.querySelector('span');

        if (navigator.onLine) {
            statusSpan.textContent = 'online';
        } else {
            statusSpan.textContent = 'offline';
        }
    }
    
  
    updateStatus();
