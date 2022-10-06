import NullableFirebase from "./NullableFirebase";
import SdkFirebase from "./SdkFirebase";

export default {
    'null': new NullableFirebase(),
    'sdk': new SdkFirebase(),
};
