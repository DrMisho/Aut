<template>
    <div id="editor">
        <p v-if="label" class="ck-editor-title">{{ label }}</p>
        <ckeditor
            :editor="editor"
            v-model="inputValue"
            :config="config"
            @ready="onReady"
            v-on="$listeners"
            v-bind="$attrs"
        />
    </div>
</template>

<script>
import DecoupledEditor from '@ckeditor/ckeditor5-build-decoupled-document';

export default {
    name: "CkeditorInput",
    props: {
        value: {},
        label: {},
        fileTypes: {
            default: '*'
        },
        uploader: {
            default: 'default',
        },
        language: {
            default: automata.config.language.locale,
        }
    },
    data() {
        return {
            editor: DecoupledEditor,
            inputValue: null,
            config: {
                //plugins: [],
                //toolbar: [ 'ckfinder' ],
                toolbar: {
                    shouldNotGroupWhenFull: true
                },
                ckfinder: {
                    uploadUrl: `api/file-upload?uploader=${this.uploader}`,
                    options: {
                        resourceType: this.fileTypes,
                    }
                },
                language: this.language
            },
        };
    },
    watch: {
        inputValue() {
            this.$emit('input', this.inputValue);
        },
        value: {
            immediate: true,
            handler (newVal) {
                this.inputValue = newVal || '';
            }
        },
    },
    methods: {
        onReady( editor )  {
            // Insert the toolbar before the editable area.
            editor.ui.getEditableElement().parentElement.insertBefore(
                editor.ui.view.toolbar.element,
                editor.ui.getEditableElement()
            );
        }
    }
}
</script>

<style scoped>

</style>
