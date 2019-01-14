<?php $__env->startSection('content'); ?>
<div class="card border">
    <div class="card-body">
        <form action="/contatos/<?php echo e($idcon); ?>/telefones" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="tel_numero">Numero do Contato</label>
                <input type="text" class="form-control" name="tel_numero" id="tel_numero" placeholder="99999999999">            
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
        </form>
    </div>
</div>
       
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ["current" => "telefones"], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>