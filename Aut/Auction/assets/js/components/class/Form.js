let  Error = require('./Error.js');

module.exports =	class Form {
    constructor(data) {
        this.orginal = data;

        for (let field in data) {
            this[field] = data[field];
        }

        this.errors = new Error();
    }

    reset() {
        for (let field in this.orginal) {
            this[field] = '';
        }
    }

    submit(typeRquest, url) {
        window.axios[typeRquest](url, this.data())
            .then(resp => {
                this.onSuccess(resp);
            })
            .catch(error => this.onFaild(error));
    }

    appand(key, value) {
        this[key] = value;
    }

    data() {

        let data = Object.assign({}, this);

        delete data.orginal;
        delete data.errors;

        return data;
    }

    onSuccess(resp) {
        this.errors.clear();

        this.reset();
    }

    onFaild(error) {
        if (error.response)
            this.errors.record(error.response.data.errors);
    }
}
