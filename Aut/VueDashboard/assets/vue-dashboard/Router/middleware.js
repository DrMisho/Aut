window.middleware = {};

middleware.auth = function (to, from, next) {
    return true;
};

middleware.guest = function (to, from, next) {

};

middleware.verified = function (to, from, next) {

};


export default middleware;