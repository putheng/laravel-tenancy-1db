<template>
	<div>
		<div class="form-group">
			<div class="d-flex justify-content-between">
				<label>Todos</label>
				<span>0/1</span>
			</div>
			<div class="progress progress-sm">
				<div class="progress-bar bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
					<span class="sr-only">0% Complete</span>
				</div>
			</div>
		</div>

		<div class="form-group">
			<div id="ntTodos" class="todo-list" 
				v-if="todos.length" v-for="(todo, i) in todos"
				:key="i"
			>
				<div class="todo">
					<div class="custom-control custom-checkbox">
						<input 
							type="checkbox" 
							class="custom-control-input" 
							:id="'todo_'+i"
							v-model="todo.value"
						/>

						<label class="custom-control-label" :for="'todo_'+i">
							{{ todo.title }}
						</label>
					</div>
					<div class="todo-actions pr-1">
						<button type="button" class="btn btn-sm btn-light">Delete</button>
					</div>
				</div>
			</div>

			<div class="publisher">
				<div class="publisher-input pr-0">
					<input 
						v-model="newTodo"
						id="ntTodosInpt"
						class="form-control form-control-reflow"
						placeholder="Add a todo" autocomplete="off">
				</div>
				<div class="publisher-actions">
					<div class="publisher-tools pb-0">
						<button 
							@click="addTodo"
							id="ntTodosAdd" type="button" class="btn btn-secondary">
							Add
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	import { mapGetters, mapActions } from 'vuex'

	export default {
		data(){
			return {
				newTodo: ''
			}
		},

		computed: {
			...mapGetters({
				todos: 'space/getNewTaskTodos'
			})
		},

		methods: {
			...mapActions({
				addTodoNewTask: 'space/addTodoNewTask'
			}),
			addTodo(){
				if(this.newTodo === ''){
					return
				}

				this.addTodoNewTask({
					title: this.newTodo,
					value: false
				})

				this.newTodo = ''
			}
		}
	}
</script>