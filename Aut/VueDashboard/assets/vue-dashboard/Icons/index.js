import _ from 'lodash';

import MazoutIcon from "./MazoutIcon";
import PetrolIcon from "./PetrolIcon";
import GasIcon from "./GasIcon";
import GoogleMapIcon from "./GoogleMapIcon";

import icons from '../../../../../resources/assets/js/icons';

export default _.merge({
    'mazout': {
        component: MazoutIcon,
    },
    'gas': {
        component: GasIcon,
    },
    'petrol': {
        component: PetrolIcon,
    },
    'google-map': {
        component: GoogleMapIcon,
    }
}, icons);
