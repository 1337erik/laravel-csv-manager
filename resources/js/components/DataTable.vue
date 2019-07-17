<template>

    <v-data-table
        :headers=" headers "
        :items=" items "
        class="elevation-1"
    >

        <template v-slot:items=" data ">

            <td>{{ data.item.name }}</td>
            <td class="text-xs">{{ data.item.email }}</td>
            <td class="text-xs">{{ data.item.created_at }}</td>
        </template>
    </v-data-table>
</template>

<script>

    export default {

        props: [ 'items' ],
        data(){

            return {

                headers : [

                    {
                        text: 'Name',
                        align: 'left',
                        value: 'name'
                    },
                    { text: 'Email',    value: 'email' },
                    { text: 'Created',  value: 'created' }
                ]
            }
        }
    }
</script>
