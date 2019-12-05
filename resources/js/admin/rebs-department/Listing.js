import AppListing from '../app-components/Listing/AppListing';

Vue.component('rebs-department-listing', {
    mixins: [AppListing],

    data() {
        return {
            showCompaniesFilter: false,
            companiesMultiselect: {},

            filters: {
                companies: [],
            },
        }
    },

    watch: {
        showCompaniesFilter: function (newVal, oldVal) {
            this.companiesMultiselect = [];
        },
        companiesMultiselect: function(newVal, oldVal) {
            this.filters.companies = newVal.map(function(object) { return object['key']; });
            this.filter('companies', this.filters.companies);
        }
    }
});