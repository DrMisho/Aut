Vue.filter('money', function (value, symbol, precision, thousand, decimal, format) {
    symbol = symbol || '';
    precision = precision || 0;
    format = format || "%v %s";
    return accounting.formatMoney(value, symbol, precision, thousand, decimal, format);
});
