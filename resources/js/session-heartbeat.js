let lastActivity = Date.now()

const updateActivity = () => {
    lastActivity = Date.now()
}

// Desktop Events
window.addEventListener('mousemove', updateActivity)
window.addEventListener('keydown', updateActivity)

// Mobile Events
window.addEventListener('touchstart', updateActivity)
window.addEventListener('touchmove', updateActivity)
window.addEventListener('scroll', updateActivity)
window.addEventListener('click', updateActivity)

// Wenn die App wieder sichtbar wird
document.addEventListener('visibilitychange', () => {
    if (document.visibilityState === 'visible') {
        updateActivity()

        window.axios.get('/heartbeat').catch(() => {
            window.location.reload()
        })
    }
})

// Heartbeat alle 5 Minuten
setInterval(() => {
    const now = Date.now()

    // Nur wenn User in letzten 15 Minuten aktiv war
    if (now - lastActivity < 1000 * 60 * 15) {
        window.axios.get('/heartbeat').catch(() => {
            window.location.reload()
        })
    }
}, 1000 * 60 * 5) // Alle 5 Minuten