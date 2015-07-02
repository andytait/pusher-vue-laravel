Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#csrf_token').getAttribute('content');

new Vue({
    el: '#app',

    ready: function() {
        this.getUsers();

        var self = this;

        var pusher = new Pusher('1f24e3488cb51f1fec79');
        var channel = pusher.subscribe('test_channel');
        channel.bind('App\\Events\\UserHasRegistered', function(message) {
            self.userEvents.push(message.user);
        });
    },

    data: {

        field: 'name',
        reverse: false,

        newUser: {
            name: '',
            email: '',
            password: ''
        },

        users: [],

        userEvents: []
    },

    methods: {

        getUsers: function() {
            this.$http.get('api/users/get', function (users) {
               this.$set('users', users);
            });
        },

        saveUser: function(e) {
            e.preventDefault();

            var user = this.newUser;

            this.users.push({
                name: this.newUser.name,
                email: this.newUser.email
            });

            this.$http.post('users/save', user);

            this.wipeNewUser();
        },

        wipeNewUser: function() {
            this.newUser.name = '';
            this.newUser.email = '';
            this.newUser.password = '';
        }
    }
});