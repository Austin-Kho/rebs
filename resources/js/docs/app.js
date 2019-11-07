/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap'

import Vue from 'vue'

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({

    el: '#docs-app',

    mounted: function() {
        hljs.initHighlightingOnLoad();
        this.removeFlashMessages();
        this.setJqueryAjaxHeaders();
        this.initBackToTopButton();
        anchors.add();
    },

    methods: {
        removeFlashMessages() {
            if ($('.alert')) {
                $('.alert').delay(5000).fadeOut();
            }
        },

        setJqueryAjaxHeaders() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        },

        initBackToTopButton() {
            $('#back-to-top').on('click', function() {
                $('body,html').animate({
                    scrollTop: 0
                }, 500);

                return false;
            });

            $(window).on('scroll', function() {
                var scrollPos = $(window).scrollTop();

                if (scrollPos > 500) {
                    $('#back-to-top').fadeIn(100);
                } else {
                    $('#back-to-top').fadeOut(100);
                }
            });
        }
    }
});
