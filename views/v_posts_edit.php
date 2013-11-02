<form method ='POST' action ='/posts/p_edit/<?=$post['post_id']; ?>'>

<i>Edit your post:</i>
        <br>
        <textarea id='myPost' cols="50" rows="10" type='text' name='content' required>
                <?=$post['content']?>
				
        </textarea>
		<br>
    <input class="buttons" type='submit' value='Update Post'>
</form>