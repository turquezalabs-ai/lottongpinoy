// sw.js
const CACHE_NAME = 'lottong-pwa-v1';
const urlsToCache = [
  '/',
  '/index.php',
  '/css/styles.css',
  '/js/app.js',
  '/img/logo.svg'
];

// Install event
self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(cache => {
        console.log('Opened cache');
        return cache.addAll(urlsToCache);
      })
  );
});

// Fetch event
self.addEventListener('fetch', event => {
  event.respondWith(
    caches.match(event.request)
      .then(response => {
        if (response) {
          return response;
        }
        return fetch(event.request);
      }
    )
  );
});