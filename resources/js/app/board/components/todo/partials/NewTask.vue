<template>
<form id="addNewTask" action="/add-new-task" method="POST" enctype="multipart/form-data">
	<div class="modal fade" id="modalNewTask" tabindex="-1" role="dialog" aria-labelledby="modalNewTaskLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content px-lg-4 py-lg-3">
				<div class="modal-header">
					<h6 id="modalNewTaskLabel" class="modal-title">Add new tasks</h6>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="tasksTitle">Title</label>
						<input type="text" name="taskTitle" id="tasksTitle" class="form-control" required autocomplete="off" data-autofocus="true">
					</div>
					<div class="form-group">
						<div class="d-flex justify-content-between">
							<label for="taskDescription">Description</label>
							<a href="#" onclick="boardDemo.ntMarkdown.togglePreview()" tabindex="-1">Preview</a>
						</div>
						<textarea name="taskDescription" id="taskDescription" class="form-control"></textarea>
						<div class="d-flex align-items-center">
							<span class="text-muted mt-2"><a href="https://simplemde.com/markdown-guide" target="_blank">Markdown</a> is supported</span>
							<div class="btn btn-reset fileinput-button text-muted ml-auto">
								<i class="fa fa-paperclip"></i>
								<span>Attach a file</span>
								<input type="file" name="taskAttachment">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" name="taskVisibility" class="custom-control-input" id="taskVisibility">
							<label class="custom-control-label" for="taskVisibility">Should only be visible to team members.</label>
						</div>
					</div>
					<hr>
					<div class="form-group form-row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Assignee</label>
								<div class="dropdown">
									<button type="button" class="btn btn-secondary btn-block d-flex justify-content-between align-items-center" id="dntAssignees" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span>Beni Arisandi + 1 more</span>
									<span class="fa fa-angle-down"></span>
									</button>
									<div class="dropdown-arrow"></div>
									<assignee></assignee>
								</div>
							</div>
							<div class="form-group">
								<label>Labels</label>
								<div class="dropdown">
									<button type="button" class="btn btn-secondary btn-block d-flex justify-content-between align-items-center" id="bntLabels" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span>No label</span>
									<span class="fa fa-angle-down"></span>
									</button>
									<div class="dropdown-arrow"></div>
									<dropdown-labels></dropdown-labels>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label" for="taskDueDate">Due date</label>
								<div class="input-group input-group-alt flatpickr"
									data-toggle="flatpickr"
									data-wrap="true"
									data-min-date="today">
									<input name="taskDueDate" id="taskDueDate" type="text" class="form-control" data-input>
									<div class="input-group-append">
										<button type="button" class="btn btn-secondary" data-toggle><i class="far fa-calendar"></i></button>
										<button type="button" class="btn btn-secondary" data-clear><i class="fa fa-times"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="form-group">
						<div class="d-flex justify-content-between">
							<label>Todos</label>
							<span id="ntTodosMeter" class="text-muted">(0/1)</span>
						</div>
						<div class="progress progress-sm">
							<div class="progress-bar bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
								<span class="sr-only">0% Complete</span>
							</div>
						</div>
					</div>
					<div class="form-group">
						<input type="hidden" name="ntTodos" value="[{id:0, desc:Eat corn on the cob, checked: false}]">
						<div id="ntTodos" class="todo-list">
							<div class="todo">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="todo0" value="0">
									<label class="custom-control-label" for="todo0">Eat corn on the cob</label>
								</div>
								<div class="todo-actions pr-1">
									<button type="button" class="btn btn-sm btn-light" onclick="boardDemo.removeNtTodo(0)">Delete</button>
								</div>
							</div>
						</div>
						<div class="publisher">
							<div class="publisher-input pr-0">
								<input id="ntTodosInpt" class="form-control form-control-reflow" placeholder="Add a todo" autocomplete="off">
							</div>
							<div class="publisher-actions">
								<div class="publisher-tools pb-0">
									<button id="ntTodosAdd" type="button" class="btn btn-secondary">Add</button>
									<button id="ntTodosClear" type="button" class="btn btn-light"><i class="fa fa-times"></i></button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<hr>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Save</button>
					<button type="reset" class="btn btn-light" data-dismiss="modal">Cancel</button>
				</div>
			</div>
		</div>
	</div>
</form>
</template>

<script>
	import Assignee from './Assignee'
	import DropdownLabels from './DropdownLabels'

	export default {
		components: {
			Assignee,
			DropdownLabels
		}
	}
</script>