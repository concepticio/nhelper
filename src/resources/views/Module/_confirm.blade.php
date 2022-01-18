<div class="modal fade" id="modal_confirm{{ $module->id }}" tabindex="-1" role="dialog" aria-labelledby="modal_confirm{{ $module->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popin" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Confirmez la suppression</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('modules.destroy', $module->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <div class="form-group text-center">
                        <p>Confirmez-vous la suppression du Post: <br> "<b>{{ $module->name }}</b>" ?</p>
                        <p class="text-danger"><span><i>Nous vous rappellons que cette action est irrévessible</i></span></p>
                    </div>
                    <div class="modal-footer text-right border-top">
                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal"> Annuler</button>
                        <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-fw fa-lg fa-times-circle"></i> Oui, Supprimer</button>
                    </div>
                </form>

        </div>
    </div>
</div>
