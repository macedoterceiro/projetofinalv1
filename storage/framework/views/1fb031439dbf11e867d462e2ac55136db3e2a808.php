<?php $__env->startSection('content'); ?>
<div class="card border">
    <div class="card-body">
        <form action="/contatos/<?php echo e($con->id); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="con_nome">Nome do Contato</label>
                <input type="text" class="form-control" name="con_nome" value="<?php echo e($con->con_nome); ?>" id="con_nome" placeholder="<?php echo e($con->con_nome); ?>">            
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
        </form>
    </div>
</div>
       
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ["current" => "contatos"], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>