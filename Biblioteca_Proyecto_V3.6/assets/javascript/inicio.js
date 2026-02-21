const [navigation] = performance.getEntriesByType('navigation');
if (navigation && navigation.type === 'back_forward') {
    window.location.reload();
}


window.addEventListener('pageshow', function(event) {
    if (event.persisted) {
        window.location.reload();
    }
});


if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}