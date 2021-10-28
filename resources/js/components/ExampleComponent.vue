<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Mensagens</div>

                    <div class="card-body">
                       <p v-for="(message, index) in mensagem" :key="index">
                            <strong>{{ message.titulo }}</strong><br>
                            {{message.mensagem}} <br>
                            <small>{{ message.created_at }}</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
     data () {
         return {
             mensagem: []
         }
     },
    mounted() {
            Echo.channel('canal-mensagem').listen('.EntregaMensagem', (e) => {
                //console.log(e.mensagem.titulo)
            this.mensagem.push(e)
            
            })
        }
    }
</script>
