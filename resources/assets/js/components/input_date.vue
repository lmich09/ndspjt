<template>
    <div>
        <div class="input-group">
            <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </div>
            <input class="form-control pull-right datepicker" type="text" :name="name" :value="date" :bind-to="bindTo" :xmark="uuid">
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            name: { default: '' },
            bindTo : { default: '' },
            dateval: { default: ''},
        },
        data() {
            return {
                date: '',
                uuid: uuidv4(),
            }
        },
        created() {
            if (this.dateval !== this.date) this.date = this.dateval;
        },
        mounted() {
            $(`input[xmark=${this.uuid}]`)
                .datepicker({
                    'setDate': 'today',
                    'autoclose': true,
                    'format': 'dd MM yyyy',
                    'language': 'en'
                })
                .on('changeDate', (e) => {
                    this.date = e.currentTarget.value;
                    if (this.bindTo !== '') {
                        vueEvent.$emit('ID-dateChanged', this.bindTo, this.date);
                    }
                });
        },
    }
</script>
