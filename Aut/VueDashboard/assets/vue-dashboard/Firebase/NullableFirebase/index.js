export default function NullableFirebase(config) {

    this.config = config;

    this.initializeApp = function (config) {
        this.config = config;
    }

    this.messaging = function () {
        return {
            getToken() {
                return new Promise((resolve, reject) => {

                });
            },
            onMessage() {

            }
        };
    };
}
