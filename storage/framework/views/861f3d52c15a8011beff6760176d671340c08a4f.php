<?php $__env->startSection('content'); ?>
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Lista de Telefones</h5>
        <?php if(count($tels)>0): ?>
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Telefones</th>                  
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $tels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($tel->id); ?></td>
                        <td><?php echo e($tel->tel_numero); ?></td>
                        <td>
                            <a href="/contatos/<?php echo e($idcon); ?>/telefones/editar/<?php echo e($tel->id); ?>" class="btn btn-sn btn-primary">Editar</a>
                            <a href="/contatos/<?php echo e($idcon); ?>/telefones/apagar/<?php echo e($tel->id); ?>" class="btn btn-sn btn-danger">Apagar</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php endif; ?>
    </div>
    <div class="card-footer">
        <a href="/contatos/<?php echo e($idcon); ?>/telefones/novotelefone" class="btn btn-sn btn-primary">Novo Telefone</a>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ["current" => "telefones"], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>