<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="resetPasswordModalLabel">Nouveau mot de passe</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form wire:submit.prevent="submitReset" novalidate>
            <div class="modal-body">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="form-group">
                    <label for="reset-email">Adresse email</label>
                    <input
                        type="email"
                        wire:model.lazy="email"
                        class="form-control  @error('email') is-invalid @enderror"
                        id="reset-email"
                        required
                    >
                    @error('email') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="connexion-password">Nouveau Mot de Passe</label>
                    <input
                        type="password"
                        wire:model.lazy="password"
                        class="form-control  @error('password') is-invalid @enderror"
                        id="reset-password"
                        name="password"
                        required
                    >
                    @error('password') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="connexion-password">Nouveau Mot de Passe (confirmation)</label>
                    <input
                        type="password"
                        wire:model.lazy="passwordConfirm"
                        class="form-control  @error('password') is-invalid @enderror"
                        id="reset-password-confirm"
                        name="password"
                        required
                    >
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <button
                    type="submit"
                    class="btn btn-primary"
                    wire.loading.attr="disabled"
                >
                    <span class="spinner-border spinner-border-sm" wire:loading wire:target="submitReset" role="status" aria-hidden="true"></span>
                    Réinitiliser le mot de passe
                </button>
            </div>
        </form>
    </div>
</div>