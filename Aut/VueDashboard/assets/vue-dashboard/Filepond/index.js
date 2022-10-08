import vueFilePond, {setOptions} from 'vue-filepond';
import FilePondPluginImagePreview from 'filepond-plugin-image-preview';
import FilePondPluginFileValidateType from 'filepond-plugin-file-validate-type';

let headers = {
    "Accept-Language": automata.config.language.locale,
};

let server = {
    url: 'api/file-upload',
    process: {
        headers,
    },
    revert: {
        url: '/',
        headers,
    },
    load: {
        url: '/',
        headers,
    },
    restore: {
        url: 'restore',
        headers,
    },
    fetch: null,
};

setOptions({
    server
});
const FilePond = vueFilePond(
    FilePondPluginImagePreview,
    FilePondPluginFileValidateType
);

export default FilePond;
