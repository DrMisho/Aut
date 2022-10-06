<template>
    <div>
<!--        <ul class="nav nav-tabs" id="myTab" role="tablist">-->
<!--            <li class="nav-item">-->
<!--                <tab-link></tab-link>-->
<!--            </li>-->
<!--        </ul>-->
<!--        <div class="tab-content" id="myTabContent">-->
<!--            <tab-content></tab-content>-->
<!--        </div>-->
<!--      <slot></slot>-->
        <ul class="nav nav-tabs" role="tablist">
            <li v-for="tab in tabs" class="nav-item" :class="{active:tab.isActive,show:tab.isActive}">
                <a href="#" class="nav-link" role="tab" data-toggle="tab" @click.stop.prevent="setActive(tab)">{{ tab.name }}</a>
            </li>
        </ul>
        <div class="tab-content">
            <div v-for="tab in tabs" role="tabpanel" class="tab-pane" :class="{active:tab.isActive,show:tab.isActive}">
                <slot name="tabcontent" :tab="tab">{{ tab.id }}</slot>
            </div>
        </div>
    </div>
</template>

<script>
    // import TabLink from "./TabLink";
    // import TabContent from "./TabContent";
    export default  {
        props: ["tabs"],
        components: {
           // TabLink,
           // TabContent
        },
        ready: function() {
            this.setActive(this.tabs[0]);
        },
        methods: {
            setActive: function(tab) {
                var self = this;
                tab.isActive = true;
                this.activeTab = tab;
                this.tabs.forEach(function(tab) {
                    if (tab.id !== self.activeTab.id) {
                        tab.isActive = false;
                    }
                });
            }
        }
    }
</script>
<style scoped>

</style>
