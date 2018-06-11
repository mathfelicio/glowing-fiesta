<template>
    <div class="titulo-pag container">
        <h1>Agenda</h1>
        <hr>
        <div class="col s12">
            <table class="table highlight">
                <thead>
                <tr>
                    <th></th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>E-mail</th>
                    <th>Data de Nascimento</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td></td>
                    <td><input type="text" class="reset-margin browser-default" v-model="filtroNome"></td>
                    <td><input type="text" class="reset-margin browser-default" v-model="filtroCpf"></td>
                    <td><input type="text" class="reset-margin browser-default" v-model="filtroEmail"></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr v-for="contato in contatosComputed">
                    <td><img v-if="contato.foto != null" :src="'/storage/fotos/' + contato.foto" width="50px" alt=""></td>
                    <td>{{contato.nome}}</td>
                    <td>{{contato.cpf}}</td>
                    <td>{{contato.email}}</td>
                    <td>{{contato.data_nascimento}}</td>
                    <td><a :href="'/contato-edit/' + contato.id"><i class="material-icons green-text">edit</i></a></td>
                    <td><a :href="'/confirmar-remocao/' + contato.id" class=""><i class="material-icons red-text">delete</i></a></td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="col s12 right-align icone-add">
            <a href="/contato-create" class="btn-floating btn-large waves-effect waves-light blue darken-1"><i
                    class="material-icons">add</i></a>
        </div>
    </div>
</template>

<script>
    export default {
        name: "listaContatos",
        data() {
            return {
                contatos: [],
                modal: '',
                filtroNome: '',
                filtroCpf: '',
                filtroEmail: ''
            }
        },
        computed: {
            contatosComputed() {
                return this.contatos
                    .filter(contato => contato.nome.toLowerCase().indexOf(this.filtroNome.toLowerCase()) !== -1)
                    .filter(contato => contato.cpf.toLowerCase().indexOf(this.filtroCpf.toLowerCase()) !== -1)
                    .filter(contato => contato.email.indexOf(this.filtroEmail) !== -1);
            }
        },
        methods: {
            buscarContatosForm: function () {
                this.$http.get('/buscar-contatos').then(resposta => {
                    this.contatos = resposta.data
                })
            }
        },
        mounted() {
            this.buscarContatosForm();
        }
    }
</script>

<style lang="sass" scoped>
    .icone-add
        margin: 2em 2em 2em 0

    .reset-margin
        margin: 0 !important

</style>