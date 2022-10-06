import Echo from "laravel-echo"
import NullableEcho from "./NullableEcho";

export default {
    'null': NullableEcho,
    'laravel-echo': Echo,
};

/*
export default function (driver, option) {
    if (driver === 'laravel-echo') {
        return new Echo(option);
    }
    return new NullableEcho(option);
};
*/
