<template>
<form>
	<div class="media mb-1">
		<div class="btn btn-light btn-icon fileinput-button">
			<i class="fa fa-paperclip"></i>
			<input type="file" id="pm-attachment" name="pmAttachment[]" multiple>
		</div>
		<div class="media-body">
			<input type="text" class="form-control border-0 shadow-none" name="messageText" placeholder="Type a message">
		</div>
		<div>
			<button type="button" class="btn btn-light btn-icon"><i class="far fa-smile"></i></button>
			<button type="submit" class="btn btn-light btn-icon"><i class="far fa-paper-plane"></i></button>
		</div>
	</div>
</form>
</template>

<script>
	export default {

	}
</script>