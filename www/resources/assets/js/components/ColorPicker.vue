<template>
    <div>
        <compact-picker v-model="color" :palette="defaultColors"></compact-picker>
        <input type="hidden" :name="inputName" :value="color.hex">
    </div>
</template>

<script>
    import {Compact} from 'vue-color'

    export default {
        props: {
            inputName: {
                type: String,
                required: true
            },
            hexValue: {
                type: String
            },
        },
        data() {
            return {
                color: {
                    hex: this.hexValue
                },
                defaultColors: [
                    '#4D4D4D', '#999999', '#FFFFFF', '#F44E3B', '#FE9200', '#FCDC00',
                    '#DBDF00', '#A4DD00', '#68CCCA', '#73D8FF', '#AEA1FF', '#FDA1FF',

                    '#333333', '#808080', '#CCCCCC', '#D33115', '#E27300', '#FCC400',
                    '#B0BC00', '#68BC00', '#16A5A5', '#009CE0', '#7B64FF', '#FA28FF',

                    '#000000', '#666666', '#B3B3B3', '#9F0500', '#C45100', '#FB9E00',
                    '#808900', '#194D33', '#0C797D', '#0062B1', '#653294', '#AB149E',

                    '#00FF00', '#00FFFF', '#0000FF', '#FF0000', '#FFFF00'
                ]
            }
        },
        components: {
            'compact-picker': Compact
        },
    }
</script>