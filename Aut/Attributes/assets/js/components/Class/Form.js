let  Locale = require('./Locale.js');
module.exports = class Form {
    constructor() {
        let itmes = Object.assign({}, values);
        for (let index in itmes) {
            if(index = locales){
                for(let locale in items.locales){

                    this[locale] = new Locale();

                    for(let feature_trans in  items.translation)
                    {
                        this[locale].set(feature_trans,'');
                        
                        this[feature_trans] = '';
                    } 
                }
              
            }
            else{
                this[index] = itmes[index];
            }
        }
    }
    set(locale) {
        this[locale] = new Locale();
    }
    setField(values) {
        
    }
    setWithVal(name, value) {
        this[name] = value;
    }
    getObj() {
        let fields = Object.assign({}, this);
        return fields;
    }

}