module.exports = class Error {
    constructor() {
        this.errors = {};
    }

    get(field) {
        if (Object.keys(this.errors).length > 0) {
            if (this.errors.hasOwnProperty(field))
                // console.log(this.errors[field][0]);
                return this.errors[field][0];
        }
    }

    has(field) {
        return Object.keys(this.errors).length > 0 && this.errors.hasOwnProperty(field);
    }

    clear(field) {

        if (Object.keys(this.errors).length > 0 && this.errors.hasOwnProperty(field)) {
            this.errors[field][0] = '';
        } else if (!field) {
            this.errors = {};
        }
    }

    any() {

        return Object.keys(this.errors).length > 0;
    }

    record(error) {
        this.errors = error;
    }

}
