import AppForm from '../app-components/Form/AppForm';

Vue.component('rebs-company-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                name:  '' ,
                registration_number:  '' ,
                ceo:  '' ,
                business_number:  '' ,
                business_type:  '' ,
                sectors:  '' ,
                main_tel:  '' ,
                main_fax:  '' ,
                establishment_date:  '' ,
                opening_date:  '' ,
                tax_invoice_email:  '' ,
                tax_office:  '' ,
                postcode:  '' ,
                address:  '' ,
                detail_address:  '' ,
                extra_address:  '' ,
                
            }
        }
    }

});