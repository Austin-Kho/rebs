import AppForm from '../app-components/Form/AppForm';

Vue.component('rebs-department-form', {
    mixins: [AppForm],
    props: ['companies'],
    data: function () {
        return {
            form: {
                company: '',
                name: '',
                description: '',
            }
        }
    }

});
