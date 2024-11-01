// register service worker
if ('serviceWorker' in navigator) {
    window.addEventListener('load', function () {
        this.navigator.serviceWorker
            .register('/serviceWorker.js')
            .then(res => console.log('service worker registered'))
            .catch(err => console.log('serivce worker not registered', err))
    })
}
