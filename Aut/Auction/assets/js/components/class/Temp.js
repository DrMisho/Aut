module.exports =class Temp {
    constructor() {

    }

    set(locale) {
        this[locale] = new Locale();
    }

    setField(values) {
        let itmes = Object.assign({}, values);
        for (let index in itmes) {
            this[index] = itmes[index];
        }
    }

    setWithVal(name, value) {
        this[name] = value;
    }

    getObj() {
        let fields = Object.assign({}, this);
        return fields;
    }
}
