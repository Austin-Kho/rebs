import AppForm from '../app-components/Form/AppForm';

Vue.component('rebs-bank-account-form', {
    mixins: [AppForm],
    props: ['companies'],
    data: function() {
        return {
            form: {
                company:  '' ,
                name:  '' ,
                bank:  '' ,
                account_number:  '' ,
                manager:  '' ,
                creation_date:  '' ,
                description:  '' ,

            }
        }
    }

});
