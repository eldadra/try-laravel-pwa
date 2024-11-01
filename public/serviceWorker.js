const staticPWA = 'pwa-assets-v1'
const assets = ['/', '/css/style.css', '/script/script.js', '/posts']

self.addEventListener('install', installEvent => {
    installEvent.waitUntil(
        caches.open(staticPWA).then(cache => {
            cache.addAll(assets)
        })
    )
})

self.addEventListener('fetch', fetcEvent => {
    fetcEvent.respondWith(
        caches.match(fetcEvent.request).then(res => {
            return res || fetch(fetcEvent.request)
        })
    )
})
