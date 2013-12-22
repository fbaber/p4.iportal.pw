
<div class="content">
<form method ='POST' action ='/posts/p_edit/<?=$post['post_id']; ?>'>

<h4>Edit your post:</h4>
        <br>
        <textarea id='myPost' cols="50" rows="10" type='text' name='content' required><?=nl2br($post['content'])?></textarea>
		<br><br>
    <input class="buttons" class="btn btn-primary" type='submit' value='Update Post'>
</form>
</div>