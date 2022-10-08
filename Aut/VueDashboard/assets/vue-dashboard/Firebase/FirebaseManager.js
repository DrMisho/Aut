import SdkFirebase from "./SdkFirebase";
import NullableFirebase from "./NullableFirebase";

export default function (driver, config) {
    if (driver === 'sdk') {
        return new SdkFirebase(config);
    }
    return new NullableFirebase(config);
};
