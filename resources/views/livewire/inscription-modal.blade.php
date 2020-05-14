<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="inscriptionModalLabel">Inscription</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form wire:submit.prevent="onSubmitForRegister" novalidate>
            <div class="modal-body">
                @csrf
                <div class="form-group">
                    <label for="inscription-name">Pseudo</label>
                    <input
                        type="text"
                        wire:model.lazy="name"
                        class="form-control  @error('name') is-invalid @enderror"
                        id="inscription-name"
                        required
                    >
                    @error('name') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    
                </div>
                <div class="form-group">
                    <label for="inscription-email">Adresse Mail</label>
                    <input
                        type="email"
                        wire:model.lazy="email"
                        class="form-control @error('email') is-invalid @enderror"
                        id="inscription-email"
                        required
                    >
                    @error('email') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="inscription-password">Mot de Passe</label>
                    <input
                        type="password"
                        wire:model.lazy="password"
                        class="form-control @error('password') is-invalid @enderror"
                        id="inscription-password"
                        required
                    >
                    @error('password') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="inscription-password">Mot de Passe (confirmation)</label>
                    <input
                        type="password"
                        wire:model.lazy="passwordConfirm"
                        class="form-control @error('password') is-invalid @enderror"
                        id="inscription-password"
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
                    <span class="spinner-border spinner-border-sm" wire:loading wire:target="onSubmitForRegister" role="status" aria-hidden="true"></span>
                    S'inscrire
                </button>
            </div>
        </form>
    </div>
</div>