<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="passwordMainModalLabel">Mot de passe oublié</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form wire:submit.prevent="submitEmail" novalidate>
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
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <button
                    type="submit"
                    class="btn btn-primary"
                    wire.loading.attr="disabled"
                >
                    <span class="spinner-border spinner-border-sm" wire:loading wire:target="submitEmail" role="status" aria-hidden="true"></span>
                    Envoyer un lien de réinistialisation
                </button>
            </div>
        </form>
    </div>
</div>