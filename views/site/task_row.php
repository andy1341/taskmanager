<tr>
    <td>
        <?= yii\helpers\Html::checkbox('task',false,['value'=>$task->id])?>
    </td>
    <td>
        <?= $task->title ?>
    </td>
    <td>
        <div class="btn-group">
            <?= yii\helpers\Html::a('',[],['class'=>'btn btn-default glyphicon glyphicon-sort']) ?>
            <?= yii\helpers\Html::a(
                '',
                ['/task/update','id'=>$task->id],
                [
                    'class'=>'btn btn-default glyphicon glyphicon-pencil',
                    'data-toggle' => 'modal',
                    'data-target' => '#modal',
                ])
            ?>
            <?= yii\helpers\Html::a(
                '',
                ['/task/delete','id'=>$task->id],
                [
                    'class'=>'btn btn-default glyphicon glyphicon-trash',
                    'name'=>'delete'
                ])
            ?>
        </div>
    </td>
</tr>