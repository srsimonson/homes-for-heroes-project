<template>
    <div>
        <h3 class="text-center">Persons</h3>
 
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>first_name</th>
                <th>last_name</th>
                <th>age</th>
                <th>phase</th>
                <th>status</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="person in persons" :key="person.id">
                <td>{{ person.first_name }}</td>
                <td>{{ person.last_name }}</td>
                <td>
                    <input v-model="person.age" placeholder="age">
                </td>
                <td>{{ person.phase }}</td>
                <td>{{ person.status }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                persons: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/persons')
                .then(response => {
                    this.posts = response.data;
                });
        },
        methods: {
            deletePerson(id) {
                this.axios
                    .delete(`http://localhost:8000/api/persons/delete/${id}`)
                    .then(response => {
                        let i = this.persons.map(item => item.id).indexOf(id);
                        this.persons.splice(i, 1)
                    });
            }
        }
    }
</script>