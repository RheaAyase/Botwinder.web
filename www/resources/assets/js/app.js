import Vue from 'vue'
import store from './vuex/store.js'
import {updateCustomCommands, updateBotwinderCommands, updateRolesData, updateRoles, updateChannels, clearAPIError} from './vuex/actions'

import {mapGetters, mapState} from 'vuex'
import Sticky from './sticky'
import RoleSelector from './components/RoleSelector.vue'
import RolePermission from './components/RolePermission.vue'
import TextField from './components/TextField.vue'
import TosField from './components/TosField.vue'
import TypeSelector from './components/TypeSelector.vue'
import CustomInputList from './components/CustomInputList.vue'
import CustomCommands from './components/CustomCommands.vue'
import Modal from './components/Modal.vue'
import ColorPicker from './components/ColorPicker.vue'
import ListSelector from './components/ListSelector.vue'
import LevelSelector from './components/LevelSelector.vue'
import IgnoreChannelListSelector from './components/IgnoreChannelListSelector.vue'
import AutoAnnounceChannelListSelector from './components/AutoAnnounceChannelListSelector.vue'
import RoleAntispamSelector from "./components/RoleAntispamSelector"
import ProfilesEditor from "./components/ProfilesEditor"
import ReactionRoles from "./components/ReactionRoles"
import CustomLocalisation from "./components/CustomLocalisation";

new Vue({
    store,
    el:'#app',
    components:{
        LevelSelector,
        RoleSelector,
        RolePermission,
        TextField,
        TosField,
        TypeSelector,
        CustomInputList,
        CustomCommands,
        Modal,
        ColorPicker,
        ListSelector,
        IgnoreChannelListSelector,
        RoleAntispamSelector,
        ProfilesEditor,
        ReactionRoles,
        CustomLocalisation,
        AutoAnnounceChannelListSelector,
    },
    computed: {
        errors: {
            get () {
                return this.$store.state.errors;
            },
            set () {
                this.$store.dispatch('clearAPIError')
            }
        },
        ...mapGetters('loading', [
            /*
              `isLoading` returns a function with a parameter of loader name.
              e.g. `isLoading('creating user')` will return you a boolean value.
            */
            'isLoading',
            /*
              `anyLoading` returns a boolean value if any loader name exists on store.
            */
            'anyLoading',
        ]),
        ...mapState([
            'command_prefix',
            'antispam_tolerance_ban',
            'roles',
            'channels',
            'categories',
            'forbidSubmitForm',
            'tos'
         ])
    },
    methods: {
        updateCommandCharacter (e) {
            this.$store.dispatch('updateCommandCharacter', e.target.value)
        },
        onSubmit (e) {
            if (!this.anyLoading && this.tos) {
                document.forms[0].submit();
            }
            else if (!this.tos) {
                alert("Please accept terms of service");
            }
        }
    },
    created() {
        const partArray = window.location.pathname.split( '/' );
        if (partArray[3] === 'edit') {
            let state = JSON.parse(window.__INITIAL_STATE__);
            let localisation = JSON.parse(window.__LOCALISATION_DEFAULTS__);
            this.$store.dispatch('updateRoles', state['roles']);
            this.$store.dispatch('updateChannels', state['channels']);
            this.$store.dispatch('updateCategories', state['categories']);
            this.$store.dispatch('updateCustomCommands', state['custom_commands']);
            this.$store.dispatch('updateRolesData', state['rolesData']);
            this.$store.dispatch('updateLevelsData', state['rolesData'].slice());
            this.$store.dispatch('updateChannelsData', state['channelsData']);
            this.$store.dispatch('updateProfileOptions', state['profile_options']);
            this.$store.dispatch('updateRoleGroups', state['role_groups']);
            this.$store.dispatch('updateReactionRoles', state['reaction_roles']);
            this.$store.dispatch('updateLocalisation', state['localisation']);
            this.$store.dispatch('updateLocalisationDefaults', localisation);
        }
    }
});

function getUrlParameter(sParam) {
    let sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
}
$(function() {
    const navSelector = '#toc';
    const $myNav = $(navSelector);
    let $scope = $('body');
    $scope.scrollspy({
        target: navSelector
    });
    $myNav.find('a:first').tab('show');
    $scope.scrollspy('refresh');

    if (window.location.pathname === '/features' || window.location.pathname === '/docs'){
        setStickySize($myNav);
        new Sticky('.scrollspy');
        // Ugly code to fix something removing active class FOR SOME REASON. Pls fix
        // TODO: I'm going to find you, and I'm going to fix you
        $('header nav.navbar a.nav-link').filter('[href="/features"],[href="/docs"]').addClass('active');
    }
});
$(window).resize(function () {
    if (window.location.pathname === '/features' || window.location.pathname === '/docs'){
        const $toc = $('#toc');
        setStickySize($toc);
    }
});

$(document).scroll(function () {
    if (window.location.pathname === '/features' || window.location.pathname === '/docs'){
        const $toc = $('#toc');
        setStickySize($toc);
    }
});

function setStickySize($element) {
    $element.css('height', ($(window).height() - $element.offset().top + $(document).scrollTop()));
}
