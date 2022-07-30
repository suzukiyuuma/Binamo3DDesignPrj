<template>
    <div>
        <h1>ユーザー詳細</h1>
        <p>User Id: {{ $route.params.id }}</p>
        <p>User Name: {{ $route.params.name }}</p>
        <p>User Email: {{ $route.params.Email }}</p>
    </div>
</template>
<script>
export default{
    data(){
        return {
            id: this.$route.params.id,
            user: '',
        }
    },
    created(){
        axios.get('/api/user/:' + this.id)
        .then(response => this.user = response.data.user)
        .catch(error => console.log(error));
    }
}
</script>


