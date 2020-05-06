<template>
    <div class="modal fade" id="connexionModal" tabindex="-1" role="dialog" aria-labelledby="connexionModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="connexionModalLabel">Connexion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" autocomplete="false" @submit.prevent="onLogin" novalidate>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="connexion-email">Adresse Mail</label>
                            <input type="email" :class="{ 'is-invalid': error && errors.email }" v-model="email" class="form-control" id="connexion-email" name="email" required>
                            <span class="invalid-feedback" v-if="error && errors.email">{{ errors.email[0] }}</span>
                        </div>
                        <div class="form-group">
                            <label for="connexion-password">Mot de Passe</label>
                            <input type="password" :class="{ 'is-invalid': error && errors.password }" v-model="password" class="form-control" id="connexion-password" name="password" required>
                            <span class="invalid-feedback" v-if="error && errors.password">{{ errors.password[0] }}</span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-primary" :disabled="isLoading">
                            <span v-if="isLoading" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            Se connecter
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                email: '',
                password: '',
                isLoading: false,
                error: false,
                errors: {}
            }   
        },
        mounted(){
            axios.get('auth/user')
                .then(response => {
                    console.log(response)
                })
                .catch(error => {
                    console.error(error.response)
                })
        },
        methods: {
            onLogin(){
                this.isLoading = true;

                let formdata = new FormData();
                formdata.append('email', this.email);
                formdata.append('password', this.password);

                axios.post('/auth/login', formdata)
                    .then(response => {
                        if(response.data.status == 'success')
                        this.isLoading = false;
                        this.error = false;
                        this.email = '';
                        this.password = '';
                        $('#connexionModal').modal('hide');
                        $('body').removeClass('modal-open');
                        $('.modal-backdrop').remove();
                        if(response.data.toast){
                            iziToast.success(response.data.toast)
                        }
                    })
                    .catch(error => {
                        this.isLoading = false;
                        console.log(error.response)
                        if(error.response.data.status == 'login-error'){
                            this.error = false;
                            iziToast.error({
                                title: 'Erreur!',
                                message: 'Adresse email ou mot de passe incorrect!',
                                position: 'topCenter',
                                titleColor: '#f6861a'
                            })
                        }else {
                            this.error = true;
                            this.errors = error.response.data.errors;
                        }
                    })
            }
        }
    }
</script>
