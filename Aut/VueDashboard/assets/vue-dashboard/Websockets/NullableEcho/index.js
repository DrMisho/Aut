export default function Echo(options) {
    this.options = options;
    this.connector = {
        pusher: {
            connection() {}
        }
    }
    this.private = function (channel) {
        return this;
    };
    this.notification = function (callback) {
        return this;
    };
    this.channel = function (name) {
        return this;
    };
    this.leaveChannel = function (name) {
        return this;
    };
    this.leave = function (name) {
        return this;
    };
    this.socketId = function () {
        return null;
    };
    this.listen = function (event, callback) {
        return this;
    };
    this.here = function (callback) {
        return this;
    }
    this.join = function (room) {
        return this;
    }
    this.joining = function (callback) {
        return this;
    }
    this.leaving = function (callback) {
        return this;
    }
    this.whisper = function (channel, options) {
        return this;
    }
    this.listenForWhisper = function (channel, callback) {
        return this;
    }
    this.connect = function () {

    }
    this.disconnect = function () {

    }
}
