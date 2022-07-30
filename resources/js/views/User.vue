<template>
    <div>
        <h1>ユーザー一覧</h1>
        <ul>
            <li 
            v-for="user in users"
            v-bind:key="user.id"
            >
            {{ user.name }}
            {{ user.id }}
            <router-link :to="{ name: 'userDetail', params: {  id: user.id }}">ユーザー詳細</router-link>
            </li>
        </ul>
    </div>
</template>
<script>

export default{
    data(){
        return{
            users:[],
        }
    },
    created(){
        axios.get('/api/user')
        .then(response => {
            this.users = response.data.users;
        })
        .catch(error => {
            console.log(error)
        })
    }
}
</script>
