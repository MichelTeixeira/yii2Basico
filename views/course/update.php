<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
?>
<h1>Atualizar Curso: <?php echo $model->name; ?></h1>

<form name="form" method="post" action="<?php echo Url::to(['course/update', 'id'=>$model->id]); ?>">
    <input type="hidden"
           name="<?php echo \Yii::$app->request->csrfParam; ?>"
           value="<?php echo \Yii::$app->request->csrfToken; ?>" >
    <div class="form-group">
        <label for="name">Nome:</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo $model->name; ?>" placeholder="Digite o nome">
    </div>
    <div class="form-group">
        <label for="hours">Horas:</label>
        <input type="text" class="form-control" id="hours" name="hours" value="<?php echo $model->hours; ?>" placeholder="Digite a carga horária">
    </div>
    
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>