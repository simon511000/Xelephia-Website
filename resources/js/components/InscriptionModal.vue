<template>
    <div class="modal fade" id="inscriptionModal" tabindex="-1" role="dialog" aria-labelledby="inscriptionModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="inscriptionModalLabel">Inscription</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" autocomplete="false" @submit.prevent="onRegister" novalidate>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="inscription-name">Pseudo</label>
                            <input type="text" :class="{ 'is-invalid': error && errors.name }" v-model="name" class="form-control" id="inscription-name" name="name" required>
                            <span class="invalid-feedback" v-if="error && errors.name">{{ errors.name[0] }}</span>
                        </div>
                        <div class="form-group">
                            <label for="inscription-email">Adresse Mail</label>
                            <input type="email" :class="{ 'is-invalid': error && errors.email }" v-model="email" class="form-control" id="inscription-email" name="email" required>
                            <span class="invalid-feedback" v-if="error && errors.email">{{ errors.email[0] }}</span>
                        </div>
                        <div class="form-group">
                            <label for="inscription-password">Mot de Passe</label>
                            <input type="password" :class="{ 'is-invalid': error && errors.password }" v-model="password" class="form-control" id="inscription-password" name="password" required>
                            <span class="invalid-feedback" v-if="error && errors.password">{{ errors.password[0] }}</span>
                        </div>
                        <div class="form-group">
                            <label for="inscription-password">Mot de Passe (confirmation)</label>
                            <input type="password" :class="{ 'is-invalid': error && errors.password }" v-model="passwordConfirm" class="form-control" id="inscription-password" name="password-confirm" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-primary" :disabled="isLoading">
                            <span v-if="isLoading" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            S'inscrire
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
                isLoading: false,
                name: '',
                email: '',
                password: '',
                passwordConfirm: '',
                error: false,
                errors: {}
            }
        },
        methods: {
            onRegister(){
                this.isLoading = true;

                let formdata = new FormData();
                formdata.append('email', this.email);
                formdata.append('name', this.name);
                formdata.append('password', this.password);
                formdata.append('password_confirmation', this.passwordConfirm);

                axios.post('/auth/register', formdata)
                    .then(response => {
                        if(response.data.status == 'success')
                        this.isLoading = false;
                        this.error = false;
                        this.name = '';
                        this.email = '';
                        this.password = '';
                        this.passwordConfirm = '';
                        $('#inscriptionModal').modal('hide');
                        $('body').removeClass('modal-open');
                        $('.modal-backdrop').remove();
                        if(response.data.toast){
                            iziToast.show(response.data.toast)
                        }
                    })
                    .catch(error => {
                        this.isLoading = false;
                        this.error = true;
                        this.errors = error.response.data.errors;
                    })
            }
        }
    }
</script>
