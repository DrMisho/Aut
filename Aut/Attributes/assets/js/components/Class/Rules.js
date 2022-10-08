module.exports = class Rules {
    constructor() {

        this.text = [v => !!v || translate('required')];
        this.text_editor = [v => !!v || translate('required')];
        this.number = [
            v => !!v || translate('required'),
            v => (v && !isNaN(v)) || translate('required_number'),
        ];
        this.select = [v => !!v || translate('required_item')];
        this.color = [v => !!v || translate('required')];
        this.date = [v => !!v || translate('required')];
        this.image = [v => !!v || translate('required')];
        this.file = [v => !!v || translate('required')];
        ``
        this.number_range = [v => !!v || translate('required')];
        this.data_range = [v => !!v || translate('required')];
        this.time = [v => !!v || translate('required')];
        this.email = [
            v => !!v || translate('required'),
            v => /.+@.+/.test(v) || translate('required_email')
        ];
        this.date_time = [v => !!v || translate('required')];
    }
    get(field) {
        return this[field];
    }

}
