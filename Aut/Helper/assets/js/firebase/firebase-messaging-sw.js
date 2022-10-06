/*
Should be in the root directory ex: (http://test.com/firebase-messaging-sw.js)
*/
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
    apiKey: "AIzaSyDO9-Wq5oQH5IHR0AV21WrWNBX8c-_374A",
    authDomain: "test-4c365.firebaseapp.com",
    databaseURL: "https://test-4c365-default-rtdb.firebaseio.com",
    projectId: "test-4c365",
    storageBucket: "test-4c365.appspot.com",
    messagingSenderId: "83603180949",
    appId: "1:83603180949:web:7941901dbdfcbc2b84ba9c",
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
