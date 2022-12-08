$(document).ready(function() {
    var app = {
        ready: function() {
            this.methods.show_contact_form();
            this.methods.hide_contact_form();
        },

        methods: {
            show_contact_form: function() {
                $('#showContactFormButton').click(function() {
                    // we need to toggle the class active on the contact form #contactForm
                    $('#contactForm').addClass('active');
                    // we need to focus on the first input field of the form
                    $('#contactForm input:first').focus();
                });
            },
            hide_contact_form: function() {
                $('#hideContactFormButton').click(function() {
                    // we need to toggle the class active on the contact form #contactForm
                    $('#contactForm').removeClass('active');
                });
            },
        },
    }

    app.ready();
});