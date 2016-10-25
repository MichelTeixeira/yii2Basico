<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
?>
<h1>Listagem de Cursos</h1>

<h3><a href="<?php echo Url::to(['course/create']); ?>">Novo Curso</a></h3>

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Horas</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($courses as $course): ?>
        <tr>
            <td><?php echo $course->id; ?></td>
            <td><?php echo $course->name; ?></td>
            <td><?php echo $course->hours; ?></td>
            <td>
                <a href="<?php echo Url::to(['course/update', 'id'=>$course->id]); ?>">Editar</a> | 
                <a href="<?php echo Url::to(['course/delete', 'id'=>$course->id]); ?>">Excluir</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
