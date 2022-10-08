/*
Give the service worker access to Firebase Messaging.
Note that you can only use Firebase Messaging here, other Firebase libraries are not available in the service worker.
*/
importScripts('https://www.gstatic.com/firebasejs/7.23.0/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/7.23.0/firebase-messaging.js');

/*
Initialize the Firebase app in the service worker by passing in the messagingSenderId.
* New configuration for app@pulseservice.com
*/
firebase.initializeApp({
    apiKey: "AIzaSyDr5SvdhXx2CIkpZJSaI--7dS7B8mp3GZM",
    authDomain: "aqaqeer-8a775.firebaseapp.com",
    databaseURL: "https://aqaqeer-8a775-default-rtdb.firebaseio.com",
    projectId: "aqaqeer-8a775",
    storageBucket: "aqaqeer-8a775.appspot.com",
    messagingSenderId: "58433087348",
    appId: "1:58433087348:web:acbc778e8c17839a6a2e21",
    measurementId: "G-KYH3BQWQHN"
});

/*
Retrieve an instance of Firebase Messaging so that it can handle background messages.
*/
const messaging = firebase.messaging();
messaging.setBackgroundMessageHandler(function(payload) {
    console.log(
        "[firebase-messaging-sw.js] Received background message ",
        payload,
    );
    /* Customize notification here */
    const notificationTitle = "Background Message Title";
    const notificationOptions = {
        body: "Background Message body.",
        icon: "/itwonders-web-logo.png",
    };

    return self.registration.showNotification(
        notificationTitle,
        notificationOptions,
    );
});
