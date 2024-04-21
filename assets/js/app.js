const { createApp } = Vue
createApp({
    data() {
        return {
            disks: [],
            api_url: 'api.php',


        }
    },
    mounted() {
        axios.get(this.api_url)
            .then(response => {
                console.log(response);
                this.disks = response.data
            }).catch(err => {
                console.error(err).message;
            })
    }

}).mount('#app')