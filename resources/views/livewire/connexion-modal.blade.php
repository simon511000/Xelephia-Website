<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="connexionModalLabel">Connexion</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form wire:submit.prevent="onSubmitForLogin" novalidate>
            <div class="modal-body">
                @csrf
                <div class="form-group">
                    <label for="connexion-email">Adresse Mail</label>
                    <input
                        type="email"
                        wire:model.lazy="email"
                        class="form-control  @error('email') is-invalid @enderror"
                        id="connexion-email"
                        required
                    >
                    @error('email') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="connexion-password">Mot de Passe</label>
                    <input
                        type="password"
                        wire:model.lazy="password"
                        class="form-control  @error('password') is-invalid @enderror"
                        id="connexion-password"
                        name="password"
                        required
                    >
                    @error('password') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    <small id="passwordHelpBlock" class="form-text text-muted">
                        <a href="#" onclick="return false;" wire:click="motDePasseOublie">Mot de passe oublié ?</a>
                    </small>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <button
                    type="submit"
                    class="btn btn-primary"
                    wire.loading.attr="disabled"
                >
                    <span class="spinner-border spinner-border-sm" wire:loading wire:target="onSubmitForLogin" role="status" aria-hidden="true"></span>
                    Se connecter
                </button>
            </div>
        </form>
    </div>
</div>