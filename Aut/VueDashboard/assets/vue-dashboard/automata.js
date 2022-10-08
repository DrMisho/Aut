var generator = require('generate-password');

let baseUrl = document.querySelector('meta[name="base-url"]').content;
let baseFullUrl = document.querySelector('meta[name="base-full-url"]').content;
let dir = document.querySelector('meta[name="direction"]').content;
let isRtl = dir === "rtl";
let csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
const querystring = require('querystring');
// import langConfig from './Langs/config';
// import config from "./Config/config";

export default {
    url: {
        baseUrl,
        baseFullUrl,
    },
    dir,
    isRtl,
    config: {
        language: {
            locale: document.querySelector('html').getAttribute('lang'),
            left: isRtl?'right':'left',
            right: isRtl?'left':'right',
        }
    },
    /*language: {
        locale: document.querySelector('html').getAttribute('lang'),
        fallbackLocale: 'en',
        left: isRtl?'right':'left',
        right: isRtl?'left':'right',
        config: langConfig,
    },*/
    helper: {
        generator,
        localizeUrl(url) {
            if (automata.config.language.hideDefault && automata.config.language.locale === automata.config.language.defaultLocale) {
                return url;
            }
            return `${automata.config.language.locale}/${url}`;
        },
        navigatorImageSizeUpdate() {
            let h = document.querySelector('aside').scrollHeight;
        },
        csrfToken,
        cookie: {
            get(cname) {
                let name = cname + "=";
                let ca = document.cookie.split(';');
                for(let i = 0; i < ca.length; i++) {
                    let c = ca[i];
                    while (c.charAt(0) == ' ') {
                        c = c.substring(1);
                    }
                    if (c.indexOf(name) == 0) {
                        return c.substring(name.length, c.length);
                    }
                }
                return "";
            }
        },
        isDark (color) {
            // Variables for red, green, blue values
            var r, g, b, hsp;
            // Check the format of the color, HEX or RGB?
            if (color.match(/^rgb/)) {
                // If RGB --> store the red, green, blue values in separate variables
                color = color.match(/^rgba?\((\d+),\s*(\d+),\s*(\d+)(?:,\s*(\d+(?:\.\d+)?))?\)$/);
                r = color[1];
                g = color[2];
                b = color[3];
            } else {
                // If hex --> Convert it to RGB: http://gist.github.com/983661
                color = +("0x" + color.slice(1).replace(color.length < 5 && /./g, '$&$&'));

                r = color >> 16;
                g = color >> 8 & 255;
                b = color & 255;
            }

            // HSP (Highly Sensitive Poo) equation from http://alienryderflex.com/hsp.html
            hsp = Math.sqrt(
                0.299 * (r * r) +
                0.587 * (g * g) +
                0.114 * (b * b)
            );

            // Using the HSP value, determine whether the color is light or dark
            return hsp <= 127.5;
        },
        getQueryString: querystring.stringify,
        /**
         * https://gist.github.com/joseluisq/819d694db6fd675deae7270b4e55b3ac
         */
        slugify (text, ampersand = 'and') {
            const a = 'àáäâèéëêìíïîòóöôùúüûñçßÿỳýœæŕśńṕẃǵǹḿǘẍźḧ';
            const b = 'aaaaeeeeiiiioooouuuuncsyyyoarsnpwgnmuxzh';
            const p = new RegExp(a.split('').join('|'), 'g');

            return text.toString().toLowerCase()
                .replace(/[\s_]+/g, '-')
                .replace(p, c => b.charAt(a.indexOf(c)))
                .replace(/&/g, `-${ampersand}-`)
                .replace(/[^\w-]+/g, '')
                .replace(/--+/g, '-')
                .replace(/^-+|-+$/g, '');
        },
        googleMapUrl(geolocation) {

            let lat = '';
            let lng = '';

            if (geolocation && typeof geolocation === "string") {
                let x = geolocation.split(',');
                lat = x[0];
                lng = x[1];
            } else if (geolocation && typeof geolocation === "object") {
                lat = geolocation.lat;
                lng = geolocation.lng;
            }

            if (!geolocation || !lat) {
                return `https://www.google.com/maps`;
            }

            return `https://www.google.com/maps/search/?api=1&query=${lat},${lng}`;
        },
        cloneObject($obj) {
            return JSON.parse(JSON.stringify($obj));
        },
        isObject(obj) {
            return obj.constructor === Object;
        }
    },
    rules: {
        required: (value, message) => !!value || message,
        email: (value, message) => {
            const pattern = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
            return pattern.test(value) || 'Invalid e-mail.'
        }
    },
    form: {
        rules: {},
        validation: {
            set(messages, errors) {
                for (let name in messages) {
                    if (errors.hasOwnProperty(name)) {
                        messages[name] = errors[name];
                    } else {
                        messages[name] = null;
                    }
                }
            },
            reset(messages) {
                for (let name in messages) {
                    messages[name] = null;
                }
            },
            check(vue, error, validationMessage, hiddenFields) {
                switch (error.response.status) {
                    case 422: {
                        this.errors.error422(vue, error, validationMessage, hiddenFields)
                    } break;

                    case 419: {
                        vue.$notification.error(vue.$t('message.errors_code.419'));
                    } break;

                    default: {
                        let message = error.response.data.message || error.response.statusText;
                        vue.$notification.error(`${message}`);
                    }
                }
                return error;
            },
            errors: {
                error422 (vue, error, validationMessage, hiddenFields) {
                    hiddenFields = hiddenFields || [];
                    let errorMessage = vue.$t('message.errors_code.422');
                    let hasHiddenFieldError = false;
                    let fieldsError = '';

                    for (let hiddenField of hiddenFields) {
                        if (error.response.data.errors.hasOwnProperty(hiddenField)) {
                            hasHiddenFieldError = true;
                            fieldsError = `${fieldsError}<li>${error.response.data.errors[hiddenField][0]}</li>`;
                        }
                    }
                    if (hasHiddenFieldError) {
                        errorMessage = `<ul><h4>${errorMessage}</h4> ${fieldsError}</ul>`;
                    }

                    vue.$notification.multiLine(hasHiddenFieldError).error(errorMessage);
                    automata.form.validation.set(validationMessage, error.response.data.errors);
                }
            }
        }
    }
};
