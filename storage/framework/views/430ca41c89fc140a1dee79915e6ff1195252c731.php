<?php $__env->startSection('content'); ?>
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Lista de Contatos</h5>
        <?php if(count($cons)>0): ?>
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Contatos</th>     
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $cons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $con): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($con->id); ?></td>
                        <td><?php echo e($con->con_nome); ?></td>
                        <td>
                            <a href="/contatos/editar/<?php echo e($con->id); ?>" class="btn btn-sn btn-primary">Editar</a>
                            <a href="/contatos/apagar/<?php echo e($con->id); ?>" class="btn btn-sn btn-danger">Apagar</a>
                            </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php endif; ?>
    </div>
    <div class="card-footer">
        <a href="/contatos/novocontato" class="btn btn-sn btn-primary">Novo Contato</a>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ["current" => "contatos"], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>