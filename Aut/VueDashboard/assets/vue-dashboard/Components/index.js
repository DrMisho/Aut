import App from '../Dashboard/Views/Layouts/App';
import FilePond from "../Filepond";
import ApexChart from 'vue-apexcharts';
import PasswordField from "./PasswordField";
import CardList from "./CardList";
import Confirm from "./Confirm";
import ConfirmBtn from "./ConfirmBtn";
import ButtonGroups from "./ButtonGroups";
import Autocomplete from "./Autocomplete";
import SelectInput from "./SelectInput";
import FilePondInput from "./FilePondInput";
import TagsInput from "./TagsInput";
import ColorInput from "./ColorInput";
import GeolocationInput from "./GeolocationInput";
import SlugInput from "./SlugInput";
import DateInput from "./DateInput";
import TimeInput from "./TimeInput";
import DateTimeInput from "./DateTimeInput";
import CkeditorInput from './CkeditorInput';
import TranslationInput from './TranslationInput';
import Form from "./Form/Form";
import DataTable from "./DataTables/DataTable";
import TestComponent from './TestComponent';
import ImagePreview from './ImagePreview';
import GeolocationPreview from "./GeolocationPreview";
import DataTableBtn from "./DataTableBtn";
import JsonPreview from "./JsonPreview";
import LoadMore from './LoadMore';
import PhoneInput from './PhoneInput';
import MobileInput from './MobileInput';
import PriceInput from './PriceInput';
import DialogImport from './DialogImport';
// import FilePondInput2 from "./FilePondInput2";


Vue.component('PasswordField', PasswordField);
Vue.component('PhoneInput', PhoneInput);
Vue.component('MobileInput', MobileInput);
Vue.component('PriceInput', PriceInput);
Vue.component('ApexChart', ApexChart);
Vue.component('CardList', CardList);
Vue.component('Confirm', Confirm);
Vue.component('ConfirmBtn', ConfirmBtn);
Vue.component('ButtonGroups', ButtonGroups);
Vue.component('Autocomplete', Autocomplete);
Vue.component('SelectInput', SelectInput);
Vue.component('FilePondInput', FilePondInput);
Vue.component('GeolocationInput', GeolocationInput);
Vue.component('SlugInput', SlugInput);
Vue.component('DateInput', DateInput);
Vue.component('TimeInput', TimeInput);
Vue.component('DateTimeInput', DateTimeInput);
Vue.component('TagsInput', TagsInput);
Vue.component('ColorInput', ColorInput);
Vue.component('CkeditorInput', CkeditorInput);
Vue.component('TranslationInput', TranslationInput);
Vue.component('Form', Form);
Vue.component('DataTable', DataTable);
Vue.component('TestComponent', TestComponent);
Vue.component('ImagePreview', ImagePreview);
Vue.component('GeolocationPreview', GeolocationPreview);
Vue.component('DataTableBtn', DataTableBtn);
Vue.component('JsonPreview', JsonPreview);
Vue.component('LoadMore', LoadMore);
Vue.component('DialogImport', DialogImport);
// Vue.component('FilePondInput2', FilePondInput2);

export default {
    App,
    FilePond,
}
