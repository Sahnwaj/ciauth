<h2><?php echo $title; ?></h2>

<img src="<?php echo base_url('assests/images/EGIL43804.jpg'); ?>" >
<?php echo validation_errors(); ?>
<?php echo form_open('news/create'); ?>
	
	<div  class="container">
    <label for="title">Title:</label>
    <input type="text" name="title" /><br />
    </div>

    <div class="container">
    <label for="text">Text:</label>
    <textarea name="text"  style="height: 50px "></textarea><br/><br>

    </div><br>

    <div class="container">
    <input type="submit" name="submit" value="Create news item" />
    </div>
</form>
	
<style type="text/css" >
	.container {
		margin-left: 0px;
		width: 100px;
		height: 50px;
	}
	.container label{
		display: inline-block;
		text-align: left;
		float: left;
		width: 100px;
		top: 50%;
		left: 50%;
	}
	.container input{
		display: inline-block;
		text-align: left;
		float: left;
		top: 50%;
		left: 50%;
		/*width: 300px;*/
	}

</style>